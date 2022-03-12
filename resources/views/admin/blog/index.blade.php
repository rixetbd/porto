@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Blog</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>All Porject <span class="float-end"><a href="{{route('admin.blog.new')}}" class="btn btn-sm btn-success">Add New</a></span></h6></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key=>$value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    @if (App\Models\User::where('id', '=', $value->author)->exists())
                                        {{$value->rel_to_user->name}}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{$value->title}}</td>
                                <td>
                                    <a class="image-popup-no-margins" href="{{asset('uploads/blog')}}/{{$value->thumbnail}}">
                                        <img src="{{asset('uploads/blog')}}/{{$value->thumbnail}}" alt="{{$value->thumbnail}}" class="img-fluid" style="width:60px">
                                    </a>
                                </td>
                                <td>
                                    @if ($value->status == 1)
                                        <a class="btn status_btn" href="{{route('admin.blog.status', $value->id)}}">
                                            <i class="fas fa-toggle-on fa-2x text-success"></i>
                                        </a>
                                    @else
                                        <a class="btn status_btn" href="{{route('admin.blog.status', $value->id)}}">
                                            <i class="fas fa-toggle-off fa-2x text-danger"></i>
                                        </a>
                                    @endif
                                </td>

                                <td>
                                    <a class="btn btn-outline-secondary btn-sm edit m-1" title="Edit" href="{{route('admin.homepage.edit', $value->id)}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm edit m-1" title="Delete" href="{{route('admin.blog.softdelete', $value->id)}}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Nothing For Show</td>
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


@section('footer_script')


@endsection
