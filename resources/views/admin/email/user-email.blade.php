@extends('layouts.auth')
@section('title'.'Life Band Login')
@section('content')
    <div class="at-loginpage">
        <figure class="at-loginpageimg">
            <img src="{{asset('asset/images/login.png')}}" alt="login page image">
        </figure>
        <div class="at-logincontent">
            <strong class="at-logo">
						<span>
							<img src="{{asset('asset/images/loginlogo.png')}}" alt="logo image">
						</span>
            </strong>
            <form class="at-formtheme at-loginform">
                @php($account = check_id('ae2670a1-19df-4b4c-8ca7-15626836dee8'))
                   <fieldset>
                       <legend style="color: #000; font-size: 24px; line-height: 27px; font-weight: 400;">
                           @if(!empty($account[0]['category']))
                              <span style="color: #ff5a5f; font-weight: 600;">Welcome </span>, You have been Invited By {{$account[0]['name']}} Organization.<br>
                           @else
                               <span style="color: #ff5a5f; font-weight: 600;">Welcome </span>, You have been Invited By {{$account[0]['admin_name']}} to his family member.<br>
                           @endif
                       </legend>
                       <div class="form-group">
                            <a href="{{--{{route('user.invite.mail',$data->email)}}--}}" class="at-btn" style="background: #ff5a5f; color: #fff; padding: 0 35px;text-align: center;display: inline-block;border-radius: 5px;text-transform: capitalize;font-weight: 400;line-height: 44px;position: relative;font-size: 16px;">Proceed</a>
                       </div>
                   </fieldset>
            </form>
        </div>
    </div>
@endsection


