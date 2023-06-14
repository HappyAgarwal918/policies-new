@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/policies.css')}}">
@endsection

@section('content')

@php
$id = $_GET['form-id'];  
$a = DB::table('policy')->where('unique_id', $id)->first(); 
   $platforms = $a -> platforms;
   $register = $a -> register;
   $info_access = $a -> info_access;
   $info_delete = $a -> info_delete;
   $interact = $a -> interact;
   $contacts = $a -> contacts;
   $payments_method = $a -> payments_method;
   $info_visible = $a -> info_visible;
   $publish = $a -> publish;
   $share = $a -> share;
   $sell = $a -> sell;
   $info = $a -> info;
   $california = $a -> california;
   $europe = $a -> europe;
   $teens = $a -> teens;
   $newsletters = $a -> newsletters;
   $newsletters_remote = $a -> newsletters_remote;
   $notify = $a -> notify;
   $ads = $a -> ads;
   $breach = $a -> breach;
   $company = $a -> company;
   $purpose = $a -> purpose;

   $arrayName = explode(",", $purpose);
   $arayName = explode(",", $info)
@endphp
@if($a->editor != NULL)
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">
                        Privacy policy for {{$a->website_url}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
       <!-- Nav tabs -->
      <div class="card">
        <div class="card-header">
          <ul class="nav policies-tabs" role="tablist">
            <li class="policies-item">
              <a class="nav-link active" data-toggle="tab" href="#View" role="tab">View policy</a>
            </li>
            <li class="policies-item">
              <a class="nav-link" data-toggle="tab" href="#HTML" role="tab">HTML code</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="View" role="tabpanel">
                <div class="box"> <!-- view text -->
                    {!! $a->editor !!}
                </div>
                <h4 class="my-3">Link to your policy (recommended)</h4>
                <p>We recommend linking to your policy directly from your website. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/privacy-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/privacy-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
                        <pre style="white-space: pre-wrap;">{{ $a->editor }}</pre>
                    </div>
                </div>
                <h4 class="my-3">Copy HTML code</h4>
                <p>If you rather not link to the policy directly, you may copy the HTML code of the policy directly to your app.</p>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_text')">Copy text</button>
                <span id="copied-text-success" class="copied">Text Copied!</span>
            </div>
            <ul class="button_main">
                <li><a href="privacy-policy?form-id=<?php echo $id; ?>" class="button ybtn ybtn-header-color">Re-run questionnaire</a></li>
                <li><a class="button ybtn ybtn-white ybtn-shadow" href="custom-clause?form-id=<?php echo $id ?>">Custom clauses</a></li>
                <li><a class="button btn-danger ybtn" href="{{ route('policydestroy',$id) }}" onclick="return confirm('Are you sure you want to Delete?');">Delete policy</a>
                </li>
            </ul>
          </div>
        </div>
    </div>
    </div>
</div>
@else
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Privacy policy for <?php if($platforms == 'Website URL') {echo $a -> website_url;} 
                        elseif($platforms == 'Mobile App Name') {echo $a -> mobile_name;} ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
       <!-- Nav tabs -->
      <div class="card">
        <div class="card-header">
          <ul class="nav policies-tabs" role="tablist">
            <li class="policies-item">
              <a class="nav-link active" data-toggle="tab" href="#View" role="tab">View policy</a>
            </li>
            <li class="policies-item">
              <a class="nav-link" data-toggle="tab" href="#HTML" role="tab">HTML code</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="View" role="tabpanel">
                <div class="box"> <!-- view text -->
                    <h1>Privacy policy</h1>
<p><?php if($platforms == 'Website URL') { echo '
    This privacy policy ("Policy") describes how the personally identifiable information ("Personal Information") you may provide on the
    '; echo $a -> website_url; echo ' website ("Website" or "Service") and any of its related products and services (collectively, "Services") is
    collected, protected and used. It also describes the choices available to you regarding our use of your Personal Information and how you can access and update this information. This Policy is
    a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    else { echo'this Website operator';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    else { echo'Operator';} echo '","we", "us" or "our"). By accessing and using the Website and Services, you acknowledge that
    you have read, understood, and agree to be bound by the terms of this Policy. This Policy does not apply to the practices of companies that we do not own or control, or to individuals that we
    do not employ or manage.';} 

    elseif ($platforms == 'Mobile App Name') { echo '
    <p>This privacy policy ("Policy") describes how the personally identifiable information ("Personal Information") you may provide in the '; echo $a -> mobile_name; echo 'mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services") is collected, protected and used. It also describes the choices available to you regarding our use of your Personal Information and how you can access and update this information. This Policy is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    else { echo'this Mobile Application developer';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    else { echo'Develepor';} echo '", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Policy. This Policy does not apply to the practices of companies that we do not own or control, or to individuals that we do not employ or manage.</p>';} ?>
</p>

<?php if($register == 1){ echo '
<h2>Automatic collection of information</h2>';

 if($platforms == 'Website URL') { echo '
<p>
    When you open the Website, our servers automatically record information that your browser sends. This data may include information such as your devices IP address, browser type and version,
    operating system type and version, language preferences or the webpage you were visiting before you came to the Website and Services, pages of the Website and Services that you visit, the time
    spent on those pages, information you search for on the Website, access times and dates, and other statistics.</p>
    <p>
    Information collected automatically is used only to identify potential cases of abuse and establish statistical information regarding the usage and traffic of the Website and Services. This
    statistical information is not otherwise aggregated in such a way that would identify any particular user of the system.
</p>';}
    elseif ($platforms == 'Mobile App Name') { echo '
       <p> When you use the Mobile Application, our servers automatically record information that your device sends. This data may include information such as your devices IP address and location, device name and version, operating system type and version, language preferences, information you search for in the Mobile Application, access times and dates, and other statistics.</p>';} 
    } ?>

<?php if($info_access == 1) { echo '
<h2>Collection of personal information</h2>
<p>
    You can access and use the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' without telling us who you are or revealing any information by which someone could identify you as a specific, identifiable individual. If,
    however, you wish to use some of the features on the Website, you may be asked to provide certain Personal Information (for example, your name and e-mail address). We receive and store any
    information you knowingly provide to us when you create an account, publish content, make a purchase, or fill any online forms on the Website. When required, this information may include the
    geolocation data of the mobile device such as latitude and longitude.
</p>
<ul>';
 foreach ($arayName as $b => $value) {
    if($value == 'personal') {echo '
    <li>Personal details such as name, country of residence, etc.</li>';}
    if($value == 'contact') {echo '
    <li>Contact information such as email address, address, etc.</li>';}
    if($value == 'account') {echo '
    <li>Account details such as user name, unique user ID, password, etc.</li>';}
    if($value == 'identity') {echo '
    <li>Proof of identity such as photocopy of a government ID.</li>';}
    if($value == 'payment') {echo '
    <li>Payment information such as credit card details, bank details, etc.</li>';}
    if($value == 'people') {echo '
    <li>Information about other individuals such as your family members, friends, etc.</li>';}
    if($value == 'other') {echo '
    <li>Any other materials you willingly submit to us such as articles, images, feedback, etc.</li>
</ul> ';}}
}?>
<?php if($info_access == 0) { echo '
<h2>Collection of information</h2>
<p>Our top priority is customer data security and, as such, we exercise the no logs policy. We may process only minimal user data, only as much as it is absolutely necessary to maintain the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. Information collected automatically is used only to identify potential cases of abuse and establish statistical information regarding the usage and traffic of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. This statistical information is not otherwise aggregated in such a way that would identify any particular user of the system.</p>
';} ?>


<?php if ($info_delete == 1) { echo '<p>
    Some of the information we collect is directly from you via the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. However, we may also collect Personal Information about you from other sources such as public databases,
    social media platforms, third-party data providers, and our joint marketing partners. Personal Information we collect from other sources may include demographic information, such as age and
    gender, device information, such as IP addresses, location, such as city and state, and online behavioral data, such as information about your use of social media websites, page view
    information and search results and links. You can choose not to provide us with your Personal Information, but then you may not be able to take advantage of some of the features on the
    Website. Users who are uncertain about what information is mandatory are welcome to contact us.
</p>';} ?>
<h2>Use and processing of collected information</h2>
<p>
    In order to make the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> available to you, or to meet a legal obligation, we need to collect and use certain Personal Information. If you do not provide the information that
    we request, we may not be able to provide you with the requested products or services. Any of the information we collect from you may be used for the following purposes:
</p>
<ul><?php foreach ($arrayName as $b => $value) {
    if($value == 'manage_accounts') {echo '
    <li>Create and manage user accounts</li>';}
    if($value == 'sell_services') {echo '
    <li>Fulfill and manage orders</li>';}
    if($value == 'deliver_services') {echo '
    <li>Deliver products or services</li>';}
    if($value == 'improve_services') {echo '
    <li>Improve products and services</li>';}
    if($value == 'send_admin') {echo '
    <li>Send administrative information</li>';}
    if($value == 'send_promo') {echo '
    <li>Send marketing and promotional communications</li>';}
    if($value == 'support') {echo '
    <li>Respond to inquiries and offer support</li>';}
    if($value == 'request_feedback') {echo '
    <li>Request user feedback</li>';}
    if($value == 'improve_experience') {echo '
    <li>Improve user experience</li>';}
    if($value == 'share_testimonials') {echo '
    <li>Post customer testimonials</li>';}
    if($value == 'show_ads') {echo '
    <li>Deliver targeted advertising</li>';}
    if($value == 'competitions') {echo '
    <li>Administer prize draws and competitions</li>';}
    if($value == 'enforce_policies') {echo '
    <li>Enforce terms and conditions and policies</li>';}
    if($value == 'protect_services') {echo '
    <li>Protect from abuse and malicious users</li>';}
    if($value == 'legal_requests') {echo '
    <li>Respond to legal requests and prevent harm</li>';}}?>
    <li>Run and operate the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?></li> 
</ul> 

<p>
    Processing your Personal Information depends on how you interact with the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>, where you are located in the world and if one of the following applies: (i) you have given your
    consent for one or more specific purposes; this, however, does not apply, whenever the processing of Personal Information is subject to European data
    protection law; (ii) provision of information is necessary for the performance of an agreement with you and/or for any pre-contractual obligations thereof; (iii) processing is necessary for
    compliance with a legal obligation to which you are subject; (iv) processing is related to a task that is carried out in the public interest or in the exercise of official authority vested in
    us; (v) processing is necessary for the purposes of the legitimate interests pursued by us or by a third party.
</p>
<p>
    Note that under some legislations we may be allowed to process information until you object to such processing (by opting out), without having to rely on consent or any other of the following
    legal bases below. In any case, we will be happy to clarify the specific legal basis that applies to the processing, and in particular whether the provision of Personal Information is a
    statutory or contractual requirement, or a requirement necessary to enter into a contract.
</p>
<h2>Billing and payments</h2>
<p><?php if ($payments_method == 'remote,local') { echo '
    In case of services requiring payment, we request credit card or other payment account information, which will be used solely for processing payments. Your purchase transaction data is stored
    only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted. Where necessary for processing future payments and
    subject to your prior consent, your financial information will be stored in encrypted form on secure servers of our reputed payment gateway service provider who is beholden to treating your
    Personal Information in accordance with this Policy. All direct payment gateways adhere to the latest security standards as managed by the PCI Security Standards Council, which is a joint
    effort of brands like Visa, MasterCard, American Express and Discover. Sensitive and private data exchange happens over a SSL secured communication channel and is encrypted and protected with
    digital signatures, and the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' are also in compliance with PCI vulnerability standards in order to create as secure of an environment as possible for Users. Scans for malware
    are performed on a regular basis for additional security and protection.
';}
elseif ($payments_method == 'local') {echo '
    In case of services requiring payment, we request credit card or other payment account information, which will be used solely for processing payments. Your purchase transaction data is stored
    only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted. Where necessary for processing future payments and
    subject to your prior consent, your financial information will be stored in encrypted form on secure servers of our reputed payment gateway service provider who is beholden to treating your
    Personal Information in accordance with this Policy. All direct payment gateways adhere to the latest security standards as managed by the PCI Security Standards Council, which is a joint
    effort of brands like Visa, MasterCard, American Express and Discover. Sensitive and private data exchange happens over a SSL secured communication channel and is encrypted and protected with
    digital signatures, and the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' are also in compliance with PCI vulnerability standards in order to create as secure of an environment as possible for Users. Scans for malware
    are performed on a regular basis for additional security and protection.
';}
elseif ($payments_method == 'remote') { echo'
We use third party payment processors to assist us in processing your payment information securely. Such third party processors use of your Personal Information is governed by their respective privacy policies which may or may not contain privacy protections as protective as this Policy. We suggest that you review their respective privacy policies.';} ?>

<?php if($info_visible == 1 && $platforms == 'Website URL') {echo '
<h2>Managing information</h2>
<p>
    You are able to delete certain Personal Information we have about you. The Personal Information you can delete may change as the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' change. When you delete Personal
    Information, however, we may maintain a copy of the unrevised Personal Information in our records for the duration necessary to comply with our obligations to our affiliates and partners, and
    for the purposes described below. If you would like to delete your Personal Information or permanently delete your account, you can do so by contacting us.
</p>';}
elseif ($info_visible == 1 && $platforms == 'Mobile App Name') {echo '
<h2>Managing information</h2>
<p>
    You are able to delete certain Personal Information we have about you. The Personal Information you can delete may change as the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' change. When you delete Personal
    Information, however, we may maintain a copy of the unrevised Personal Information in our records for the duration necessary to comply with our obligations to our affiliates and partners, and
    for the purposes described below. If you would like to delete your Personal Information or permanently delete your account, you can do so on the settings page of your account in the Mobile Application.
</p>';} ?>


<h2>Disclosure of information</h2>
<p>
    Depending on the requested Services or as necessary to complete any transaction or provide any service you have requested, we may contract with other companies and share your information with your consent with our trusted
    third parties that work with us, any other affiliates and subsidiaries we rely upon to assist in the operation of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> available to you. We do not share Personal
    Information with unaffiliated third parties. These service providers are not authorized to use or disclose your information except as necessary to perform services on our behalf or comply with
    legal requirements. We may share your Personal Information for these purposes only with third parties whose privacy policies are consistent with ours or who agree to abide by our policies with
    respect to Personal Information. These third parties are given Personal Information they need only in order to perform their designated functions, and we do not authorize them to use or
    disclose Personal Information for their own marketing or other purposes.
</p>

<?php if($share == 1) { echo '
<p>
    We will disclose any Personal Information we collect, use or receive if required or permitted by law, such as to comply with a subpoena, or similar legal process, and when we believe in good
    faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond to a government request.
</p>
<p>
    In the event we go through a business transition, such as a merger or acquisition by another company, or sale of all or a portion of its assets, your user account, and Personal Information
    will likely be among the assets transferred.
</p>';} ?>

<h2>Retention of information</h2>
<p>
    We will retain and use your Personal Information for the period necessary to comply with our legal obligations, resolve disputes, and enforce our agreements unless a longer retention period is
    required or permitted by law. We may use any aggregated data derived from or incorporating your Personal Information after you update or delete it, but not in a manner that would identify you
    personally. Once the retention period expires, Personal Information shall be deleted. Therefore, the right to access, the right to erasure, the right to rectification and the right to data
    portability cannot be enforced after the expiration of the retention period.
</p>
<?php if($sell == 1) {echo '
<h2>Transfer of information</h2>
<p>
    Depending on your location, data transfers may involve transferring and storing your information in a country other than your own. You are entitled to learn about the legal basis of
    information transfers to a country outside the European Union or to any international organization governed by public international law or set up by two or more countries, such as the UN, and
    about the security measures taken by us to safeguard your information. If any such transfer takes place, you can find out more by checking the relevant sections of this Policy or inquire with
    us using the information provided in the contact section.
</p>';} ?>

<h2>The rights of users</h2>
<p>
    You may exercise certain rights regarding your information processed by us. In particular, you have the right to do the following: (i) you have the right to withdraw consent where you have
    previously given your consent to the processing of your information; (ii) you have the right to object to the processing of your information if the processing is carried out on a legal basis
    other than consent; (iii) you have the right to learn if information is being processed by us, obtain disclosure regarding certain aspects of the processing and obtain a copy of the
    information undergoing processing; (iv) you have the right to verify the accuracy of your information and ask for it to be updated or corrected; (v) you have the right, under certain
    circumstances, to restrict the processing of your information, in which case, we will not process your information for any purpose other than storing it; (vi) you have the right, under certain
    circumstances, to obtain the erasure of your Personal Information from us; (vii) you have the right to receive your information in a structured, commonly used and machine readable format and,
    if technically feasible, to have it transmitted to another controller without any hindrance. This provision is applicable provided that your information is processed by automated means and
    that the processing is based on your consent, on a contract which you are part of or on pre-contractual obligations thereof.
</p>
<?php if($info != null) {echo ' 
<h2>The right to object to processing</h2>
<p>
    Where Personal Information is processed for the public interest, in the exercise of an official authority vested in us or for the purposes of the legitimate interests pursued by us, you may
    object to such processing by providing a ground related to your particular situation to justify the objection. You must know that, however, should your Personal Information be processed for
    direct marketing purposes, you can object to that processing at any time without providing any justification. To learn, whether we are processing Personal Information for direct marketing
    purposes, you may refer to the relevant sections of this document.
</p>
<h2>Data protection rights under GDPR</h2>
<p>
    If you are a resident of the European Economic Area (EEA), you have certain data protection rights and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' aims to take reasonable steps to allow you to correct, amend, delete, or
    limit the use of your Personal Information. If you wish to be informed what Personal Information we hold about you and if you want it to be removed from our systems, please contact us. In
    certain circumstances, you have the following data protection rights:
</p>
<ul>
    <li>You have the right to request access to your Personal Information that we store and have the ability to access your Personal Information.</li>
    <li>
        You have the right to request that we correct any Personal Information you believe is inaccurate. You also have the right to request us to complete the Personal Information you believe is
        incomplete.
    </li>
    <li>You have the right to request the erase your Personal Information under certain conditions of this Policy.</li>
    <li>You have the right to object to our processing of your Personal Information.</li>
    <li>
        You have the right to seek restrictions on the processing of your Personal Information. When you restrict the processing of your Personal Information, we may store it but will not process
        it further.
    </li>
    <li>You have the right to be provided with a copy of the information we have on you in a structured, machine-readable and commonly used format.</li>
    <li>You also have the right to withdraw your consent at any time where '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' relied on your consent to process your Personal Information.</li>
</ul>
<p>
    You have the right to complain to a Data Protection Authority about our collection and use of your Personal Information. For more information, please contact your local data protection
    authority in the European Economic Area (EEA).
</p> ';} ?>
<?php if($california == 1) { echo ' 
<h2>California privacy rights</h2>
<p>
    In addition to the rights as explained in this Policy, California residents who provide Personal Information (as defined in the statute) to obtain products or services for personal, family, or
    household use are entitled to request and obtain from us, once a calendar year, information about the Personal Information we shared, if any, with other businesses for marketing uses. If
    applicable, this information would include the categories of Personal Information and the names and addresses of those businesses with which we shared such personal information for the
    immediately prior calendar year (e.g., requests made in the current year will receive information about the prior year). To obtain this information please contact us.
    Furthermore, California residents have the right to opt-out of the sale of their Personal Information which may include selling, disclosing or transferring Personal Information to another business or a third party for monetary or other valuable consideration. To do so, please visit our Do Not Sell page or simply contact us.
</p>';} ?>

<?php if($europe == 1) { echo '
<h2>How to exercise these rights</h2>
<p>
    Any requests to exercise your rights can be directed to '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' through the contact details provided in this document. Please note that we may ask you to verify your identity before
    responding to such requests. Your request must provide sufficient information that allows us to verify that you are the person you are claiming to be or that you are the authorized
    representative of such person. You must include sufficient details to allow us to properly understand the request and respond to it. We cannot respond to your request or provide you with
    Personal Information unless we first verify your identity or authority to make such a request and confirm that the Personal Information relates to you.
</p>';} ?>
<?php if($teens == 0) { echo '
<h2>Privacy of children</h2>
<p>
    We do not knowingly collect any Personal Information from children under the age of 18. If you are under the age of 18, please do not submit any Personal Information through the Website and
    Services. We encourage parents and legal guardians to monitor their childrens Internet usage and to help enforce this Policy by instructing their children never to provide Personal
    Information through the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' without their permission. If you have reason to believe that a child under the age of 18 has provided Personal Information to us through the
    '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', please contact us. You must also be at least 16 years of age to consent to the processing of your Personal Information in your country (in some countries we may allow
    your parent or guardian to do so on your behalf).
</p>';} ?>
<?php if($teens == 1) { echo '
<h2>Privacy of children</h2>
<p>
    We recognize the need to provide further privacy protections with respect to Personal Information we may collect from children and take many special precautions to protect the privacy of children. We may require a child to disclose some information to use the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. We encourage children to consult with their parents before submitting any information to any online resource , including our '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. We believe parents should be involved in the online activities of their children and suggest that parents do their best to provide their children with a safe and friendly online environment.
</p>';} ?>
<h2>Cookies</h2>
<p>
    The <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> use "cookies" to help personalize your online experience. A cookie is a text file that is placed on your hard disk by a web page server. Cookies cannot be used to run
    programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you.
</p>
<p>
    We may use cookies to collect, store, and track information for statistical purposes to operate the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>. You have the ability to accept or decline cookies. Most web browsers
    automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the features of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>. <a target="_blank" href="#">Click here</a> to learn more about cookies and how they work.
</p>
<h2>Do Not Track signals</h2>
<p>
    Some browsers incorporate a Do Not Track feature that signals to websites you visit that you do not want to have your online activity tracked. Tracking is not the same as using or collecting information in connection with a website. For these purposes, tracking refers to collecting personally identifiable information from consumers who use or visit a website or online service as they move across different websites over time. How browsers communicate the Do Not Track signal is not yet uniform. As a result, the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> are not yet set up to interpret or respond to Do Not Track signals communicated by your browser. Even so, as described in more detail throughout this Policy, we limit our use and collection of your personal information.
</p>
<?php if($ads == 1) { echo '
<h2>Advertisements</h2>
    <p> We may display online advertisements and we may share aggregated and non-identifying information about our customers that we or  our advertisers collect through your use of the Mobile Application and Services. We do not share personally identifiable information about individual customers with advertisers. In some instances, we may use this aggregated and non-identifying information to deliver tailored advertisements to the intended audience. 
    We may permit certain third party companies to help us tailor advertising that we think may be of interest to users and to collect and use other data about user activities on the Website.
    These companies may deliver ads that might place cookies and otherwise track user behavior.
</p>
<h2>Affiliates</h2>
<p>We may engage in affiliate marketing and have affiliate links present on the Mobile Application and Services. If you click on an affiliate link, a cookie will be placed on your browser to track any sales for purposes of commissions.</p>';} ?>

<?php if($newsletters == 1) { echo '
<h2>Email marketing</h2>
<p>
    We offer electronic newsletters to which you may voluntarily subscribe at any time. We are committed to keeping your e-mail address confidential and will not disclose your email address to any
    third parties except as allowed in the information use and processing section or for the purposes of utilizing a third party provider to send such emails. We will maintain the information sent
    via e-mail in accordance with applicable laws and regulations.
</p> ';} ?>

<?php if($newsletters_remote == 1) { echo '
<p>
    In compliance with the CAN-SPAM Act, all e-mails sent from us will clearly state who the e-mail is from and provide clear information on how to contact the sender. You may choose to stop
    receiving our newsletter or marketing emails by following the unsubscribe instructions included in these emails or by contacting us. However, you will continue to receive essential
    transactional emails.
</p>';} ?>

<h2>Links to other resources</h2>
<p>
    The <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> contain links to other resources that are not owned or controlled by us. Please be aware that we are not responsible for the privacy practices of such other resources
    or third parties. We encourage you to be aware when you leave the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> and to read the privacy statements of each and every resource that may collect Personal Information.
</p>
<h2>Information security</h2>
<p>
    We secure information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use, or disclosure. We maintain reasonable administrative,
    technical, and physical safeguards in an effort to protect against unauthorized access, use, modification, and disclosure of Personal Information in its control and custody. However, no data
    transmission over the Internet or wireless network can be guaranteed. Therefore, while we strive to protect your Personal Information, you acknowledge that (i) there are security and privacy
    limitations of the Internet which are beyond our control; (ii) the security, integrity, and privacy of any and all information and data exchanged between you and the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>
    cannot be guaranteed; and (iii) any such information and data may be viewed or tampered with in transit by a third party, despite best efforts.
</p>
<h2>Data breach</h2>
<p>
    In the event we become aware that the security of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> has been compromised or users Personal Information has been disclosed to unrelated third parties as a result of
    external activity, including, but not limited to, security attacks or fraud, we reserve the right to take reasonably appropriate measures, including, but not limited to, investigation and
    reporting, as well as notification to and cooperation with law enforcement authorities. In the event of a data breach, we will make reasonable efforts to notify affected individuals if we
    believe that there is a reasonable risk of harm to the user as a result of the breach or if notice is otherwise required by law. When we do, we will 
    <?php if($breach == 'site,email,phone,letter') { echo ' post a notice in the Mobile Application, send you an email, get in touch with you over the phone, mail you a letter. ';} ?>
    <?php if($breach == 'site,email,phone') { echo ' post a notice in the Mobile Application, send you an email, get in touch with you over the phone. ';} ?>
    <?php if($breach == 'site,email,letter') { echo ' post a notice in the Mobile Application, send you an email, mail you a letter. ';} ?>
    <?php if($breach == 'site,phone,letter') { echo ' post a notice in the Mobile Application, get in touch with you over the phone, mail you a letter. ';} ?>
    <?php if($breach == 'email,phone,letter') { echo ' send you an email, get in touch with you over the phone, mail you a letter. ';} ?>
    <?php if($breach == 'site,email') { echo ' post a notice in the Mobile Application, send you an email. ';} ?>
    <?php if($breach == 'site,phone') { echo ' post a notice in the Mobile Application,  get in touch with you over the phone. ';} ?>
    <?php if($breach == 'site,letter') { echo ' post a notice in the Mobile Application, mail you a letter. ';} ?>
    <?php if($breach == 'email,letter') { echo ' send you an email, mail you a letter. ';} ?>
    <?php if($breach == 'email,phone') { echo ' send you an email, get in touch with you over the phone. ';} ?>
    <?php if($breach == 'phone,letter') { echo ' get in touch with you over the phone, mail you a letter. ';} ?>
    <?php if($breach == 'site') { echo ' post a notice in the Mobile Application. ';} ?>
    <?php if($breach == 'email') { echo '  send you an email. ';} ?>
    <?php if($breach == 'phone') { echo ' get in touch with you over the phone. ';} ?>
    <?php if($breach == 'letter') { echo ' mail you a letter. ';} ?>

</p>
<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
<h2>Custom Clause</h2>   
<?php } foreach ($clauses as $clause) { ?>
<h2><?php echo $clause->title ?></h2>
<p><?php echo $clause->text; ?></p>
<?php } ?>
<h2>Changes and amendments</h2>
<p>
    We reserve the right to modify this Policy or its terms relating to the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> from time to time in our discretion and will notify you of any material changes to the way in which
    we treat Personal Information. When we do,<?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?> We may also provide notice to you in other ways in our discretion, such as through
    contact information you have provided. Any updated version of this Policy will be effective immediately upon the posting of the revised Policy unless otherwise specified. Your continued use of
    the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> after the effective date of the revised Policy (or such other act specified at that time) will constitute your consent to those changes. However, we will not, without
    your consent, use your Personal Information in a manner materially different than what was stated at the time your Personal Information was collected.
</p>
<h2>Acceptance of this policy</h2>
<p>
    You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> you agree to be bound by this Policy. If you do not
    agree to abide by the terms of this Policy, you are not authorized to access or use the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.
</p>
<h2>Contacting us</h2>
<p>
    If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to individual rights and your Personal Information, You may<?php if($contacts == 'form') { echo ', do so via the '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email') { echo '
                                               , do so via the '; echo $a -> contact_form; echo ', send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'email,address') { echo '
                                               , send an email to '; echo $a -> contact_email; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,address') { echo '
                                               , do so via the '; echo $a -> contact_form; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email,address') { echo '
                                               , do so via the '; echo $a -> contact_form;
                                               echo ', send an email to '; echo $a -> contact_email; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>.</p>
<p>This document was last updated on <?php echo $a -> updated_at ; ?></p>
                </div>
                <h4 class="my-3">Link to your policy (recommended)</h4>
                <p>We recommend linking to your policy directly from your website. We host it for free and it will ensure automatic updates and compliance with the latest requirements and regulations.</p>
                <h4 class="my-3">Public link to your policy</h4>
                <pre class="link"><code id="policy_html_link">@php echo url('') @endphp/privacy-premium-policy?form-id=<?php echo $id ?></code></pre>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_link')">Copy Link</button>
                <span id="copied-link-success" class="copied">Link Copied!</span>
                <a class="ybtn ybtn-header-color" target="_blank" href="@php echo url('') @endphp/privacy-premium-policy?form-id=<?php echo $id ?>" type="button">View policy</a>
            </div>
            <div class="tab-pane" id="HTML" role="tabpanel">
                <div class="box">
                    <div class="pre_text" id="policy_html_text"> <!-- html text -->
&lt;h1&gt;Privacy policy&lt;/h1&gt;
&lt;p&gt;<?php if($platforms == 'Website URL') { echo '
    This privacy policy ("Policy") describes how the personally identifiable information ("Personal Information") you may provide on the
    '; echo $a -> website_url; echo ' website ("Website" or "Service") and any of its related products and services (collectively, "Services") is
    collected, protected and used. It also describes the choices available to you regarding our use of your Personal Information and how you can access and update this information. This Policy is
    a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    else { echo'this Website operator';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    else { echo'Operator';} echo '","we", "us" or "our"). By accessing and using the Website and Services, you acknowledge that
    you have read, understood, and agree to be bound by the terms of this Policy. This Policy does not apply to the practices of companies that we do not own or control, or to individuals that we
    do not employ or manage.';} 

    elseif ($platforms == 'Mobile App Name') { echo '
    &lt;p&gt;This privacy policy ("Policy") describes how the personally identifiable information ("Personal Information") you may provide in the '; echo $a -> mobile_name; echo 'mobile application ("Mobile Application" or "Service") and any of its related products and services (collectively, "Services") is collected, protected and used. It also describes the choices available to you regarding our use of your Personal Information and how you can access and update this information. This Policy is a legally binding agreement between you ("User", "you" or "your") and '; if($company ==1){ echo $a -> company_name;}
    else { echo'this Mobile Application developer';} echo ' ("'; if($company ==1){ echo $a -> company_name;}
    else { echo'Develepor';} echo '", "we", "us" or "our"). By accessing and using the Mobile Application and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Policy. This Policy does not apply to the practices of companies that we do not own or control, or to individuals that we do not employ or manage.&lt;/p&gt;';} ?>
&lt;/p&gt;

<?php if($register == 1){ echo '
&lt;h2&gt;Automatic collection of information&lt;/h2&gt;';

 if($platforms == 'Website URL') { echo '
&lt;p&gt;
    When you open the Website, our servers automatically record information that your browser sends. This data may include information such as your devices IP address, browser type and version,
    operating system type and version, language preferences or the webpage you were visiting before you came to the Website and Services, pages of the Website and Services that you visit, the time
    spent on those pages, information you search for on the Website, access times and dates, and other statistics.&lt;/p&gt;
    &lt;p&gt;
    Information collected automatically is used only to identify potential cases of abuse and establish statistical information regarding the usage and traffic of the Website and Services. This
    statistical information is not otherwise aggregated in such a way that would identify any particular user of the system.
&lt;/p&gt;';}
    elseif ($platforms == 'Mobile App Name') { echo '
       &lt;p&gt; When you use the Mobile Application, our servers automatically record information that your device sends. This data may include information such as your devices IP address and location, device name and version, operating system type and version, language preferences, information you search for in the Mobile Application, access times and dates, and other statistics.&lt;/p&gt;';} 
    } ?>

<?php if($info_access == 1) { echo '
&lt;h2&gt;Collection of personal information&lt;/h2&gt;
&lt;p&gt;
    You can access and use the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' without telling us who you are or revealing any information by which someone could identify you as a specific, identifiable individual. If,
    however, you wish to use some of the features on the Website, you may be asked to provide certain Personal Information (for example, your name and e-mail address). We receive and store any
    information you knowingly provide to us when you create an account, publish content, make a purchase, or fill any online forms on the Website. When required, this information may include the
    geolocation data of the mobile device such as latitude and longitude.
&lt;/p&gt;
&lt;ul&gt;';
 foreach ($arayName as $b => $value) {
    if($value == 'personal') {echo '
    &lt;li&gt;Personal details such as name, country of residence, etc.&lt;/li&gt;';}
    if($value == 'contact') {echo '
    &lt;li&gt;Contact information such as email address, address, etc.&lt;/li&gt;';}
    if($value == 'account') {echo '
    &lt;li&gt;Account details such as user name, unique user ID, password, etc.&lt;/li&gt;';}
    if($value == 'identity') {echo '
    &lt;li&gt;Proof of identity such as photocopy of a government ID.&lt;/li&gt;';}
    if($value == 'payment') {echo '
    &lt;li&gt;Payment information such as credit card details, bank details, etc.&lt;/li&gt;';}
    if($value == 'people') {echo '
    &lt;li&gt;Information about other individuals such as your family members, friends, etc.&lt;/li&gt;';}
    if($value == 'other') {echo '
    &lt;li&gt;Any other materials you willingly submit to us such as articles, images, feedback, etc.&lt;/li&gt;
&lt;/ul&gt; ';}}
}?>
<?php if($info_access == 0) { echo '
&lt;h2&gt;Collection of information&lt;/h2&gt;
&lt;p&gt;Our top priority is customer data security and, as such, we exercise the no logs policy. We may process only minimal user data, only as much as it is absolutely necessary to maintain the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. Information collected automatically is used only to identify potential cases of abuse and establish statistical information regarding the usage and traffic of the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. This statistical information is not otherwise aggregated in such a way that would identify any particular user of the system.&lt;/p&gt;
';} ?>


<?php if ($info_delete == 1) { echo '&lt;p&gt;
    Some of the information we collect is directly from you via the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. However, we may also collect Personal Information about you from other sources such as public databases,
    social media platforms, third-party data providers, and our joint marketing partners. Personal Information we collect from other sources may include demographic information, such as age and
    gender, device information, such as IP addresses, location, such as city and state, and online behavioral data, such as information about your use of social media websites, page view
    information and search results and links. You can choose not to provide us with your Personal Information, but then you may not be able to take advantage of some of the features on the
    Website. Users who are uncertain about what information is mandatory are welcome to contact us.
&lt;/p&gt;';} ?>
&lt;h2&gt;Use and processing of collected information&lt;/h2&gt;
&lt;p&gt;
    In order to make the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> available to you, or to meet a legal obligation, we need to collect and use certain Personal Information. If you do not provide the information that
    we request, we may not be able to provide you with the requested products or services. Any of the information we collect from you may be used for the following purposes:
&lt;/p&gt;
&lt;ul&gt;<?php foreach ($arrayName as $b => $value) {
    if($value == 'manage_accounts') {echo '
    &lt;li&gt;Create and manage user accounts&lt;/li&gt;';}
    if($value == 'sell_services') {echo '
    &lt;li&gt;Fulfill and manage orders&lt;/li&gt;';}
    if($value == 'deliver_services') {echo '
    &lt;li&gt;Deliver products or services&lt;/li&gt;';}
    if($value == 'improve_services') {echo '
    &lt;li&gt;Improve products and services&lt;/li&gt;';}
    if($value == 'send_admin') {echo '
    &lt;li&gt;Send administrative information&lt;/li&gt;';}
    if($value == 'send_promo') {echo '
    &lt;li&gt;Send marketing and promotional communications&lt;/li&gt;';}
    if($value == 'support') {echo '
    &lt;li&gt;Respond to inquiries and offer support&lt;/li&gt;';}
    if($value == 'request_feedback') {echo '
    &lt;li&gt;Request user feedback&lt;/li&gt;';}
    if($value == 'improve_experience') {echo '
    &lt;li&gt;Improve user experience&lt;/li&gt;';}
    if($value == 'share_testimonials') {echo '
    &lt;li&gt;Post customer testimonials&lt;/li&gt;';}
    if($value == 'show_ads') {echo '
    &lt;li&gt;Deliver targeted advertising&lt;/li&gt;';}
    if($value == 'competitions') {echo '
    &lt;li&gt;Administer prize draws and competitions&lt;/li&gt;';}
    if($value == 'enforce_policies') {echo '
    &lt;li&gt;Enforce terms and conditions and policies&lt;/li&gt;';}
    if($value == 'protect_services') {echo '
    &lt;li&gt;Protect from abuse and malicious users&lt;/li&gt;';}
    if($value == 'legal_requests') {echo '
    &lt;li&gt;Respond to legal requests and prevent harm&lt;/li&gt;';}}?>
    &lt;li&gt;Run and operate the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>&lt;/li&gt; 
&lt;/ul&gt; 

&lt;p&gt;
    Processing your Personal Information depends on how you interact with the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>, where you are located in the world and if one of the following applies: (i) you have given your
    consent for one or more specific purposes; this, however, does not apply, whenever the processing of Personal Information is subject to European data
    protection law; (ii) provision of information is necessary for the performance of an agreement with you and/or for any pre-contractual obligations thereof; (iii) processing is necessary for
    compliance with a legal obligation to which you are subject; (iv) processing is related to a task that is carried out in the public interest or in the exercise of official authority vested in
    us; (v) processing is necessary for the purposes of the legitimate interests pursued by us or by a third party.
&lt;/p&gt;
&lt;p&gt;
    Note that under some legislations we may be allowed to process information until you object to such processing (by opting out), without having to rely on consent or any other of the following
    legal bases below. In any case, we will be happy to clarify the specific legal basis that applies to the processing, and in particular whether the provision of Personal Information is a
    statutory or contractual requirement, or a requirement necessary to enter into a contract.
&lt;/p&gt;
&lt;h2&gt;Billing and payments&lt;/h2&gt;
&lt;p&gt;<?php if ($payments_method == 'remote,local') { echo '
    In case of services requiring payment, we request credit card or other payment account information, which will be used solely for processing payments. Your purchase transaction data is stored
    only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted. Where necessary for processing future payments and
    subject to your prior consent, your financial information will be stored in encrypted form on secure servers of our reputed payment gateway service provider who is beholden to treating your
    Personal Information in accordance with this Policy. All direct payment gateways adhere to the latest security standards as managed by the PCI Security Standards Council, which is a joint
    effort of brands like Visa, MasterCard, American Express and Discover. Sensitive and private data exchange happens over a SSL secured communication channel and is encrypted and protected with
    digital signatures, and the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' are also in compliance with PCI vulnerability standards in order to create as secure of an environment as possible for Users. Scans for malware
    are performed on a regular basis for additional security and protection.';}
elseif ($payments_method == 'local') {echo '
    In case of services requiring payment, we request credit card or other payment account information, which will be used solely for processing payments. Your purchase transaction data is stored
    only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted. Where necessary for processing future payments and
    subject to your prior consent, your financial information will be stored in encrypted form on secure servers of our reputed payment gateway service provider who is beholden to treating your
    Personal Information in accordance with this Policy. All direct payment gateways adhere to the latest security standards as managed by the PCI Security Standards Council, which is a joint
    effort of brands like Visa, MasterCard, American Express and Discover. Sensitive and private data exchange happens over a SSL secured communication channel and is encrypted and protected with
    digital signatures, and the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' are also in compliance with PCI vulnerability standards in order to create as secure of an environment as possible for Users. Scans for malware
    are performed on a regular basis for additional security and protection.
';}
elseif ($payments_method == 'remote') { echo'
We use third party payment processors to assist us in processing your payment information securely. Such third party processors use of your Personal Information is governed by their respective privacy policies which may or may not contain privacy protections as protective as this Policy. We suggest that you review their respective privacy policies.';} ?>

<?php if($info_visible == 1 && $platforms == 'Website URL') {echo '
&lt;h2&gt;Managing information&lt;/h2&gt;
&lt;p&gt;
    You are able to delete certain Personal Information we have about you. The Personal Information you can delete may change as the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' change. When you delete Personal
    Information, however, we may maintain a copy of the unrevised Personal Information in our records for the duration necessary to comply with our obligations to our affiliates and partners, and
    for the purposes described below. If you would like to delete your Personal Information or permanently delete your account, you can do so by contacting us.
&lt;/p&gt;';}
elseif ($info_visible == 1 && $platforms == 'Mobile App Name') {echo '
&lt;h2&gt;Managing information&lt;/h2&gt;
&lt;p&gt;
    You are able to delete certain Personal Information we have about you. The Personal Information you can delete may change as the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' change. When you delete Personal
    Information, however, we may maintain a copy of the unrevised Personal Information in our records for the duration necessary to comply with our obligations to our affiliates and partners, and
    for the purposes described below. If you would like to delete your Personal Information or permanently delete your account, you can do so on the settings page of your account in the Mobile Application.
&lt;/p&gt;';} ?>


&lt;h2&gt;Disclosure of information&lt;/h2&gt;
&lt;p&gt;
    Depending on the requested Services or as necessary to complete any transaction or provide any service you have requested, we may contract with other companies and share your information with your consent with our trusted
    third parties that work with us, any other affiliates and subsidiaries we rely upon to assist in the operation of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> available to you. We do not share Personal
    Information with unaffiliated third parties. These service providers are not authorized to use or disclose your information except as necessary to perform services on our behalf or comply with
    legal requirements. We may share your Personal Information for these purposes only with third parties whose privacy policies are consistent with ours or who agree to abide by our policies with
    respect to Personal Information. These third parties are given Personal Information they need only in order to perform their designated functions, and we do not authorize them to use or
    disclose Personal Information for their own marketing or other purposes.
&lt;/p&gt;

<?php if($share == 1) { echo '
&lt;p&gt;
    We will disclose any Personal Information we collect, use or receive if required or permitted by law, such as to comply with a subpoena, or similar legal process, and when we believe in good
    faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond to a government request.
&lt;/p&gt;
&lt;p&gt;
    In the event we go through a business transition, such as a merger or acquisition by another company, or sale of all or a portion of its assets, your user account, and Personal Information
    will likely be among the assets transferred.
&lt;/p&gt;';} ?>

&lt;h2&gt;Retention of information&lt;/h2&gt;
&lt;p&gt;
    We will retain and use your Personal Information for the period necessary to comply with our legal obligations, resolve disputes, and enforce our agreements unless a longer retention period is
    required or permitted by law. We may use any aggregated data derived from or incorporating your Personal Information after you update or delete it, but not in a manner that would identify you
    personally. Once the retention period expires, Personal Information shall be deleted. Therefore, the right to access, the right to erasure, the right to rectification and the right to data
    portability cannot be enforced after the expiration of the retention period.
&lt;/p&gt;
<?php if($sell == 1) {echo '
&lt;h2&gt;Transfer of information&lt;/h2&gt;
&lt;p&gt;
    Depending on your location, data transfers may involve transferring and storing your information in a country other than your own. You are entitled to learn about the legal basis of
    information transfers to a country outside the European Union or to any international organization governed by public international law or set up by two or more countries, such as the UN, and
    about the security measures taken by us to safeguard your information. If any such transfer takes place, you can find out more by checking the relevant sections of this Policy or inquire with
    us using the information provided in the contact section.
&lt;/p&gt;';} ?>

&lt;h2&gt;The rights of users&lt;/h2&gt;
&lt;p&gt;
    You may exercise certain rights regarding your information processed by us. In particular, you have the right to do the following: (i) you have the right to withdraw consent where you have
    previously given your consent to the processing of your information; (ii) you have the right to object to the processing of your information if the processing is carried out on a legal basis
    other than consent; (iii) you have the right to learn if information is being processed by us, obtain disclosure regarding certain aspects of the processing and obtain a copy of the
    information undergoing processing; (iv) you have the right to verify the accuracy of your information and ask for it to be updated or corrected; (v) you have the right, under certain
    circumstances, to restrict the processing of your information, in which case, we will not process your information for any purpose other than storing it; (vi) you have the right, under certain
    circumstances, to obtain the erasure of your Personal Information from us; (vii) you have the right to receive your information in a structured, commonly used and machine readable format and,
    if technically feasible, to have it transmitted to another controller without any hindrance. This provision is applicable provided that your information is processed by automated means and
    that the processing is based on your consent, on a contract which you are part of or on pre-contractual obligations thereof.
&lt;/p&gt;
<?php if($info != null) {echo ' 
&lt;h2&gt;The right to object to processing&lt;/h2&gt;
&lt;p&gt;
    Where Personal Information is processed for the public interest, in the exercise of an official authority vested in us or for the purposes of the legitimate interests pursued by us, you may
    object to such processing by providing a ground related to your particular situation to justify the objection. You must know that, however, should your Personal Information be processed for
    direct marketing purposes, you can object to that processing at any time without providing any justification. To learn, whether we are processing Personal Information for direct marketing
    purposes, you may refer to the relevant sections of this document.
&lt;/p&gt;
&lt;h2&gt;Data protection rights under GDPR&lt;/h2&gt;
&lt;p&gt;
    If you are a resident of the European Economic Area (EEA), you have certain data protection rights and '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' aims to take reasonable steps to allow you to correct, amend, delete, or
    limit the use of your Personal Information. If you wish to be informed what Personal Information we hold about you and if you want it to be removed from our systems, please contact us. In
    certain circumstances, you have the following data protection rights:
&lt;/p&gt;
&lt;ul&gt;
    &lt;li&gt;You have the right to request access to your Personal Information that we store and have the ability to access your Personal Information.&lt;/li&gt;
    &lt;li&gt;
        You have the right to request that we correct any Personal Information you believe is inaccurate. You also have the right to request us to complete the Personal Information you believe is
        incomplete.
    &lt;/li&gt;
    &lt;li&gt;You have the right to request the erase your Personal Information under certain conditions of this Policy.&lt;/li&gt;
    &lt;li&gt;You have the right to object to our processing of your Personal Information.&lt;/li&gt;
    &lt;li&gt;
        You have the right to seek restrictions on the processing of your Personal Information. When you restrict the processing of your Personal Information, we may store it but will not process
        it further.
    &lt;/li&gt;
    &lt;li&gt;You have the right to be provided with a copy of the information we have on you in a structured, machine-readable and commonly used format.&lt;/li&gt;
    &lt;li&gt;You also have the right to withdraw your consent at any time where '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' relied on your consent to process your Personal Information.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;
    You have the right to complain to a Data Protection Authority about our collection and use of your Personal Information. For more information, please contact your local data protection
    authority in the European Economic Area (EEA).
&lt;/p&gt; ';} ?>
<?php if($california == 1) { echo ' 
&lt;h2&gt;California privacy rights&lt;/h2&gt;
&lt;p&gt;
    In addition to the rights as explained in this Policy, California residents who provide Personal Information (as defined in the statute) to obtain products or services for personal, family, or
    household use are entitled to request and obtain from us, once a calendar year, information about the Personal Information we shared, if any, with other businesses for marketing uses. If
    applicable, this information would include the categories of Personal Information and the names and addresses of those businesses with which we shared such personal information for the
    immediately prior calendar year (e.g., requests made in the current year will receive information about the prior year). To obtain this information please contact us.
    Furthermore, California residents have the right to opt-out of the sale of their Personal Information which may include selling, disclosing or transferring Personal Information to another business or a third party for monetary or other valuable consideration. To do so, please visit our Do Not Sell page or simply contact us.
&lt;/p&gt;';} ?>

<?php if($europe == 1) { echo '
&lt;h2&gt;How to exercise these rights&lt;/h2&gt;
&lt;p&gt;
    Any requests to exercise your rights can be directed to '; 
     if($company ==1){ echo $a -> company_name;}
    elseif ($company == 0) { echo'Operator';} echo ' through the contact details provided in this document. Please note that we may ask you to verify your identity before
    responding to such requests. Your request must provide sufficient information that allows us to verify that you are the person you are claiming to be or that you are the authorized
    representative of such person. You must include sufficient details to allow us to properly understand the request and respond to it. We cannot respond to your request or provide you with
    Personal Information unless we first verify your identity or authority to make such a request and confirm that the Personal Information relates to you.
&lt;/p&gt;';} ?>
<?php if($teens == 0) { echo '
&lt;h2&gt;Privacy of children&lt;/h2&gt;
&lt;p&gt;
    We do not knowingly collect any Personal Information from children under the age of 18. If you are under the age of 18, please do not submit any Personal Information through the Website and
    Services. We encourage parents and legal guardians to monitor their childrens Internet usage and to help enforce this Policy by instructing their children never to provide Personal
    Information through the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ' without their permission. If you have reason to believe that a child under the age of 18 has provided Personal Information to us through the
    '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo ', please contact us. You must also be at least 16 years of age to consent to the processing of your Personal Information in your country (in some countries we may allow
    your parent or guardian to do so on your behalf).
&lt;/p&gt;';} ?>
<?php if($teens == 1) { echo '
&lt;h2&gt;Privacy of children&lt;/h2&gt;
&lt;p&gt;
    We recognize the need to provide further privacy protections with respect to Personal Information we may collect from children and take many special precautions to protect the privacy of children. We may require a child to disclose some information to use the '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. We encourage children to consult with their parents before submitting any information to any online resource , including our '; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '. We believe parents should be involved in the online activities of their children and suggest that parents do their best to provide their children with a safe and friendly online environment.
&lt;/p&gt;';} ?>
&lt;h2&gt;Cookies&lt;/h2&gt;
&lt;p&gt;
    The <?php if ($platforms == 'Website URL'){echo''; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '';}
        else {echo'Mobile application and services';} ?> use "cookies" to help personalize your online experience. A cookie is a text file that is placed on your hard disk by a web page server. Cookies cannot be used to run
    programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you.
&lt;/p&gt;
&lt;p&gt;
    We may use cookies to collect, store, and track information for statistical purposes to operate the <?php if ($platforms == 'Website URL'){echo''; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '';}
        else {echo'Mobile application and services';} ?>. You have the ability to accept or decline cookies. Most web browsers
    automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the features of the <?php if ($platforms == 'Website URL'){echo''; if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} echo '';}
        else {echo'Mobile application and services';} ?>. <a target="_blank" href="#">Click here</a> to learn more about cookies and how they work.
&lt;/p&gt;
&lt;h2&gt;Do Not Track signals&lt;/h2&gt;
&lt;p&gt;
    Some browsers incorporate a Do Not Track feature that signals to websites you visit that you do not want to have your online activity tracked. Tracking is not the same as using or collecting information in connection with a website. For these purposes, tracking refers to collecting personally identifiable information from consumers who use or visit a website or online service as they move across different websites over time. How browsers communicate the Do Not Track signal is not yet uniform. As a result, the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> are not yet set up to interpret or respond to Do Not Track signals communicated by your browser. Even so, as described in more detail throughout this Policy, we limit our use and collection of your personal information.
&lt;/p&gt;
<?php if($ads == 1) { echo '
&lt;h2&gt;Advertisements&lt;/h2&gt;
    &lt;p&gt; We may display online advertisements and we may share aggregated and non-identifying information about our customers that we or  our advertisers collect through your use of the Mobile Application and Services. We do not share personally identifiable information about individual customers with advertisers. In some instances, we may use this aggregated and non-identifying information to deliver tailored advertisements to the intended audience. 
    We may permit certain third party companies to help us tailor advertising that we think may be of interest to users and to collect and use other data about user activities on the Website.
    These companies may deliver ads that might place cookies and otherwise track user behavior.
&lt;/p&gt;
&lt;h2&gt;Affiliates&lt;/h2&gt;
&lt;p&gt;We may engage in affiliate marketing and have affiliate links present on the Mobile Application and Services. If you click on an affiliate link, a cookie will be placed on your browser to track any sales for purposes of commissions.&lt;/p&gt;';} ?>

<?php if($newsletters == 1) { echo '
&lt;h2&gt;Email marketing&lt;/h2&gt;
&lt;p&gt;
    We offer electronic newsletters to which you may voluntarily subscribe at any time. We are committed to keeping your e-mail address confidential and will not disclose your email address to any
    third parties except as allowed in the information use and processing section or for the purposes of utilizing a third party provider to send such emails. We will maintain the information sent
    via e-mail in accordance with applicable laws and regulations.
&lt;/p&gt; ';} ?>

<?php if($newsletters_remote == 1) { echo '
&lt;p&gt;
    In compliance with the CAN-SPAM Act, all e-mails sent from us will clearly state who the e-mail is from and provide clear information on how to contact the sender. You may choose to stop
    receiving our newsletter or marketing emails by following the unsubscribe instructions included in these emails or by contacting us. However, you will continue to receive essential
    transactional emails.
&lt;/p&gt;';} ?>

&lt;h2&gt;Links to other resources&lt;/h2&gt;
&lt;p&gt;
    The <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> contain links to other resources that are not owned or controlled by us. Please be aware that we are not responsible for the privacy practices of such other resources
    or third parties. We encourage you to be aware when you leave the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> and to read the privacy statements of each and every resource that may collect Personal Information.
&lt;/p&gt;
&lt;h2&gt;Information security&lt;/h2&gt;
&lt;p&gt;
    We secure information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use, or disclosure. We maintain reasonable administrative,
    technical, and physical safeguards in an effort to protect against unauthorized access, use, modification, and disclosure of Personal Information in its control and custody. However, no data
    transmission over the Internet or wireless network can be guaranteed. Therefore, while we strive to protect your Personal Information, you acknowledge that (i) there are security and privacy
    limitations of the Internet which are beyond our control; (ii) the security, integrity, and privacy of any and all information and data exchanged between you and the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>
    cannot be guaranteed; and (iii) any such information and data may be viewed or tampered with in transit by a third party, despite best efforts.
&lt;/p&gt;
&lt;h2&gt;Data breach&lt;/h2&gt;
&lt;p&gt;
    In the event we become aware that the security of the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> has been compromised or users Personal Information has been disclosed to unrelated third parties as a result of
    external activity, including, but not limited to, security attacks or fraud, we reserve the right to take reasonably appropriate measures, including, but not limited to, investigation and
    reporting, as well as notification to and cooperation with law enforcement authorities. In the event of a data breach, we will make reasonable efforts to notify affected individuals if we
    believe that there is a reasonable risk of harm to the user as a result of the breach or if notice is otherwise required by law. When we do, we will 
    <?php if($breach == 'site,email,phone,letter') { echo ' post a notice in the Mobile Application, send you an email, get in touch with you over the phone, mail you a letter. ';} ?>
    <?php if($breach == 'site,email,phone') { echo ' post a notice in the Mobile Application, send you an email, get in touch with you over the phone. ';} ?>
    <?php if($breach == 'site,email,letter') { echo ' post a notice in the Mobile Application, send you an email, mail you a letter. ';} ?>
    <?php if($breach == 'site,phone,letter') { echo ' post a notice in the Mobile Application, get in touch with you over the phone, mail you a letter. ';} ?>
    <?php if($breach == 'email,phone,letter') { echo ' send you an email, get in touch with you over the phone, mail you a letter. ';} ?>
    <?php if($breach == 'site,email') { echo ' post a notice in the Mobile Application, send you an email. ';} ?>
    <?php if($breach == 'site,phone') { echo ' post a notice in the Mobile Application,  get in touch with you over the phone. ';} ?>
    <?php if($breach == 'site,letter') { echo ' post a notice in the Mobile Application, mail you a letter. ';} ?>
    <?php if($breach == 'email,letter') { echo ' send you an email, mail you a letter. ';} ?>
    <?php if($breach == 'email,phone') { echo ' send you an email, get in touch with you over the phone. ';} ?>
    <?php if($breach == 'phone,letter') { echo ' get in touch with you over the phone, mail you a letter. ';} ?>
    <?php if($breach == 'site') { echo ' post a notice in the Mobile Application. ';} ?>
    <?php if($breach == 'email') { echo '  send you an email. ';} ?>
    <?php if($breach == 'phone') { echo ' get in touch with you over the phone. ';} ?>
    <?php if($breach == 'letter') { echo ' mail you a letter. ';} ?>

&lt;/p&gt;
<?php $clauses = DB::table('custom-clause')->where('unique_id', $id)->get(); foreach ($clauses as $h) { $h = $h->unique_id; }
if (!empty($h)) { ?>
&lt;h2&gt;Custom Clause&lt;/h2&gt;   
<?php } foreach ($clauses as $clause) { ?>
&lt;h2&gt;<?php echo $clause->title ?>&lt;/h2&gt;
&lt;p&gt;<?php echo $clause->text; ?>&lt;/p&gt;
<?php } ?>
&lt;h2&gt;Changes and amendments&lt;/h2&gt;
&lt;p&gt;
    We reserve the right to modify this Policy or its terms relating to the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> from time to time in our discretion and will notify you of any material changes to the way in which
    we treat Personal Information. When we do,<?php if($notify == 'email') { echo '
                                               we will send you an email to notify you.';} ?>
                                               <?php if($notify == 'page') { echo '
                                               we will revise the updated date at the bottom of this page.';} ?>
                                               <?php if($notify == 'site') { echo '
                                               we will Post a notification on the website.';} ?> We may also provide notice to you in other ways in our discretion, such as through
    contact information you have provided. Any updated version of this Policy will be effective immediately upon the posting of the revised Policy unless otherwise specified. Your continued use of
    the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> after the effective date of the revised Policy (or such other act specified at that time) will constitute your consent to those changes. However, we will not, without
    your consent, use your Personal Information in a manner materially different than what was stated at the time your Personal Information was collected.
&lt;/p&gt;
&lt;h2&gt;Acceptance of this policy&lt;/h2&gt;
&lt;p&gt;
    You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?> you agree to be bound by this Policy. If you do not
    agree to abide by the terms of this Policy, you are not authorized to access or use the <?php if ($platforms == 'Website URL'){echo'Website and Services';}
        else {echo'Mobile application and services';} ?>.
&lt;/p&gt;
&lt;h2&gt;Contacting us&lt;/h2&gt;
&lt;p&gt;
    If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to individual rights and your Personal Information, You may<?php if($contacts == 'form') { echo ', do so via the '; echo $a -> contact_form;} ?>
                                               <?php if($contacts == 'email') { echo '
                                               , send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'address') { echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email') { echo '
                                               , do so via the '; echo $a -> contact_form; echo ', send an email to '; echo $a -> contact_email;} ?>
                                               <?php if($contacts == 'email,address') { echo '
                                               , send an email to '; echo $a -> contact_email; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,address') { echo '
                                               , do so via the '; echo $a -> contact_form; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>
                                              <?php if($contacts == 'form,email,address') { echo '
                                               , do so via the '; echo $a -> contact_form;
                                               echo ', send an email to '; echo $a -> contact_email; echo '
                                              , write a letter to '; echo $a -> contact_address;} ?>.&lt;/p&gt;
&lt;p&gt;This document was last updated on <?php echo $a -> updated_at ; ?>&lt;/p&gt;
                    </div>
                </div>
                <h4 class="my-3">Copy HTML code</h4>
                <p>If you rather not link to the policy directly, you may copy the HTML code of the policy directly to your app.</p>
                <button class="ybtn ybtn-header-color" onclick="copyToClipboard('#policy_html_text')">Copy text</button>
                <span id="copied-text-success" class="copied">Text Copied!</span>
            </div>
            <ul class="button_main">
                <li><a href="privacy-policy?form-id=<?php echo $id; ?>" class="button ybtn ybtn-header-color">Re-run questionnaire</a></li>
                <li><a class="button ybtn ybtn-white ybtn-shadow" href="custom-clause?form-id=<?php echo $id ?>">Custom clauses</a></li>
                <li><a class="button btn-danger ybtn" href="{{ route('policydestroy',$id) }}" onclick="return confirm('Are you sure you want to Delete?');">Delete policy</a>
                </li>
            </ul>
          </div>
        </div>
    </div>
    </div>
</div>
@endif
@endsection