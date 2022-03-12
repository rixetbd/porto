@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Skills</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Skills</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>Add Skills</h6></div>
            <div class="card-body">
                <form action="{{route('admin.about.skills.new')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 my-2">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control form-control-sm" placeholder="Subject name">
                        </div>
                        <div class="col-6 my-2">
                            <label for="performance">Performance</label>
                            <input type="number" name="performance" id="performance" class="form-control form-control-sm" placeholder="Performance into %" max="100">
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Write a short description..."></textarea>
                    </div>
                    <div class="my-2">
                        <button type="submit" class="btn btn-sm btn-success">Add Skill</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>All Skills</h6></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Subject</th>
                                <th>Performance</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key=>$value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->subject}}</td>
                                <td>{{$value->performance}}</td>
                                <td>{{Str::limit($value->description, 25)}} ...</td>
                                <td>
                                    <a class="btn status_btn" href="{{route('admin.about.skills.status', $value->id)}}">
                                        @if ($value->status == 1)
                                            <i class="fas fa-toggle-on fa-2x text-success"></i>
                                        @else
                                            <i class="fas fa-toggle-off fa-2x text-danger"></i>
                                        @endif
                                    </a>
                                </td>

                                <td>
                                    <a class="btn btn-outline-danger btn-sm edit m-1" title="Delete" href="{{route('admin.about.skills.delete', $value->id)}}">
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
