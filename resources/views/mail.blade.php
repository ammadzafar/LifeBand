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
                <fieldset>
                    <legend>
                        <span>Welcome </span>, You have been Invited By {{$data['account_name']}} Organization.<br>
                    </legend>
                    <div class="form-group">
                        <a href="{{route('user.invite.mail',$data->email)}}" class="at-btn at-bggreen">Proceed</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection


