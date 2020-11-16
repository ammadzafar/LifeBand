<!--************************************
            Header Start
    *************************************-->
<header id="at-header" class="at-header">
    <strong class="at-logo">
{{--        @if(auth()->user()->isAdmin())--}}
{{--            <a href="{{route('home.index')}}">--}}
{{--        @elseif(auth()->user()->isOrganizer())--}}
{{--             <a href="{{route('organization.index')}}">--}}
{{--        @elseif(auth()->user()->isFamilyAccountant())--}}
{{--             <a href="{{route('family.index')}}">--}}
{{--        @elseif(auth()->user()->isIndividualAccountant())--}}
{{--             <a href="{{route('individual.index')}}">--}}
{{--        @endif--}}

        <a href="{{route('home.index')}}"><img src="{{asset('asset/images/logo.png')}}" alt="logo image"></a>
    </strong>
    @php($path = ['superadmin/organization/dashboard/*','superadmin/organization/users','superadmin/family-accounts/dashboard/*','superadmin/family-accounts/users'])
    @if(show_navbar($path))
{{--        {{dd(session('type'))}}--}}
{{--        {{dd($path[3] == 'superadmin/family-accounts/users')}}--}}
        <nav class="at-navigation">
            <ul>
                <li class="{{at_active('superadmin/organization/dashboard/*')}}">
                    <a href="{{route('organization.dashboard',auth()->user()->id)}}">
                        <i class="icon-dashboard"></i>
                        <span>dashboard</span>
                    </a>
                </li>
                <li class="{{at_active('superadmin/organization/users')}}">

                    @if(session('type') == 'family')
                        <a href=" {{route('family.accounts.users')}}"> <i class="icon-user"></i>
                            <span>users</span>
                        </a>
                    @elseif(session('type') == 'organization')
                        <a href="{{route('organization.users')}}"> <i class="icon-user"></i>
                            <span>users</span>
                        </a>
                    @endif
                </li>
                <li>
                    <a href="socialdistance.html">
                        <i class="icon-socialdestance"></i>
                        <span>social distancing</span>
                    </a>
                </li>
            </ul>
        </nav>
    @endif

    <div class="at-profilearea">
        <div class="dropdown show at-dropdown">
            <a class="at-btnbellicon" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell"></i>
            </a>
            <div class="dropdown-menu at-notificationdropdown" aria-labelledby="dropdownMenuLink">
                <div class="at-notificationholder">
                    <div class="at-notifications">
                        <div class="at-notification">
                            <a href="javascript: void(0);">
                                <figure>
                                    <img src="{{asset('asset/images/user.png')}}" alt="user image">
                                </figure>
                                <div class="at-notificationcontent">
                                    <h3>Stark Brown</h3>
                                    <div class="at-description">
                                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <span class="at-questiondate">2nd Feb, 2020 15:24</span>
                                </div>
                            </a>
                        </div>
                        <div class="at-notification">
                            <a href="javascript: void(0);">
                                <figure>
                                    <img src="{{asset('asset/images/user.png')}}" alt="user image">
                                </figure>
                                <div class="at-notificationcontent">
                                    <h3>Stark Brown</h3>
                                    <div class="at-description">
                                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <span class="at-questiondate">2nd Feb, 2020 15:24</span>
                                </div>
                            </a>
                        </div>
                        <div class="at-notification">
                            <a href="javascript: void(0);">
                                <figure>
                                    <img src="{{asset('asset/images/user.png')}}" alt="user image">
                                </figure>
                                <div class="at-notificationcontent">
                                    <h3>Stark Brown</h3>
                                    <div class="at-description">
                                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <span class="at-questiondate">2nd Feb, 2020 15:24</span>
                                </div>
                            </a>
                        </div>
                        <div class="at-notification">
                            <a href="javascript: void(0);">
                                <figure>
                                    <img src="{{asset('asset/images/user.png')}}" alt="user image">
                                </figure>
                                <div class="at-notificationcontent">
                                    <h3>Stark Brown</h3>
                                    <div class="at-description">
                                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <span class="at-questiondate">2nd Feb, 2020 15:24</span>
                                </div>
                            </a>
                        </div>
                        <div class="at-notification">
                            <a href="javascript: void(0);">
                                <figure>
                                    <img src="{{asset('asset/images/user.png')}}" alt="user image">
                                </figure>
                                <div class="at-notificationcontent">
                                    <h3>Stark Brown</h3>
                                    <div class="at-description">
                                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <span class="at-questiondate">2nd Feb, 2020 15:24</span>
                                </div>
                            </a>
                        </div>
                        <div class="at-notification">
                            <a href="javascript: void(0);">
                                <figure>
                                    <img src="{{asset('asset/images/user.png')}}" alt="user image">
                                </figure>
                                <div class="at-notificationcontent">
                                    <h3>Stark Brown</h3>
                                    <div class="at-description">
                                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <span class="at-questiondate">2nd Feb, 2020 15:24</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown show at-dropdown">
            <a href="javascript: void(0);" class="at-userdetail" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <figure class="at-userimg">
                    <img src="{{asset('asset/images/user.png')}}" alt="user image">
                </figure>
                <span>{{auth()->user()->name}}</span>
                <i class="icon-droparow"></i>
            </a>
            <div class="dropdown-menu at-dropdownmenu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="addquestionnaire.html">
                    <i class="icon-questionery"></i>
                    Questionnaire
                </a>
                <a class="dropdown-item" href="javascript: void(0);">
                    <i class="icon-setting"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="{{route('logout')}}">
                    <i class="icon-logout"></i>
                    Logout
                </a>
            </div>
        </div>
    </div>
</header>
<!--************************************
        Header End
*************************************-->
