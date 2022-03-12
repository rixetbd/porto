@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Add New</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Home Page</li>
                    <li class="breadcrumb-item active">Add New</li>
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
                <h6>Add New</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.homepage.create')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="heading">Heading</label>
                        <input type="text" name="heading" id="heading" class="form-control form-control-sm" placeholder="Ex: Hi, I'm MR. Rabiul" required>
                        @error('heading')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>


                    <div class="row">
                        <div class="col-3 mb-3">
                            <label for="starting">Starting</label>
                            <input type="text" name="starting" id="starting" class="form-control form-control-sm" placeholder="Ex: I Am a" value="I Am a" required>
                            @error('starting')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-9 mb-3">
                            <label for="skills">Skills Title</label>
                            <input type="text" name="skills" id="skills" class="form-control form-control-sm" placeholder="Separate by comma ( , )" required>
                            @error('skills')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                            <small><caption>Separate the title of each skill with a comma ,</caption></small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea id="elm1" name="description"></textarea>
                        @error('description')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="btnOneText">Button One</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <input type="text" name="btnOneText" id="btnOneText" class="form-control form-control-sm" placeholder="Text" required>
                                    @error('btnOneText')
                                        <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-8 ps-2">
                                    <input type="url" name="btnOneUrl" class="form-control form-control-sm" placeholder="Url" required>
                                    @error('btnOneUrl')
                                        <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="col-6 mb-3">
                            <label for="btnTowText">Button Tow</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <input type="text" name="btnTowText" id="btnTowText" class="form-control form-control-sm" placeholder="Text" required>
                                    @error('btnTowText')
                                        <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-8 ps-2">
                                    <input type="url" name="btnTowUrl" class="form-control form-control-sm" placeholder="Url" required>
                                    @error('btnTowUrl')
                                        <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                                    @enderror
                                </div>
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
