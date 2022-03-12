@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Trash</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Home Page</li>
                    <li class="breadcrumb-item active">Trash</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>All Information</h6></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Heading</th>
                                <th>Starting</th>
                                <th style="min-width: 150px;">Skills Title</th>
                                <th>Description</th>
                                <th>Delete_At</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key=>$value)

                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->heading}}</td>
                                <td>{{$value->starting}}</td>
                                <td>
                                    @foreach (explode(',', $value->skills) as $item)
                                        <li>{{$item}}</li>
                                    @endforeach
                                </td>
                                <td>{!! $value->description !!}</td>
                                <td>{{$value->deleted_at->diffForhumans()}}</td>

                                <td>
                                    <a class="btn btn-outline-success btn-sm edit m-1" title="Restore" href="{{route('admin.homepage.restore', $value->id)}}">
                                        <i class="fas fa-redo"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm edit m-1" title="Edit" href="{{route('admin.homepage.forcedelete', $value->id)}}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Nothing For Show</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>Home Page Background</h6></div>
            <div class="card-body">
                <div>
                    <form action="{{route('admin.homepage.bgcreate')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" class="form-control form-control-sm">
                        <button type="submit" class="btn btn-sm btn-success my-2">Upload</button>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Background Image</th>
                                <th>Delete At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataBG as $key=>$bg)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <a class="image-popup-no-margins" href="{{asset('uploads/bg')}}/{{$bg->image}}">
                                        <img src="{{asset('uploads/bg')}}/{{$bg->image}}" alt="No Image" class="img-fluid" style="width:60px">
                                    </a>
                                </td>
                                <td>{{$bg->deleted_at->diffForHumans()}}</td>
                                <td>
                                    <a class="btn btn-outline-success btn-sm edit m-1" title="Restore" href="{{route('admin.homepage.restoreBG', $bg->id)}}">
                                        <i class="fas fa-redo"></i>
                                    </a>

                                    <a class="btn btn-outline-danger btn-sm edit m-1" title="Force Delete" href="{{route('admin.homepage.forcedeleteBG', $bg->id)}}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Nothing For Show</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
