@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">About</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6>About Page Info</h6>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Photo</th>
                            <th>Basic</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($basic_info as $value)
                        <tr>
                            <td>1</td>
                            <td>
                                <a class="image-popup-no-margins" href="{{asset('uploads/about')}}/{{ $value->picture }}">
                                    <img src="{{asset('uploads/about')}}/{{ $value->picture }}" alt="No Image" class="img-fluid rounded" style="width: 80px;">
                                </a>
                            </td>
                            <td>
                                Name : {{ $value->name }}<br>
                                Designation : {{ $value->designation }}<br>
                                Email : {{ $value->email }}<br>
                                Date Of Birth : {{ $value->date }}<br>
                                Phone : {{ $value->phone }}<br>
                                Nationality : {{ $value->nationality }}<br>
                            </td>
                            <td>{!! $value->description !!}</td>
                            <td>
                                <a class="btn status_btn" href="{{route('admin.about.basic.status', $value->id)}}">
                                    @if ($value->status == 1)
                                        <i class="fas fa-toggle-on fa-2x text-success"></i>
                                    @else
                                        <i class="fas fa-toggle-off fa-2x text-danger"></i>
                                    @endif
                                </a>
                            </td>

                            <td>
                                <a class="btn btn-outline-danger btn-sm edit m-1" title="Delete" href="{{route('admin.about.basic.delete', $value->id)}}">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr class="text-center">
                            <td colspan="6">Nothing For Show</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6>Add About Page Info</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.about.new')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6 mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control form-control-sm">
                        @error('name')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-6 mb-2">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" id="designation" class="form-control form-control-sm">
                        @error('designation')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-sm">
                        @error('email')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-6 mb-2">
                        <label for="date">Date Of Birth</label>
                        <input type="date" name="date" id="date" class="form-control form-control-sm">
                        @error('date')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control form-control-sm">
                        @error('phone')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-6 mb-2">
                        <label for="nationality">Nationality</label>
                        <input type="text" name="nationality" id="nationality" class="form-control form-control-sm">
                        @error('nationality')
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

                <div class="col-12 mb-2">
                    <label for="picture">Upload a photo</label>
                    <input type="file" name="picture" id="picture" class="form-control form-control-sm">
                    @error('picture')
                        <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-sm btn-success">Add Info</button>
                </div>


                </form>
            </div>
        </div>
    </div>

</div>
@endsection


@section('footer_script')


@endsection
