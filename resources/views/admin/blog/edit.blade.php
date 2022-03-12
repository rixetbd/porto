@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edit Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Home Page</li>
                    <li class="breadcrumb-item active">Edit Information</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h6>Edit Information</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.homepage.update')}}" method="post">
                    @csrf

                    <input type="hidden" name="id" value="{{$data->id}}">

                    <div class="mb-3">
                        <label for="heading">Heading</label>
                        <input type="text" name="heading" id="heading" class="form-control form-control-sm" value="{{$data->heading}}">
                    </div>

                    <div class="row">
                        <div class="col-3 mb-3">
                            <label for="starting">Starting</label>
                            <input type="text" name="starting" id="starting" class="form-control form-control-sm" value="{{$data->starting}}">
                        </div>

                        <div class="col-9 mb-3">
                            <label for="skills">Skills Title</label>
                            <input type="text" name="skills" id="skills" class="form-control form-control-sm" value="{{$data->skills}}">
                            <small><caption>Separate the title of each skill with a comma ,</caption></small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea id="elm1" name="description">{{$data->description}}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="btnOneText">Button One</label>
                            <div class="row">
                                <div class="col-4 pe-0"><input type="text" name="btnOneText" id="btnOneText" class="form-control form-control-sm" value="{{$data->btnOneText}}"></div>
                                <div class="col-8 ps-2"><input type="url" name="btnOneUrl" class="form-control form-control-sm" value="{{$data->btnOneUrl}}"></div>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="btnTowText">Button Tow</label>
                            <div class="row">
                                <div class="col-4 pe-0"><input type="text" name="btnTowText" id="starting" class="form-control form-control-sm" value="{{$data->btnTowText}}"></div>
                                <div class="col-8 ps-2"><input type="url" name="btnTowUrl" class="form-control form-control-sm" value="{{$data->btnTowUrl}}"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success">Insert</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>


@endsection
