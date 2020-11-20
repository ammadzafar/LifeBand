
<!--************************************
		   Group Modal Start
	*************************************-->
{{--    {{dd($group->account_id)}}--}}
    <form class="at-modalform at-formtheme at-userinfoform" action="{{route('users.group.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <div class="at-modaltitle">
                <h3>Add Group</h3>
            </div>
            <div class="form-group">
                <label>group name</label>
                <input class="group-name" type="text" name="name" placeholder="John" value="{{isset($group) ? $group->name: ''}}">
                <input type="hidden" name="account_id" value="{{$group->account_id}}">
            </div>
            <div class="at-uploadimg">
                <div class="form-group">
                    <input type="file" name="image" id="at-uploadlogo">
                    <label for="at-uploadlogo">
                        @if(!empty($group->image))
                            <img class="group-image" src="{{isset($group)? asset('uploads/group/'.$group->image):''}}" alt="">
                        @else
                            <i class="icon-upload"></i>
                            <img class="group-image" src="{{isset($group)? asset('uploads/group/'.$group->image): ''}}" alt="">
                        @endif

                        <span>Drop or upload logo</span>
                    </label>
                </div>
            </div>
            <ul class="at-reportusers">
                @php( $group_users = group_all_users($group->account_id,$group->id))
{{--                 {{dd($group_users)}}--}}
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

