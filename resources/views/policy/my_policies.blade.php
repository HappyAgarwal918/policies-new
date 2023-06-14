@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
    <style type="text/css">
        .over_view_underline {
            height: 5px;
            width: 100%;
            background-color: #383ebf;
        }
    </style>
@endsection

@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">My Policies</div>
                    <!-- <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="{{ asset('images/pricing.png')}}" alt="">
                        </div>
                    </div> -->
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
    @if(count($users) == 0)
    <div class="container" style="min-height: 32vh; ">
    <h2>No policies have been created yet</h2>
        <div class="over_view_underline"></div>
        <div class="mt-3"><p>Looks like you haven't created any policies yet. <a href="{{ route('create') }}">Create your policy</a> now to get started.</p></div>
    </div>
    @else
    <div class="container">
        <a href="{{route('create')}}" class="ybtn ybtn-accent-color create_new">Create new policy</a>
        <table id="restu_table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="" scope="col">Name</th>
                    <th class="" scope="col">Type</th>
                    <th class="" scope="col">Status</th>
                    <th class="" scope="col">Date</th>
                </tr>
            </thead>
            <tbody>                                
            @foreach($users as $user)
                <tr>
                    <td><span class="name"><a href="<?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1 || $user->payment_status == 'succeeded' || $user->adminn == 1){ echo $user -> url; }else { echo $user -> link; } ?>">
                        <?php if (is_null($user->website_url)) { echo $user -> mobile_name; } else { echo $user -> website_url; } ?></a></span>
                        <br><span><a id="manage" href="<?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1 || $user->payment_status == 'succeeded' || $user->adminn == 1){ echo $user -> url; }else { echo $user -> link; } ?>">Manage policy</a></span>
                    </td>
                    <td><a href="<?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1 || $user->payment_status == 'succeeded' || $user->adminn == 1){ echo $user -> url; } else { echo $user -> link; } ?>"><?php echo $user->policy_name; ?></a>
                        <br><span><?php echo $user->type; ?></span></td>
                    <td><?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1){ echo '<span class="activee">Active</span>'; } 
                    elseif ($user->payment_status == 'succeeded' || $user->type == 'Basic' || $user->adminn == 1)
                                { echo '<span class="activee">Active</span>'; }
                            else{ echo '<span class="unpaid">Incomplete</span>'; } ?>
                    </td>
                    <td><?php echo $user->created ?></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@endsection