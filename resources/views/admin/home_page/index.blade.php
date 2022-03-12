@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Home Page</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">All Information</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>All Information <span class="float-end"><a href="{{route('admin.homepage.new')}}" class="btn btn-sm btn-success">Add New</a></span></h6></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Heading</th>
                                <th style="min-width: 100px;">Starting</th>
                                <th style="min-width: 150px;">Skills Title</th>
                                <th>Description</th>
                                <th>URL_Text</th>
                                <th>Status</th>
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
                                <td>
                                    {{$value->btnOneText}}<hr>{{$value->btnTowText}}
                                </td>
                                <td>
                                    @if ($value->status == 1)
                                        <a class="btn status_btn" name="{{$value->id}}">
                                            <i class="fas fa-toggle-on fa-2x text-success"></i>
                                        </a>
                                    @else
                                        <a class="btn status_btn" name="{{$value->id}}">
                                            <i class="fas fa-toggle-off fa-2x text-danger"></i>
                                        </a>
                                    @endif
                                </td>

                                <td>
                                    <a class="btn btn-outline-secondary btn-sm edit m-1" title="Edit" href="{{route('admin.homepage.edit', $value->id)}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm edit m-1" title="Delete" href="{{route('admin.homepage.softdelete', $value->id)}}">
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


    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>Home Page Background</h6></div>
            <div class="card-body row">
                <div class="col-lg-3 mt-3">
                    <form action="{{route('admin.homepage.bgcreate')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control form-control-sm">
                        <button type="submit" class="btn btn-sm btn-success my-2">Upload</button>
                    </form>
                </div>

                <div class="col-lg-9">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Background Image</th>
                                    <th>Upload At</th>
                                    <th>Status</th>
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
                                    <td>{{$bg->created_at->diffForHumans()}}</td>
                                    <td>
                                        @if ($bg->status == 1)
                                            <a class="btn" href="{{route('admin.homepage.statusbg', $bg->id)}}">
                                                <i class="fas fa-toggle-on fa-2x text-success"></i>
                                            </a>
                                        @else
                                            <a class="btn" href="{{route('admin.homepage.statusbg', $bg->id)}}">
                                                <i class="fas fa-toggle-off fa-2x text-danger"></i>
                                            </a>
                                        @endif
                                    </td>

                                    <td>
                                        <a class="btn btn-outline-danger btn-sm edit m-1" title="Trash" href="{{route('admin.homepage.softdeleteBG', $bg->id)}}">
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

</div>


@endsection


@section('footer_script')

<script>
    $('.status_btn').click(function(){

        var id = $(this).attr('name');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
               type:'POST',
               url:'/admin/homepage/status',
               data:{'id':id},
               success:function(data) {
                    // location.reload();
                    window.location.reload();
               }
        });

    });
</script>

@endsection
