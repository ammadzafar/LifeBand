<!--************************************
			Modal Start
	*************************************-->

    @if(!empty($organization))
    <form class="at-modalform at-formtheme" action="{{route('organization.update',['id'=>$organization->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @else
    <form class="at-modalform at-formtheme" action="{{route('organization.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @endif
    <fieldset>
        <div class="at-uploadimg">
            <div class="form-group">
                <input type="file" name="image" id="at-uploadlogo">
                <label id="at-dropyourlogo" for="at-uploadlogo">
                    <i class="icon-upload"></i>
                    <em>
                        <img class="org-image" src="{{isset($organization)? asset('uploads/organization/logos/'.$organization->image):''}}" alt="">
                    </em>
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
                <input type="text" name="name" placeholder="Yale Ltd" value="{{isset($organization)? $organization->name : ''}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" name="category" placeholder="Sports" value="{{isset($organization)? $organization->category : ''}}">
                @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Email ID</label>
                <input type="email" name="email" placeholder="abcd@gmail.com" value="{{isset($organization)? $organization->email : ''}}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>No. of bands</label>
                <input type="text" name="bands" placeholder="30" value="{{isset($organization)? $organization->bands: ''}}">
                @error('bands')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Organization Admin</label>
                <input type="text" name="admin_name" placeholder="Organization Admin" value="{{isset($organization)? $organization->admin_name : ''}}">
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
<!--************************************
        Modal End
*************************************-->
{{--@section('scripts')--}}
{{--            <script>--}}
{{--                $(document).ready(function(){--}}
{{--                    if ($('.org-image').attr('src') == '')--}}
{{--                    {--}}
{{--                        console.log('in');--}}
{{--                    }--}}
{{--                });--}}
{{--            </script>--}}
{{--    @endsection--}}
