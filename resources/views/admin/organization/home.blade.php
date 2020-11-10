@extends('layouts.admin')
@section('title','Life Band Organization')
@section('content')
    <!--************************************
				Main Start
		*************************************-->
    <main id="at-main" class="at-main at-haslayout">
        <div class="at-dashboard at-organization">
            <div class="at-content">
                <div class="at-organizationcontent">
                    <div class="at-alert">
                        <figure class="at-alertimg">
                            <img src="{{asset('asset/images/alert.png')}}" alt="">
                        </figure>
                        <div class="at-alercontent">
                            <h2>Hi {{auth()->user()->name}}</h2>
                            <div class="at-description">
                                <p>Welcome back {{auth()->user()->name}}. We are glad you are here. Monitor all the health activities and social distancing breaches.</p>
                            </div>
                        </div>
                    </div>
                    <div class="at-pagetitle">
                        @if(count($organizations) > 1)
                        <h2>{{count($organizations)}} organizations found</h2>
                        @else
                            <h2>{{count($organizations)}} organization found</h2>
                        @endif
                        <a href="javascript: void(0);" class="at-btn" data-toggle="modal" data-target="#exampleModalCenter">Add Organization</a>
                    </div>
                    <div class="at-organizationholder">
                        @foreach($organizations as $organization)
                        <div class="at-organizer">
                            <figure class="at-orgnizerimg">
                                <img src="{{asset('uploads/organization/logos/'.$organization->image)}}" alt="orgnizer image">
                            </figure>
                            <div class="at-orgnizertitle">
                                <h3>{{$organization->name}}</h3>
                                <span>{{$organization->category}}</span>
                            </div>
                            <div class="at-organizeband">
                                <h4>{{$organization->bands}} Bands Package</h4>
                                <span>Resource Person: {{auth()->user()->name}}</span>
                            </div>
                            <div class="at-action">
                                <h4>actions</h4>
                                <ul>
                                    <li>
                                        <a href="javascript: void(0);" class="at-btnpen">
                                            <i class="icon-pen"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route('organization.delete',['id'=>$organization->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="at-btndelete"><i class="icon-trash"></i></button>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{route('organization.dashboard')}}" class="at-btnshare">
                                            <i class="icon-share"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
			Modal Start
	*************************************-->
    <div class="modal fade at-modaltheme at-creatorgnizermodal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add organization</h5>
                </div>
                <div class="modal-body">
                    <form class="at-modalform at-formtheme" action="{{route('organization.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="at-uploadimg">
                                <div class="form-group">
                                    <input type="file" name="image" id="at-uploadlogo">
                                    <label for="at-uploadlogo">
                                        <i class="icon-upload"></i>
                                        <span>Drop or upload logo</span>
                                    </label>
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="at-orgnizanerdetails">
                                <div class="form-group">
                                    <label>Organization Name</label>
                                    <input type="text" name="name" placeholder="Yale Ltd">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" name="category" placeholder="Sports">
                                    @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input type="email" name="email" placeholder="abcd@gmail.com">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>No. of bands</label>
                                    <input type="text" name="bands" placeholder="30">
                                    @error('bands')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Organization Admin</label>
                                    <input type="text" name="admin_name" placeholder="Organization Admin" value="{{auth()->user()->name}}">
                                    @error('admin_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="at-btn at-btnsubmit">submit</button>
                                </div>
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
