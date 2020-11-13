@extends('layouts.admin')
@section('title','Life Band Family Accounts')
@section('content')
    <!--************************************
				Main Start
		*************************************-->
    <main id="at-main" class="at-main at-haslayout">
        <div class="at-dashboard at-organization at-familyaccount">
            <div class="at-content">
                <div class="at-organizationcontent at-familycontent">
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
                        @if(count($families) > 1)
                            <h2>{{count($families)}} Accounts found</h2>
                        @else
                            <h2>{{count($families)}} Account found</h2>
                        @endif
                        <a href="javascript: void(0);" class="at-btn" data-toggle="modal" data-target="#familyModal">Add Family</a>
                    </div>
                    <div class="at-organizationholder at-familyholder">
                        @foreach($families as $family)
                        <div class="at-organizer">
                            <figure class="at-orgnizerimg">
                                <img src="{{asset('uploads/family/images/'.$family->image)}}" alt="family image">
                            </figure>
                            <div class="at-orgnizertitle">
                                <h3>{{auth()->user()->name}}</h3>
                                <span>{{$family->admin_name}}</span>
                            </div>
                            <div class="at-organizeband">
                                <h4>{{$family->bands}}</h4>
                            </div>
                            <div class="at-action">
                                <h4>actions</h4>
                                <ul>
                                    <li>
                                        <a href="#" class="at-btnpen" data-id="{{$family->id}}">
                                            <i class="icon-pen"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route('family.accounts.delete',['id'=>$family->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="at-btndelete"><i class="icon-trash"></i></button>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="dashboardvtwo.html" class="at-btnshare">
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
    <div class="modal fade at-modaltheme at-creatorgnizermodal" id="familyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add family</h5>
                </div>
                <div class="modal-body family-account-data">
                   @include('admin.family-accounts.modal')
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
        $(document).ready(function(){
            $(document).on('change','#at-uploadlogo',function(e) {
                let image_src = $('.org-image').attr('src', URL.createObjectURL(e.target.files[0]));
                if (image_src != null)
                {
                    $('.icon-upload').css({'display':'none'});
                }
            });
            $(document).on('click','.at-btnpen',function(e) {
                e.preventDefault();
                $('#exampleModalLongTitle').text('Edit Family');
                let id = $(this).data('id');
                $.get('/superadmin/family-accounts/edit/'+id, function(response){
                    $('#familyModal').modal('show');
                    $('.family-account-data').html(response);

                })
            });
            $('#familyModal').on('hidden.bs.modal',function (e){

                $('#exampleModalLongTitle').text('Add Family');
                $(this).find('.at-formtheme .org-image').attr('src','');
                $(this).find('.at-formtheme .org-name').val("");
                $(this).find('.at-formtheme .org-category').val("");
                $(this).find('.at-formtheme .org-email').val("");
                $(this).find('.at-formtheme .org-band').val("");
                $(this).find('.at-formtheme .org-category').val("");
            })
        });
    </script>
@endsection
