@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Inbox</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                    <li class="breadcrumb-item active">Inbox</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-3 mb-5">
        <div class="card h-100">
            <div class="card-body email-leftbar">
                <div class="d-grid">
                    <a href="{{route('admin.email.compose')}}" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-plus me-1"></i> Compose</a>
                </div>

                <div class="mail-list mt-4">
                    <a href="{{route('admin.email.inbox')}}" class="active"><i class="mdi mdi-inbox me-2"></i> Inbox <span class="ms-1 float-end">({{$all_mail->count()}})</span></a>
                    <a href="#"><i class="mdi mdi-star-outline me-2"></i>Starred</a>
                    <a href="#"><i class="mdi mdi-diamond-stone me-2"></i>Important</a>
                    <a href="#"><i class="mdi mdi-file-outline me-2"></i>Draft</a>
                    <a href="#"><i class="mdi mdi-send-check-outline me-2"></i>Sent Mail</a>
                    <a href="#"><i class="mdi mdi-trash-can-outline me-2"></i>Trash</a>
                </div>

                <div>
                    <h6 class="mt-4">Labels</h6>

                    <div class="mail-list mt-1">
                        <a href="#"><span class="mdi mdi-circle-outline me-2 text-info"></span>Theme Support</a>
                        <a href="#"><span class="mdi mdi-circle-outline me-2 text-warning"></span>Freelance</a>
                        <a href="#"><span class="mdi mdi-circle-outline me-2 text-primary"></span>Social</a>
                        <a href="#"><span class="mdi mdi-circle-outline me-2 text-danger"></span>Friends</a>
                        <a href="#"><span class="mdi mdi-circle-outline me-2 text-success"></span>Family</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-9">
        @if (Route::currentRouteName() != "admin.email.compose")
        <div class="row">
            <div class="col-md-7">
                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group me-2 mb-3">
                        <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                        <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                        @if (Route::currentRouteName() != "admin.email.inbox" && Route::currentRouteName() != "admin.email.compose")
                            <a type="button" class="btn btn-primary waves-light waves-effect" href="{{route('admin.email.single_delete' , $mail_id)}}"><i class="far fa-trash-alt"></i></a>
                        @endif
                    </div>
                    <div class="btn-group me-2 mb-3">
                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Team Manage</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="btn-toolbar justify-content-md-end" role="toolbar">
                    <div class="btn-group ms-md-2 mb-3">
                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Team Manage</a>
                        </div>
                    </div>

                    <div class="btn-group ms-2 mb-3">
                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            More <i class="mdi mdi-dots-vertical ms-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">


                                @if (Route::currentRouteName() != "admin.email.inbox")
                                    <a class="dropdown-item" href="{{route('admin.email.markasread' , $mail_id)}}">Mark as Unread</a>
                                @endif


                            <a class="dropdown-item" href="#">Mark as Important</a>
                            <a class="dropdown-item" href="#">Add to Tasks</a>
                            <a class="dropdown-item" href="#">Add Star</a>
                            <a class="dropdown-item" href="#">Mute</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="card mb-0">
            @yield('email_content')
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->

@endsection
