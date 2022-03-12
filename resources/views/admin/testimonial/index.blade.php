@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Testimonials</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Testimonials</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>Add Testimonials</h6></div>
            <div class="card-body">
                <form action="{{route('admin.clients.testimonial.new')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6 my-2">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Name">
                            @error('name')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-6 my-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="Email">
                            @error('email')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 my-2">
                            <label for="designations">Designations</label>
                            <input type="text" name="designations" id="designations" class="form-control form-control-sm" placeholder="Designations">
                            @error('designations')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-6 my-2">
                            <label for="picture">Picture</label>
                            <input type="file" name="picture" id="picture" class="form-control form-control-sm" placeholder="Picture">
                            @error('picture')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Write a short description..."></textarea>
                        @error('description')
                            <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="my-2">
                        <button type="submit" class="btn btn-sm btn-success">Add Testimonials</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>All Testimonials</h6></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key=>$value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    @if (!empty($value->picture))
                                        <a class="image-popup-no-margins" href="{{asset('uploads/clients')}}/{{$value->picture}}">
                                            <img src="{{asset('uploads/clients')}}/{{$value->picture}}" alt="{{$value->picture}}" class="img-fluid" style="width:50px;border-radius:50%">
                                        </a>
                                    @else
                                        {{"N/A"}}
                                    @endif
                                </td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{Str::limit($value->description, 35)}}</td>
                                <td>
                                    <a class="btn btn-outline-danger btn-sm edit m-1" title="Delete" href="{{route('admin.clients.testimonial.delete', $value->id)}}">
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
