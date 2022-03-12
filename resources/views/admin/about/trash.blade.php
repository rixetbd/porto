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
                                <th>Author</th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Delete_At</th>
                                <th>Edit</th>
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
                                    <a class="image-popup-no-margins" href="{{asset('uploads/portfolio')}}/{{$value->thumbnail}}">
                                        <img src="{{asset('uploads/portfolio')}}/{{$value->thumbnail}}" alt="{{$value->thumbnail}}" class="img-fluid" style="width:60px">
                                    </a>
                                </td>
                                <td>{{$value->deleted_at->diffForhumans()}}</td>

                                <td>
                                    <a class="btn btn-outline-success btn-sm edit m-1" title="Restore" href="{{route('admin.portfolio.restore', $value->id)}}">
                                        <i class="fas fa-redo"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm edit m-1" title="Edit" href="{{route('admin.portfolio.forcedelete', $value->id)}}">
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
</div>


@endsection
