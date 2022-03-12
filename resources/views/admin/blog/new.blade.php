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
                    <li class="breadcrumb-item active"><a href="{{route('admin.blog.index')}}">Blog</a></li>
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
                <h6>Add New Post</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.blog.create')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control form-control-sm" placeholder="Title">
                        @error('title')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="category">Category</label>
                            <input type="text" name="category" id="category" class="form-control form-control-sm" placeholder="Category">
                            @error('category')
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

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea id="elm1" name="description"></textarea>
                        @error('description')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>


                    <div class="row">

                        <div class="col-8 mb-3">
                            <select name="status" class="form-control form-control-sm">
                                <option value="0" selected>Draft</option>
                                <option value="1">Publish Now</option>
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <button type="submit" class="btn btn-sm btn-success w-100">Insert</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>


@endsection
