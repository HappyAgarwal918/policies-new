<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Payment;
use App\billing;
use DB;
 
class PaymentController extends Controller
{
    public function billingsave(Request $request)
    {
        // $lastInvoiceID = billing::pluck('invoice_id')->last();
        // $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $data = $request->all();
        $data['invoice_id'] = '#'.uniqid();

        $user = billing::create($data);

        return view('policy.payment');
    }

    public function charge(Request $request)
    {
        $stripe = DB::table('stripe')->where('id', 2)->first(); 

        if ($request->input('stripeToken')) {
  
            $gateway = Omnipay::create('Stripe');


            $gateway->setApiKey($stripe->values);
          
            $token = $request->input('stripeToken');
          
            $response = $gateway->purchase([
                'amount' => $request->input('amount'),
                'currency' => env('STRIPE_CURRENCY'),
                'token' => $token,
            ])->send();
          
            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();

                 
                $isPaymentExist = Payment::where('payment_id', $arr_payment_data['id'])->first();
          
                if(!$isPaymentExist)
                {
                    // $payment = Payment::where('unique_id', $unique_id)->first();
                    $payment = new Payment;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = env('STRIPE_CURRENCY');
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->payunique = $request->input('newunique');
                    
                    $payment->save();
                }

                return view('policy.complete');
 
                // return "Payment is successful. Your payment id is: ". $arr_payment_data['id'];
            } else {
                // payment failed: display message to customer
                return $response->getMessage();
            }
        }
    }
}