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
                        <span>Welcome </span>, Please register your account.<br>
                    </legend>
                    <div class="form-group">
                        <div class="at-inputwidthfifty">
                            <input type="text" name="email" value="{{$data}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="user.html" class="at-btn at-bggreen"  data-toggle="modal" data-target="#exampleModalCentervfour" >Proceed</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="modal fade at-modaltheme at-userinfomodal" id="exampleModalCentervfour" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="at-modalform at-formtheme at-userinfoform" {{--action="{{route('organization.user.mail')}}" method="post"--}}>
                        <fieldset>
                            <div class="at-modaltitle">
                                <h3>USER INFORMATION</h3>
                                <span>device id:56444568</span>
                            </div>
                            <div class="form-group">
                                <div class="at-inputwidthfifty">
                                    <label>first name</label>
                                    <input type="text" name="first name" placeholder="John">
                                </div>
                                <div class="at-inputwidthfifty">
                                    <label>last name</label>
                                    <input type="text" name="last name" placeholder="Jacob">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="at-inputwidthfifty">
                                    <label>gender</label>
                                    <div class="at-radio">
                                        <input type="radio" id="male" name="male">
                                        <label for="male">male</label>
                                    </div>
                                    <div class="at-radio">
                                        <input type="radio" id="female" name="male">
                                        <label for="female">female</label>
                                    </div>
                                </div>
                                <div class="at-inputwidthfifty">
                                    <label>phone number</label>
                                    <div class="at-inputwidthselect">
                                        <input type="text" name="last name" placeholder="673 321 56 12">
                                        <div class="dropdown show at-selectcountrydropdown">
                                            <a class="at-brnselectcountry" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <figure>
                                                    <img src="{{asset('asset/images/flag.png')}}" alt="flag img">
                                                </figure>
                                                <span>+1</span>
                                                <i class="icon-droparow"></i>
                                            </a>
                                            <div class="dropdown-menu at-selectcountrymenu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item at-brnselectcountry" href="#">
                                                    <figure>
                                                        <img src="{{asset('asset/images/flag.png')}}" alt="flag img">
                                                    </figure>
                                                    <span>+1</span>
                                                </a>
                                                <a class="dropdown-item at-brnselectcountry" href="#">
                                                    <figure>
                                                        <img src="{{asset('asset/images/flag.png')}}" alt="flag img">
                                                    </figure>
                                                    <span>+1</span>
                                                </a>
                                                <a class="dropdown-item at-brnselectcountry" href="#">
                                                    <figure>
                                                        <img src="{{asset('asset/images/flag.png')}}" alt="flag img">
                                                    </figure>
                                                    <span>+1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="at-inputwidthfifty">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$data}}">
                                </div>
                                <div class="at-inputwidthfifty">
                                    <label>Password</label>
                                    <input type="text" name="password" placeholder="">
                                </div>
                            </div>
                            <div class="form-group at-addressform">
                                <label>Street address</label>
                                <input type="text" name="address" placeholder="2 Clinton Rd, Liberty West">
                            </div>
                            <div class="form-group">
                                <div class="at-inputwidthfifty">
                                    <label>city</label>
                                    <input type="text" name="first name" placeholder="New York">
                                </div>
                                <div class="at-inputwidthfifty">
                                    <label>Country/ Region</label>
                                    <input type="text" name="last name" placeholder="United States">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="at-inputwidthfifty">
                                    <label>Emergency Contact Person</label>
                                    <input type="text" name="first name" placeholder="Edward Sheild">
                                </div>
                                <div class="at-inputwidthfifty">
                                    <label>last name</label>
                                    <div class="at-inputwidthselect">
                                        <input type="text" name="last name" placeholder="673 321 56 12">
                                        <div class="dropdown show at-selectcountrydropdown">
                                            <a class="at-brnselectcountry" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <figure>
                                                    <img src="{{asset('asset/images/flag.png')}}" alt="flag img">
                                                </figure>
                                                <span>+1</span>
                                                <i class="icon-droparow"></i>
                                            </a>

                                            <div class="dropdown-menu at-selectcountrymenu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item at-brnselectcountry" href="#">
                                                    <figure>
                                                        <img src="{{asset('asset/images/flag.png')}}" alt="flag img">
                                                    </figure>
                                                    <span>+1</span>
                                                </a>
                                                <a class="dropdown-item at-brnselectcountry" href="#">
                                                    <figure>
                                                        <img src="{{asset('asset/images/flag.png')}}" alt="flag img">
                                                    </figure>
                                                    <span>+1</span>
                                                </a>
                                                <a class="dropdown-item at-brnselectcountry" href="#">
                                                    <figure>
                                                        <img src="{{asset('asset/images/flag.png')}}" alt="flag img">
                                                    </figure>
                                                    <span>+1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="at-btn at-bggreen">submit</button>
{{--                                <a href="user.html" class="at-btnskip">skip</a>--}}
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


