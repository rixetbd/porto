@extends('admin.layouts.dashboard')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div id="radialchart-1" class="apex-charts" dir="ltr"></div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Users</p>
                        <h5 class="mb-3">2.2k</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div id="radialchart-2" class="apex-charts" dir="ltr"></div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Views</p>
                        <h5 class="mb-3">50</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 1.7% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div id="radialchart-3" class="apex-charts" dir="ltr"></div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Bounce Rate</p>
                        <h5 class="mb-3">24.03 %</h5>
                        <p class="text-truncate mb-0"><span class="text-danger me-2"> 0.01% <i class="ri-arrow-right-down-line align-bottom ms-1"></i></span> From previous</p>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0  me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                <i class="ri-group-line"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">New Visitors</p>
                        <h5 class="mb-3">435</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.01% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h5 class="card-title">Overview</h5>
                    </div>
                    <div class="flex-shrink-0">
                        <div>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-soft-primary btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm active">
                                1Y
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <div id="mixed-chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!-- end card-body -->

            <div class="card-body border-top">
                <div class="text-muted text-center">
                    <div class="row">
                        <div class="col-4 border-end">
                            <div>
                                <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-primary me-1"></i> Expenses</p>
                                <h5 class="font-size-16 mb-0">$ 8,524 <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>1.2 %</span></h5>
                            </div>
                        </div>
                        <div class="col-4 border-end">
                            <div>
                                <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-light me-1"></i> Maintenance</p>
                                <h5 class="font-size-16 mb-0">$ 8,524 <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>2.0 %</span></h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div>
                                <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-danger me-1"></i> Profit</p>
                                <h5 class="font-size-16 mb-0">$ 8,524 <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>0.4 %</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex  align-items-center">
                    <div class="flex-grow-1">
                        <h5 class="card-title">Social Source</h5>
                    </div>
                    <div class="flex-shrink-0">
                        <select class="form-select form-select-sm mb-0 my-n1">
                            <option value="MAY" selected="">May</option>
                            <option value="AP">April</option>
                            <option value="MA">March</option>
                            <option value="FE">February</option>
                            <option value="JA">January</option>
                            <option value="DE">December</option>
                        </select>
                    </div>
                </div>

                <div>
                    <div id="radialBar-chart" class="apex-charts" dir="ltr"></div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-primary font-size-18">
                                    <i class="ri  ri-facebook-circle-fill text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Facebook</h5>
                            <p class="text-muted mb-0">125 sales</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-info font-size-18">
                                    <i class="ri  ri-twitter-fill text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Twitter</h5>
                            <p class="text-muted mb-0">112 sales</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-danger font-size-18">
                                    <i class="ri ri-instagram-line text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Instagram</h5>
                            <p class="text-muted mb-0">104 sales</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Order Stats</h5>
                <div>
                    <ul class="list-unstyled">
                        <li class="py-3">
                            <div class="d-flex">
                                <div class="avatar-xs align-self-center me-3">
                                    <div class="avatar-title rounded-circle bg-light text-primary font-size-18">
                                        <i class="ri-checkbox-circle-line"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-2">Completed</p>
                                    <div class="progress progress-sm animated-progess">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-3">
                            <div class="d-flex">
                                <div class="avatar-xs align-self-center me-3">
                                    <div class="avatar-title rounded-circle bg-light text-primary font-size-18">
                                        <i class="ri-calendar-2-line"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-2">Pending</p>
                                    <div class="progress progress-sm animated-progess">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-3">
                            <div class="d-flex">
                                <div class="avatar-xs align-self-center me-3">
                                    <div class="avatar-title rounded-circle bg-light text-primary font-size-18">
                                        <i class="ri-close-circle-line"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-2">Cancel</p>
                                    <div class="progress progress-sm animated-progess">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 19%" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <hr>

                <div class="text-center">
                    <div class="row">
                        <div class="col-4">
                            <div class="mt-2">
                                <p class="text-muted mb-2">Completed</p>
                                <h5 class="font-size-16 mb-0">70</h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-2">
                                <p class="text-muted mb-2">Pending</p>
                                <h5 class="font-size-16 mb-0">45</h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-2">
                                <p class="text-muted mb-2">Cancel</p>
                                <h5 class="font-size-16 mb-0">19</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Notifications</h4>

                <div class="pe-3" data-simplebar style="max-height: 287px;">
                    <a href="#" class="text-body d-block">
                        <div class="d-flex py-3">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <img class="rounded-circle avatar-xs" alt="" src="{{asset('admin_assets/images/users/avatar-2.jpg')}}">
                            </div>

                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-14 mb-1">Scott Elliott</h5>
                                <p class="text-truncate mb-0">
                                    If several languages coalesce
                                </p>
                            </div>
                            <div class="flex-shrink-0 font-size-13">
                                20 min ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-body d-block">
                        <div class="d-flex py-3">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <div class="avatar-xs">
                                    <span class="avatar-title bg-soft-primary rounded-circle text-primary">
                                        <i class="mdi mdi-account-supervisor"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-14 mb-1">Team A</h5>
                                <p class="text-truncate mb-0">
                                    Team A Meeting 9:15 AM
                                </p>
                            </div>
                            <div class="flex-shrink-0 font-size-13">
                                9:00 am
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-body d-block">
                        <div class="d-flex py-3">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <img class="rounded-circle avatar-xs" alt="" src="{{asset('admin_assets/images/users/avatar-3.jpg')}}">
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-14 mb-1">Frank Martin</h5>
                                <p class="text-truncate mb-0">
                                    Neque porro quisquam est
                                </p>
                            </div>
                            <div class="flex-shrink-0 font-size-13">
                                8:54 am
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-body d-block">
                        <div class="d-flex py-3">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <div class="avatar-xs">
                                    <span class="avatar-title bg-soft-primary rounded-circle text-primary">
                                        <i class="mdi mdi-email-outline"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-14 mb-1">Updates</h5>
                                <p class="text-truncate mb-0">
                                    It will be as simple as fact
                                </p>
                            </div>
                            <div class="flex-shrink-0 font-size-13">
                                27-03-2020
                            </div>
                        </div>
                    </a>

                    <a href="#" class="text-body d-block">
                        <div class="d-flex py-3">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <img class="rounded-circle avatar-xs" alt=""
                                    src="{{asset('admin_assets/images/users/avatar-4.jpg')}}">
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-14 mb-1">Terry Garrick</h5>
                                <p class="text-truncate mb-0">
                                    At vero eos et accusamus et
                                </p>
                            </div>
                            <div class="flex-shrink-0 font-size-13">
                                27-03-2020
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-3">Revenue by Location</h5>

                <div>
                    <div id="usa" style="height: 226px"></div>
                </div>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary btn-sm">View More</a>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transaction</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col"  style="width: 50px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheckall">
                                        <label class="form-check-label" for="customCheckall"></label>
                                    </div>
                                </th>
                                <th scope="col"  style="width: 60px;"></th>
                                <th scope="col">ID & Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1"></label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('admin_assets/images/users/avatar-2.jpg')}}" alt="user" class="avatar-xs rounded-circle" />
                                </td>
                                <td>
                                    <p class="mb-1 font-size-12">#AP1234</p>
                                    <h5 class="font-size-15 mb-0">David Wiley</h5>
                                </td>
                                <td>02 Nov, 2019</td>
                                <td>$ 1,234</td>
                                <td>1</td>

                                <td>
                                    $ 1,234
                                </td>
                                <td>
                                    <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                            W
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-1 font-size-12">#AP1235</p>
                                    <h5 class="font-size-15 mb-0">Walter Jones</h5>
                                </td>
                                <td>04 Nov, 2019</td>
                                <td>$ 822</td>
                                <td>2</td>

                                <td>
                                    $ 1,644
                                </td>
                                <td>
                                    <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3"></label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('admin_assets/images/users/avatar-3.jpg')}}" alt="user" class="avatar-xs rounded-circle" />
                                </td>
                                <td>
                                    <p class="mb-1 font-size-12">#AP1236</p>
                                    <h5 class="font-size-15 mb-0">Eric Ryder</h5>
                                </td>
                                <td>05 Nov, 2019</td>
                                <td>$ 1,153</td>
                                <td>1</td>

                                <td>
                                    $ 1,153
                                </td>
                                <td>
                                    <i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i> Cancel
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck4"></label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('admin_assets/images/users/avatar-6.jpg')}}" alt="user" class="avatar-xs rounded-circle" />
                                </td>
                                <td>
                                    <p class="mb-1 font-size-12">#AP1237</p>
                                    <h5 class="font-size-15 mb-0">Kenneth Jackson</h5>
                                </td>
                                <td>06 Nov, 2019</td>
                                <td>$ 1,365</td>
                                <td>1</td>

                                <td>
                                    $ 1,365
                                </td>
                                <td>
                                    <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                        <label class="form-check-label" for="customCheck5"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                            R
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-1 font-size-12">#AP1238</p>
                                    <h5 class="font-size-15 mb-0">Ronnie Spiller</h5>
                                </td>
                                <td>08 Nov, 2019</td>
                                <td>$ 740</td>
                                <td>2</td>

                                <td>
                                    $ 1,480
                                </td>
                                <td>
                                    <i class="mdi mdi-checkbox-blank-circle text-warning me-1"></i> Pending
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection
