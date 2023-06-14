@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
@endsection

@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Contact Us</div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">How can we help?</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 contact_form">
                <form action="{{ route('contact')}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label" for="name">Name</label>
                      <input class="form-control" id="name" name="name" type="text" placeholder="Name" required="required" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="emailAddress">Email Address</label>
                      <input class="form-control" id="emailAddress" name="email" type="email" placeholder="Email Address" maxlength="255" required="required" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="subject">Subject</label>
                      <input class="form-control" id="subject" name="subject" type="text" placeholder="Subject" maxlength="255" required="required" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="message">Message</label>
                      <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <span class="captcha-image">{!! Captcha::img() !!}</span> &nbsp;&nbsp;
                        <i class="fas fa-sync refresh-button"></i>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="captcha">Captcha</label>
                        <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha">
                        @error('captcha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Form submit button -->
                    <div class="d-grid">
                      <button class="ybtn ybtn-header-color" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('.refresh-button').click(function() {
            $.ajax({
                type: 'get',
                url: '{{ route('refreshCaptcha') }}',
                success:function(data) {
                    $('.captcha-image').html(data.captcha);
                }
            });
        });
    });
</script>
@endsection