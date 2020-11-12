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
                        <a href="javascript: void(0);" class="at-btn add-btn" data-toggle="modal" data-target="#organizationModal">Add Organization</a>
                    </div>
                    <div class="at-organizationholder">
                        @foreach($organizations as $org)
                        <div class="at-organizer">
                            <figure class="at-orgnizerimg">
                                <img src="{{asset('uploads/organization/logos/'.$org->image)}}" alt="orgnizer image">
                            </figure>
                            <div class="at-orgnizertitle">
                                <h3>{{$org->name}}</h3>
                                <span>{{$org->category}}</span>
                            </div>
                            <div class="at-organizeband">
                                <h4>{{$org->bands}} Bands Package</h4>
                                <span>Resource Person: {{auth()->user()->name}}</span>
                            </div>
                            <div class="at-action">
                                <h4>actions</h4>
                                <ul>
                                    <li>
                                        <a href="#" class="at-btnpen" data-id="{{$org->id}}" {{--data-toggle="modal" data-target="#exampleModalCenter"--}}>
                                            <i class="icon-pen"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route('organization.delete',['id'=>$org->id])}}" method="post">
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
    <div class="modal fade at-modaltheme at-creatorgnizermodal" id="organizationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add organization</h5>
                </div>
                <div class="modal-body organization_data">
                    @include('admin.organization.modal')
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
                $('#exampleModalLongTitle').text('Edit organization');
                let id = $(this).data('id');
                $.get('/superadmin/organization/edit/'+id, function(response){
                $('#organizationModal').modal('show');
                $('.organization_data').html(response);

                })
            });
            $('#organizationModal').on('hidden.bs.modal',function (e){

                $('#exampleModalLongTitle').text('Add organization');
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

