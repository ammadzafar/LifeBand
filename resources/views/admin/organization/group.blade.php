@extends('layouts.admin')
@section('title','Life Band Groups')
@section('content')
    <main id="at-main" class="at-main at-haslayout">
        <div class="at-dashboard at-users at-questionnaier at-groups">
            <div class="at-content">
                <div class="at-userscontent at-questionnaiercontent">
                    <div class="at-usershead">
                        <div class="at-pagetitle">
                            <h2>groups</h2>
                        </div>
                        <div class="at-btnholder">
                            <a href="addquestionnaire.html" class="at-btn at-bggreen">create group</a>
                        </div>
                    </div>
                </div>
                <div class="at-responsecontent at-grouptable">
                    <table class="at-tabletheme at-responsetable">
                        <thead>
                        <tr>
                            <th>serial</th>
                            <th>group picture</th>
                            <th>group name</th>
                            <th>group  members</th>
                            <th>action</th>
                            <th>assign Questionnaire</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <span>18763369</span>
                            </td>
                            <td>
                                <figure>
                                    <img src="{{asset('asset/images/user.png')}}" alt="uder image">
                                </figure>
                            </td>
                            <td>stark brown</td>
                            <td>
                                <div class="at-groupmemebers">
                                    <ul>
                                        <li>
                                            <span><img src="{{asset('asset/images/user.png')}}" alt="uder image"></span>
                                        </li>
                                        <li>
                                            <span><img src="{{asset('asset/images/user1.png')}}" alt="uder image"></span>
                                        </li>
                                        <li>
                                            <span><img src="{{asset('asset/images/user2.png')}}" alt="uder image"></span>
                                        </li>
                                        <li>
                                            <span><img src="{{asset('asset/images/user3.png')}}" alt="uder image"></span>
                                        </li>
                                        <li>
                                            <span>+6</span>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="at-editdeletebtnholder">
                                    <a href="javascript: void(0);">
                                        <i class="icon-pen"></i>
                                    </a>
                                    <a href="javascript: void(0);">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
											<span class="at-checkbox">
												<input type="checkbox" id="at-checkboxone">
												<label for="at-checkboxone"></label>
											</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>18763369</span>
                            </td>
                            <td>
                                <figure>
                                    <img src="{{asset('asset/images/user.png')}}" alt="uder image">
                                </figure>
                            </td>
                            <td>stark brown</td>
                            <td>
                                <div class="at-groupmemebers">
                                    <ul>
                                        <li>
                                            <span><img src="{{asset('asset/images/user.png')}}" alt=""></span>
                                        </li>
                                        <li>
                                            <span><img src="{{asset('asset/images/user1.png')}}" alt=""></span>
                                        </li>
                                        <li>
                                            <span><img src="{{asset('asset/images/user2.png')}}" alt=""></span>
                                        </li>
                                        <li>
                                            <span><img src="{{asset('asset/images/user3.png')}}" alt=""></span>
                                        </li>
                                        <li>
                                            <span>+6</span>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="at-editdeletebtnholder">
                                    <a href="javascript: void(0);">
                                        <i class="icon-pen"></i>
                                    </a>
                                    <a href="javascript: void(0);">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
											<span class="at-checkbox">
												<input type="checkbox" id="at-checkboxvone">
												<label for="at-checkboxvone"></label>
											</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>18763369</span>
                            </td>
                            <td>
                                <figure>
                                    <img src="images/user.png" alt="uder image">
                                </figure>
                            </td>
                            <td>stark brown</td>
                            <td>
                                <div class="at-groupmemebers">
                                    <ul>
                                        <li>
                                            <span><img src="images/user.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span><img src="images/user1.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span><img src="images/user2.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span><img src="images/user3.png" alt=""></span>
                                        </li>
                                        <li>
                                            <span>+6</span>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="at-editdeletebtnholder">
                                    <a href="javascript: void(0);">
                                        <i class="icon-pen"></i>
                                    </a>
                                    <a href="javascript: void(0);">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
											<span class="at-checkbox">
												<input type="checkbox" id="at-checkboxvtwo">
												<label for="at-checkboxvtwo"></label>
											</span>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
		add member Modal Start
	*************************************-->
    <div class="modal fade at-modaltheme at-creatusermodal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="at-modalform at-formtheme">
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
                                    <a href="javascritp: void(0);" class="at-btn at-bggreen" data-toggle="modal" data-target="#exampleModalCentervtwo">send invite</a>
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
                        <img src="images/invitsent.png" alt="invite sent image">
                    </figure>
                    <div class="at-sentinvitecontent">
                        <div class="at-modaltitle">
                            <h3>invite sent</h3>
                        </div>
                        <div class="at-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore gorisns sdlsiowe djjjdows ssakaqi asdse.</p>
                        </div>
                        <a href="javascritp: void(0);" class="at-btn at-bggreen">continue</a>
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
            Modal End
    *************************************-->
    @endsection
