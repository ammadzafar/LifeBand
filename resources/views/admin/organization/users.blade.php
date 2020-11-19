@extends('layouts.admin')
@section('title','Life Band Users')
@section('content')
    <!--************************************
				Sidebar Start
		*************************************-->
    <aside class="at-sidebarwrapper">
        <div class="at-sidebartitle">
            <h3>detail</h3>
        </div>
        <div class="at-sidebarcontent">
            <div class="at-sidebaruserdetail">
                <div class="at-userimagearea">
                    <figure class="at-userimage">
                        <img src="{{asset('asset/images/users.png')}}" alt="user image">
                        <span></span>
                    </figure>
                    <a href="javascript: void(0);" class="at-btnediticon">
                        <i class="icon-pen"></i>
                    </a>
                    <a href="javascript:void(0);" class="at-btndeleteicon">
                        <i class="icon-trash"></i>
                    </a>
                </div>
                <div class="at-usernamedetail">
                    <h4>liza ben</h4>
                    <span>hr manager <span>5698926</span></span>
                </div>
            </div>
            <form class="at-formtheme at-addquestionnaierform">
                <fieldset>
                    <div class="form-group">
                        <em>Assign Questionnaire</em>
                        <span class="at-checkbox">
								<input type="checkbox" id="at-checkboxfive">
								<label for="at-checkboxfive"></label>
							</span>
                    </div>
                </fieldset>
            </form>
            <div class="at-userbodydetail">
                <ul>
                    <li>
                        <i class="icon-heightpm"></i>
                        <div>
                            <em>171cm</em>
                            <span>height</span>
                        </div>
                    </li>
                    <li>
                        <i class="icon-weightmeter"></i>
                        <div>
                            <em>42kg</em>
                            <span>weight</span>
                        </div>
                    </li>
                    <li>
                        <i class="icon-target"></i>
                        <div>
                            <em>5000</em>
                            <span>target</span>
                        </div>
                    </li>
                    <li>
                        <i class="icon-handwatch"></i>
                        <div>
                            <em>right</em>
                            <span>hand</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="at-timestats">
                <h4>real time stats</h4>
            </div>
            <div class="at-sidebartabs">
                <ul class="nav nav-tabs at-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="at-temp-tab" data-toggle="tab" href="#at-temp" role="tab" aria-controls="home" aria-selected="true">temp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="at-hr-tab" data-toggle="tab" href="#at-hr" role="tab" aria-controls="profile" aria-selected="false">HR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="at-bp-tab" data-toggle="tab" href="#at-bp" role="tab" aria-controls="contact" aria-selected="false">BP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="at-spo2-tab" data-toggle="tab" href="#at-spo2" role="tab" aria-controls="contact" aria-selected="false">sp02</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="at-fatige-tab" data-toggle="tab" href="#at-fatige" role="tab" aria-controls="contact" aria-selected="false">fatigue</a>
                    </li>
                </ul>
                <div class="tab-content at-tadscontent" id="myTabContent">
                    <div class="tab-pane at-temptab fade show active" id="at-temp" role="tabpanel" aria-labelledby="at-temp-tab">
                        <div class="at-tabstitle">
                            <h5>temperature</h5>
                            <span>97°C</span>
                        </div>
                        <div class="at-chartseriesname at-tabseriesname">
                            <ul>
                                <li>
                                    <em class="at-bggreen"></em>
                                    <span>Good Condition</span>
                                </li>
                                <li>
                                    <em class="at-bgorange"></em>
                                    <span>Mild Temprature</span>
                                </li>
                                <li>
                                    <em class="at-bgred"></em>
                                    <span>Need Medical Care</span>
                                </li>
                            </ul>
                        </div>
                        <div class="at-temperatureconditon">
                            <form class="at-formtheme">
                                <fieldset>
                                    <input type="range" min="0" max="100" value="0" class="range blue"/>
                                </fieldset>
                            </form>
                        </div>
                        <div class="at-reloadarea">
                            <a href="javascript: void(0);" class="icon-reload"></a>
                            <span>5 min ago</span>
                        </div>
                    </div>
                    <div class="tab-pane at-hrtab fade" id="at-hr" role="tabpanel" aria-labelledby="at-hr-tab">
                        <div class="at-tabstitle">
                            <h5>heart rate</h5>
                            <span>58 BPM</span>
                        </div>
                        <div class="at-averagepercantage at-heartrating">
                            <ul>
                                <li>
                                    <span>50%</span>
                                </li>
                                <li>
                                    <span>60%</span>
                                </li>
                                <li>
                                    <span>100%</span>
                                </li>
                                <li>
                                    <span>130%</span>
                                </li>
                            </ul>
                        </div>
                        <div class="at-temperatureconditon at-colortwo at-spotwocontent">
                            <form class="at-formtheme">
                                <fieldset>
                                    <div><input type="range" min="0" max="100" value="0" class="range blue"/></div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="at-reloadarea">
                            <a href="javascript: void(0);" class="icon-reload"></a>
                            <span>5 min ago</span>
                        </div>
                    </div>
                    <div class="tab-pane at-bptab fade" id="at-bp" role="tabpanel" aria-labelledby="at-bp-tab">
                        <div class="at-tabstitle">
                            <h5>Avg BP</h5>
                        </div>
                        <div class="at-averagebp">
                            <ul>
                                <li>
                                    <span class="at-stolicbp">Systolic BP</span>
                                    <span class="at-heartbeat">85 <em>mmhg</em></span>
                                    <em class="at-hypotension">Hypotension</em>
                                </li>
                                <li>
                                    <span class="at-stolicbp">Diastolic BP</span>
                                    <span class="at-heartbeat">123 <em>mmhg</em></span>
                                    <em class="at-hypotension">Hypertension</em>
                                </li>
                            </ul>
                        </div>
                        <div class="at-temperatureconditon">
                            <form class="at-formtheme">
                                <fieldset>
                                    <input type="range" min="0" max="100" value="0" class="range blue"/>
                                </fieldset>
                            </form>
                        </div>
                        <div class="at-reloadarea">
                            <a href="javascript: void(0);" class="icon-reload"></a>
                            <span>5 min ago</span>
                        </div>
                    </div>
                    <div class="tab-pane at-spotab fade" id="at-spo2" role="tabpanel" aria-labelledby="at-spo2-tab">
                        <div class="at-tabstitle">
                            <h5>Avg SpO2</h5>
                        </div>
                        <div class="at-chartseriesname at-tabseriesname">
                            <ul>
                                <li>
                                    <em class="at-bgred"></em>
                                    <span>low</span>
                                </li>
                                <li>
                                    <em class="at-bgorange"></em>
                                    <span>Slightly Lower</span>
                                </li>
                                <li>
                                    <em class="at-bggreen"></em>
                                    <span>normal</span>
                                </li>
                            </ul>
                        </div>
                        <div class="at-averagepercantage">
                            <ul>
                                <li>
                                    <span>90%</span>
                                </li>
                                <li>
                                    <span>95%</span>
                                </li>
                                <li>
                                    <span>100%</span>
                                </li>
                            </ul>
                        </div>
                        <div class="at-temperatureconditon at-colortwo">
                            <form class="at-formtheme">
                                <fieldset>
                                    <input type="range" min="0" max="100" value="0" class="range blue"/>
                                </fieldset>
                            </form>
                        </div>
                        <div class="at-reloadarea">
                            <a href="javascript: void(0);" class="icon-reload"></a>
                            <span>5 min ago</span>
                        </div>
                    </div>
                    <div class="tab-pane at-fatiguetab fade" id="at-fatige" role="tabpanel" aria-labelledby="at-fatige-tab">
                        <div class="at-tabstitle">
                            <h5>Fatigue</h5>
                        </div>
                        <div class="at-chartseriesname at-tabseriesname">
                            <ul>
                                <li>
                                    <em class="at-bggreen"></em>
                                    <span>Good Condition</span>
                                </li>
                                <li>
                                    <em class="at-bgorange"></em>
                                    <span>Mild Fatigue</span>
                                </li>
                                <li>
                                    <em class="at-bgred"></em>
                                    <span>Need Rest</span>
                                </li>
                            </ul>
                        </div>
                        <div class="at-temperatureconditon">
                            <form class="at-formtheme">
                                <fieldset>
                                    <input type="range" min="0" max="100" value="0" class="range blue"/>
                                </fieldset>
                            </form>
                        </div>
                        <div class="at-reloadarea">
                            <a href="javascript: void(0);" class="icon-reload"></a>
                            <span>5 min ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--************************************
            Sidebar End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="at-main" class="at-main at-haslayout">
        <div class="at-dashboard at-users">
            <div class="at-content">
                <div class="at-userscontent">
                    <div class="at-usershead">
                        <div class="at-pagetitle">
                            <h2>users</h2>
                        </div>
                        <div class="at-adduserarea">
                            <ul>
                                <li>
                                    <div class="dropdown at-groupdropdown">
                                        <a class="at-btnaddgroup" href="javascript: void(0);" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{asset('asset/images/add-group.svg')}}" alt="user icon">
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalCentervfive">create group</a>
                                            <a class="dropdown-item" href="{{route('users.group.create')}}">view group</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" data-toggle="modal" data-target="#exampleModalCentervthree">
                                        <img src="{{asset('asset/images/filter.svg')}}" alt="filter icon">
                                    </a>
                                </li>
                                <li>
                                    <form class="at-formtheme">
                                        <fieldset>
                                            <div class="form-group at-hideinput">
                                                <a href="javascript: void(0);" class="at-btniconsearch"><i class="icon-search"></i></a>
                                                <input type="text" name="search" placeholder="search">
                                            </div>
                                        </fieldset>
                                    </form>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" data-toggle="modal" data-target="#exampleModalCenter">
                                        <i class="icon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-usersholder">
                        @if(count($users)>0)
                          @foreach($users as $user)
                            <div class="at-user">
                            <a href="javascript: void(0);" class="at-sidebarbtn">
                                <div class="at-userhead">
                                    <div class="at-userimage">
                                        <figure>
                                            <img src="{{asset('asset/images/user.png')}}" alt="user image">
                                        </figure>
                                        <div class="at-username">
                                            <h4>{{$user->first_name}}</h4>
                                            <span>18763369</span>
                                        </div>
                                    </div>
                                    <div class="at-userstatus">
                                        <em>status</em>
                                        <span class="at-bggreentwo">active</span>
                                    </div>
                                </div>
                                <div class="at-userbodydetail">
                                    <ul>
                                        <li>
                                            <i class="icon-heightpm"></i>
                                            <div>
                                                <em>171cm</em>
                                                <span>height</span>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="icon-weightmeter"></i>
                                            <div>
                                                <em>42kg</em>
                                                <span>weight</span>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="icon-target"></i>
                                            <div>
                                                <em>5000</em>
                                                <span>target</span>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="icon-handwatch"></i>
                                            <div>
                                                <em>right</em>
                                                <span>hand</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="at-betterywarnings">
                                    <ul class="at-warnings">
                                        <li>
                                            <figure>
                                                <img src="{{asset('asset/images/warningimg.png')}}" alt="warnings image">
                                            </figure>
                                            <span>2 warnings</span>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{asset('asset/images/warningimg2.png')}}" alt="warnings image">
                                            </figure>
                                            <span>2 warnings</span>
                                        </li>
                                    </ul>
                                    <div class="at-betterylevel">
                                        <span>battery level</span>
                                        <figure>
                                            <img src="{{asset('asset/images/Group.svg')}}" alt="bettry img">
                                            <span class="at-charge">
													<span style="width: 75%;"></span>
												</span>
                                        </figure>
                                        <em>75%</em>
                                    </div>
                                </div>
                            </a>
                        </div>
                          @endforeach
                            @else
                            <h5>No User Created Yet</h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
		add member Modal Start
	*************************************-->
    <div class="modal fade at-modaltheme at-creatusermodal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <form class="at-modalform at-formtheme" action="{{route('user.store.email')}}" method="post">
                        @csrf
                        <fieldset>
                            <div class="at-modaltitle">
                                <span>tiger aviation</span>
                                <h3>add a member</h3>
                            </div>
                            <div class="at-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore gorisns sdlsiowe djjjdows ssakaqi asdse.</p>
                            </div>
                            <div class="form-group">
                                <label>enter email id</label>
                                <div class="at-inputsendinvite">
                                    <input type="text" name="email" placeholder="John.er@systech.com">
                                    <input type="hidden" name="account_id" value="{{$organization->id}}">
                                    <button type="submit" class="at-btn at-bggreen" {{--data-toggle="modal" data-target="#exampleModalCentervtwo"--}}>send invite</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--************************************
          sent invite Modal Start
    *************************************-->
    <div class="modal fade at-modaltheme at-creatusermodal at-sentinvitemodal" id="exampleModalCentervtwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <figure class="at-sentinviteimage">
                        <img src="{{asset('asset/images/invitsent.png')}}" alt="invite sent image">
                    </figure>
                    <div class="at-sentinvitecontent">
                        <div class="at-modaltitle">
                            <h3>invite sent</h3>
                        </div>
                        <div class="at-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore gorisns sdlsiowe djjjdows ssakaqi asdse.</p>
                        </div>
                        <a href="javascritp: void(0);" class="at-btn at-bggreen"  {{--data-toggle="modal" data-target="#exampleModalCentervfour"--}}>continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
         filter	Modal Start
    *************************************-->
    <div class="modal fade at-modaltheme at-choosedisplaymodal" id="exampleModalCentervthree" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="at-modalform at-formtheme">
                        <fieldset>
                            <div class="at-modaltitle">
                                <h3>Choose what you want to display</h3>
                            </div>
                            <div class="form-group">
                                <em>Sp02</em>
                                <span class="at-checkbox">
									<input type="checkbox" id="at-checkboxone">
									<label for="at-checkboxone"></label>
								</span>
                            </div>
                            <div class="form-group">
                                <em>Blood Pressure</em>
                                <span class="at-checkbox">
									<input type="checkbox" id="at-checkboxtwo">
									<label for="at-checkboxtwo"></label>
								</span>
                            </div>
                            <div class="form-group">
                                <em>Heart Rate</em>
                                <span class="at-checkbox">
									<input type="checkbox" id="at-checkboxthree">
									<label for="at-checkboxthree"></label>
								</span>
                            </div>
                            <div class="form-group">
                                <em>Fatigue</em>
                                <span class="at-checkbox">
									<input type="checkbox" id="at-checkboxfour">
									<label for="at-checkboxfour"></label>
								</span>
                            </div>
                            <div class="form-group">
                                <a href="javascritp: void(0);" class="at-btn at-bggreen">confirm</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
         User information Modal Start
    *************************************-->
    <div class="modal fade at-modaltheme at-userinfomodal" id="exampleModalCentervfour" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="at-modalform at-formtheme at-userinfoform">
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
                                <a href="user.html" class="at-btn at-bggreen">submit</a>
                                <a href="user.html" class="at-btnskip">skip</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            add group modal End
    *************************************-->
    <div class="modal fade at-modaltheme at-userinfomodal at-addgroupmodal" id="exampleModalCentervfive" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="at-modalform at-formtheme at-userinfoform" action="{{route('users.group.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="at-modaltitle">
                                <h3>Add Group</h3>
                            </div>
                            <div class="form-group">
                                <label>group name</label>
                                <input type="text" name="name" placeholder="John">
                                <input type="hidden" name="account_id" value="{{$organization->id}}">
                            </div>
                            <div class="at-uploadimg">
                                <div class="form-group">
                                    <input type="file" name="image" id="at-uploadlogo">
                                    <label for="at-uploadlogo">
                                        <i class="icon-upload"></i>
                                        <img class="group-image" src="" alt="">
                                        <span>Drop or upload logo</span>
                                    </label>
                                </div>
                            </div>
                            <ul class="at-reportusers">
                                @php( $group_users = group_users())
                                @foreach($group_users as $user)
                                <li>
									<span class="at-checkbox">
										<input type="checkbox" name="user_id[]" value="{{$user->id}}" id="at-usersix {{$user->first_name}}">
										<label for="at-usersix {{$user->first_name}}">
											<figure>
												<img src="{{asset('asset/images/user.png')}}" alt="User Image">
											</figure>
											<h3>{{$user->first_name}}</h3>
										</label>
									</span>
                                </li>
                                    @endforeach
                            </ul>
                            <div class="form-group">
                                <button type="submit" class="at-btn at-bggreen">submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Modal End
    *************************************-->
    @endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('change', '#at-uploadlogo', function (e) {
                let image_src = $('.group-image').attr('src', URL.createObjectURL(e.target.files[0]));
                if (image_src != null) {
                    $('.icon-upload').css({'display': 'none'});
                }
            })
        });
    </script>
    @endsection
