@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edit Profile</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('admin.profile')}}">Edit Profile</a></li>
                    <li class="breadcrumb-item active">Add Profile Info</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row ">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Update User Info</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.user.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="name">Name</label>
                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{Auth::user()->name}}">
                                @error('name')
                                    <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                                <input type="text" class="form-control" name="password" placeholder="Password">
                            </div>
                            @error('password')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror

                            <div class="mt-2">
                                <input type="file" name="picture" class="form-control">
                                @error('picture')
                                    <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                                @enderror
                                <div class="mt-1">* Upload a profile picture</div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <label for="">Email</label>
                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                <input type="text" class="form-control" name="email" placeholder="Email" value="{{Auth::user()->email}}">
                                @error('email')
                                    <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                                <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password">
                            </div>
                            @error('confirm_password')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror


                            <div class="mt-2">
                                <input type="file" name="resume" class="form-control">
                                <div class="mt-1">* Upload a pdf for curriculum vitae</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success my-2"><i class="fas fa-upload "></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">

        <div class="card">
            <div class="card-header pb-0">
                <h5>Address & Social Info</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{route('admin.address.new')}}" method="post">
                            @csrf
                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                <input type="text" class="form-control" name="location" placeholder="Location" required>
                            </div>
                            @error('location')
                                <span class="text-danger">{{$message}}</span>
                            @enderror

                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
                                <input type="text" class="form-control" name="phone" placeholder="Phone Numter" required>
                            </div>
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror

                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror

                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fas fa-globe"></i></div>
                                <input type="url" class="form-control" name="website" placeholder="Website" required>
                            </div>
                            @error('website')
                                <span class="text-danger">{{$message}}</span>
                            @enderror

                            <div class="my-1">
                                <button type="submit" class="btn btn-sm btn-success my-2"><i class="fas fa-plus"></i> Add Address Info</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{route('admin.social.new')}}" method="post">
                            @csrf
                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fab fa-facebook-square"></i></div>
                                <input type="url" class="form-control" name="facebook" placeholder="Facebook" required>
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fab fa-linkedin"></i></div>
                                <input type="url" class="form-control" name="linkedin" placeholder="Linkedin" required>
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                <input type="url" class="form-control" name="instagram" placeholder="Instagram" required>
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-text"><i class="fab fa-whatsapp"></i></div>
                                <input type="url" class="form-control" name="whatsapp" placeholder="Whatsapp" required>
                            </div>

                            <button type="submit" class="btn btn-sm btn-success float-end my-2"><i class="fas fa-plus"></i> Add Social</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
