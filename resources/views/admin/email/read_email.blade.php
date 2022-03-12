@extends('admin.email.email_layout')

@section('email_content')
<div class="card-body">
    <div class="d-flex mb-4">
        <div class="flex-shrink-0 me-3">
            {{-- <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-1.jpg" alt="{{$mail_id->name}}"> --}}
            <i class="fas fa-user fa-3x"></i>
        </div>
        <div class="flex-grow-1">
            <h4 class="font-size-16">{{$mail_id->name}}</h4>
            <p class="text-muted font-size-13">{{$mail_id->email}}</p>
        </div>
    </div>
    <h4 class="font-size-16">{{$mail_id->subject}}</h4>

    <p>Dear {{Auth::user()->name}},</p>
    <p>{{$mail_id->message}}</p>
    <hr/>

    <!-- Image Area -->
    {{-- <div class="row">
        <div class="col-xl-2 col-6">
            <div class="card">
                <img class="card-img-top img-fluid" src="assets/images/small/img-3.jpg" alt="Card image cap">
                <div class="py-2 text-center">
                    <a href="" class="fw-medium">Download</a>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="card">
                <img class="card-img-top img-fluid" src="assets/images/small/img-4.jpg" alt="Card image cap">
                <div class="py-2 text-center">
                    <a href="" class="fw-medium">Download</a>
                </div>
            </div>
        </div>
    </div> --}}

    <a href="email-compose.html" class="btn btn-secondary waves-effect mt-4"><i class="mdi mdi-reply"></i> Reply</a>
</div>
@endsection
