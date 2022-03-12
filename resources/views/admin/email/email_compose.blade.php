@extends('admin.email.email_layout')

@section('email_content')

<div class="card-body">

    <div>
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="To">
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Subject">
        </div>
        <div class="mb-3">
            <form method="post">
                <textarea id="elm1" name="area"></textarea>
            </form>
        </div>

        <div class="btn-toolbar mb-0">
            <div class="">
                <button type="button" class="btn btn-primary waves-effect waves-light me-1"><i class="far fa-save"></i></button>
                <button type="button" class="btn btn-primary waves-effect waves-light me-1"><i class="far fa-trash-alt"></i></button>
                <button class="btn btn-info waves-effect waves-light"> <span>Send</span> <i class="fab fa-telegram-plane ms-2"></i> </button>
            </div>
        </div>

    </div>

</div>

@endsection
