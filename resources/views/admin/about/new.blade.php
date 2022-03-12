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
                    <li class="breadcrumb-item active"><a href="{{route('admin.portfolio.index')}}">Portfolio</a></li>
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
                <h6>Add New Project</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.portfolio.create')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control form-control-sm" placeholder="Title">
                            @error('title')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control form-control-sm">
                            @error('thumbnail')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="preview_link">Live Preview Url</label>
                            <input type="url" name="preview_link" id="preview_link" class="form-control form-control-sm" placeholder="Live Preview Url">
                            <small><caption>You can leave it blank.</caption></small>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="technology">Technology</label>
                            <input type="text" name="technology" id="technology" class="form-control form-control-sm" placeholder="Separate by comma ( , )">
                            @error('technology')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                            <small><caption>Separate the technology of each skill with a comma ,</caption></small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea id="elm1" name="description"></textarea>
                        @error('description')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
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
