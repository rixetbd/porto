@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Counter</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('admin.portfolio.index')}}">About Me</a></li>
                    <li class="breadcrumb-item active">Counter</li>
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
                <h6>Add New Project</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.about.counter.new')}}" method="post">
                    @csrf

                    <div class="row align-items-center">
                        <div class="col-1 my-3" style="margin-right: -20px;">
                            <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-3 my-3">
                            <label for="projects">Projects</label>
                            <input type="text" name="projects" id="projects" class="form-control form-control-sm" placeholder="Projects">
                        </div>

                        <div class="col-1 my-3" style="margin-right: -20px;">
                            <i class="fa fa-coffee fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-3 my-3">
                            <label for="coffee">Coffee</label>
                            <input type="text" name="coffee" id="coffee" class="form-control form-control-sm" placeholder="Coffee">
                        </div>
                        <div class="col-1 my-3" style="margin-right: -20px;">
                            <i class="fa fa-smile fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-3 my-3">
                            <label for="clients">Satisfied Clients</label>
                            <input type="text" name="clients" id="clients" class="form-control form-control-sm" placeholder="Satisfied Clients">
                        </div>

                    </div>

                    <div class="row align-items-center">
                        <div class="col-1 my-3" style="margin-right: -20px;">
                            <i class="fa fa-certificate fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-3 my-3">
                            <label for="exprience">Exprience</label>
                            <input type="text" name="exprience" id="exprience" class="form-control form-control-sm" placeholder="Exprience">
                        </div>
                        <div class="col-1 my-3" style="margin-right: -20px;">
                            <i class="fa fa-trophy fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-3 my-3">
                            <label for="awards">Awards Winners</label>
                            <input type="text" name="awards" id="awards" class="form-control form-control-sm" placeholder="Awards Winners">
                        </div>
                        <div class="col-1 my-3" style="margin-right: -20px;">
                            <i class="fa fa-code fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-3 my-3">
                            <label for="codes">Lines of Codes</label>
                            <input type="text" name="codes" id="codes" class="form-control form-control-sm" placeholder="Codes">
                        </div>

                    </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success">Insert</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h6>Add Counter Lsit</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Projects</th>
                            <th>Coffee</th>
                            <th>Clients</th>
                            <th>Exprience</th>
                            <th>Awards</th>
                            <th>Codes</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($counters as $key=>$value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->projects}}</td>
                            <td>{{$value->coffee}}</td>
                            <td>{{$value->clients}}</td>
                            <td>{{$value->exprience}}</td>
                            <td>{{$value->awards}}</td>
                            <td>{{$value->codes}}</td>
                            <td>
                                <a class="btn status_btn" href="{{route('admin.about.counter.status', $value->id)}}">
                                    @if ($value->status == 1)
                                        <i class="fas fa-toggle-on fa-2x text-success"></i>
                                    @else
                                        <i class="fas fa-toggle-off fa-2x text-danger"></i>
                                    @endif
                                </a>
                            </td>

                            <td>
                                <a class="btn btn-outline-danger btn-sm edit m-1" title="Delete" href="{{route('admin.about.counter.delete', $value->id)}}">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr class="text-center">
                            <td colspan="9">Nothing For Show</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection
