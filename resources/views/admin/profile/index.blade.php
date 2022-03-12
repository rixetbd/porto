@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Profile</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row ">
    <div class="col-lg-4 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="mb-3 text-center position-relative">
                    @if (Auth::user()->picture != '')
                        <img src="{{asset('uploads/user')}}/{{Auth::user()->picture}}" alt="No Image" class="img-fluid rounded rounded-circle">
                    @else
                        <i class="fas fa-user fa-5x p-3"></i>
                    @endif
                </div>
                <div class="mt-2 text-center">
                    <h5>Hi, {{Auth::user()->name}}</h5>
                </div>
                <div class="border-top pt-2">
                    <h6>Bio <a class="float-end text-decoration-underline" href="{{route('admin.profile.add')}}">Edit Info</a></h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quos voluptates dignissimos sit aspernatur officiis harum, expedita saepe blanditiis quidem!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8 col-xl-9">

        <div class="card">
            <div class="card-header pb-0">
                <h6>Address Info</h6>
            </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Location & Phone</th>
                                <th>Email & Website</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($address_info as $key=>$info)

                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <i class="fas fa-map-marker-alt me-2"></i>{{$info->location}}<br>
                                        <i class="fas fa-phone-alt me-2"></i>{{$info->phone}}
                                    </td>
                                    <td>
                                        <i class="fas fa-envelope-open me-2"></i>{{$info->email}}<br>
                                        <i class="fas fa-globe me-2"></i>{{$info->website}}
                                    </td>
                                    <td>
                                        <a class="" href="{{route('admin.address.status', $info->id)}}">
                                            @if ($info->status == 0)
                                                <i class="fas fa-toggle-off fa-2x text-danger"></i>
                                            @else
                                                <i class="fas fa-toggle-on fa-2x text-success"></i>
                                            @endif
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger btn-sm edit m-1" href="{{route('admin.address.delete', $info->id)}}">
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

        <div class="card">
            <div class="card-header pb-0">
                <h6>Social Info</h6>
            </div>
            <div class="card-body">
                <table class="table  table-hover">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Facebook & Linkedin</th>
                            <th>Instagram & Whatsapp</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($social_info as $key=>$info)

                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <i class="fab fa-facebook me-2"></i>{{$info->facebook}}
                                    <br>
                                    <i class="fab fa-linkedin me-2"></i>{{$info->linkedin}}
                                </td>
                                <td>
                                    <i class="fab fa-instagram me-2"></i>{{$info->instagram}}<br>
                                    <i class="fab fa-whatsapp me-2"></i>{{$info->whatsapp}}
                                </td>
                                <td>
                                    <a class="" href="{{route('admin.social.status', $info->id)}}">
                                        @if ($info->status == 0)
                                            <i class="fas fa-toggle-off fa-2x text-danger"></i>
                                        @else
                                            <i class="fas fa-toggle-on fa-2x text-success"></i>
                                        @endif
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-danger btn-sm edit m-1" href="{{route('admin.social.delete', $info->id)}}">
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


@endsection
