@extends('layouts.admin')
@section('title','Life Band Dashboard')
@section('content')
    <main id="at-main" class="at-main at-haslayout">
        <div class="at-dashboard">
            <div class="at-content">
                <div class="at-dashboardcontent">
                    <div class="at-alert">
                        <figure class="at-alertimg">
                            <img src="{{asset('asset/images/alert.png')}}" alt="">
                        </figure>
                        <div class="at-alercontent">
                            <h2>Hi Eesa Stevenson</h2>
                            <div class="at-description">
                                <p>Welcome back Eesa Stevenson. We are glad you are here. Monitor all the health activities and social distancing breaches.</p>
                            </div>
                        </div>
                    </div>
                    <div class="at-pagetitle">
                        <h2>You want to access</h2>
                    </div>
                    <div class="at-accountaccess">
                        <div class="at-account">
                            <a href="organization.html">
                                <div class="at-accounttitle">
                                    <h3>Organizations</h3>
                                </div>
                                <figure class="at-accountimg">
                                    <img src="{{asset('asset/images/organization.png')}}" alt="accoun image">
                                </figure>
                            </a>
                        </div>
                        <div class="at-account">
                            <a href="familyaccount.html">
                                <div class="at-accounttitle">
                                    <h3>Family Accounts</h3>
                                </div>
                                <figure class="at-accountimg">
                                    <img src="{{asset('asset/images/familyaccount.png')}}" alt="account image">
                                </figure>
                            </a>
                        </div>
                        <div class="at-account">
                            <a href="dashboardvtwo.html">
                                <div class="at-accounttitle at-aindividualtitle">
                                    <h3>Individual Accounts</h3>
                                </div>
                                <figure class="at-accountimg">
                                    <img src="{{asset('asset/images/individual.png')}}" alt="account image">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
