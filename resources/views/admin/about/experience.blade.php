@extends('admin.layouts.dashboard')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Experience</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Experience</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>Add Experience</h6></div>
            <div class="card-body">
                <form action="{{route('admin.about.experience.new')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 my-2">
                            <label for="organization">Organization</label>
                            <input type="text" name="organization" id="organization" class="form-control form-control-sm" placeholder="Organization">
                            @error('organization')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-6 my-2">
                            <label for="position">Position</label>
                            <input type="text" name="position" id="position" class="form-control form-control-sm" placeholder="Position">
                            @error('position')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 my-2">
                            <label for="start_year">Start Year</label>
                            <select name="start_year" id="start_year" class="form-control form-control-sm">
                                <option value="">Select Year</option>
                                @for ($i = 1980; $i < date('Y'); $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            @error('start_year')
                                <small class="text-danger" style="letter-spacing: 0.5px;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-6 my-2">
                            <label for="end_year">End Year</label>
                            <select name="end_year" id="end_year"  class="form-control form-control-sm">
                                <option value="">End Year</option>
                                @for ($i = 1980; $i < date('Y'); $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            @error('end_year')
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
                        <button type="submit" class="btn btn-sm btn-success">Add Skill</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h6>All Experiences</h6></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Position</th>
                                <th>Organization</th>
                                <th>Year</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key=>$value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->position}}</td>
                                <td>{{$value->organization}}</td>
                                <td>{{$value->start_year ."-". $value->end_year}}</td>
                                <td>
                                    <a class="btn status_btn" href="{{route('admin.about.experience.status', $value->id)}}">
                                        @if ($value->status == 1)
                                            <i class="fas fa-toggle-on fa-2x text-success"></i>
                                        @else
                                            <i class="fas fa-toggle-off fa-2x text-danger"></i>
                                        @endif
                                    </a>
                                </td>

                                <td>
                                    <a class="btn btn-outline-danger btn-sm edit m-1" title="Delete" href="{{route('admin.about.experience.delete', $value->id)}}">
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
