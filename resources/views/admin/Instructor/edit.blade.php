@extends('admin.admin_master')

@section('admin')


    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="py-12">
        <div class="container">
            <div class="row">




                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Instructor </div>
                        <div class="card-body">



                            <form action="{{ url('instructor/update/'.$InstructorEdit->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Instructor Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$InstructorEdit->name}}">

                                    @error('name')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Designation</label>
                                    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$InstructorEdit->designation}}">

                                    @error('designation')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Facebook Link</label>
                                    <input type="text" name="fa_link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$InstructorEdit->fa_link}}">

                                    @error('fa_link')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Twitter Link</label>
                                    <input type="text" name="tw_link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$InstructorEdit->tw_link}}">

                                    @error('tw_link')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Linkedin Link</label>
                                    <input type="text" name="ln_link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$InstructorEdit->ln_link}}">

                                    @error('ln_link')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$InstructorEdit->image}}">

                                    @error('image')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                    <div class="form-group">
                                        <img src="{{ asset($InstructorEdit->image) }}" style="width:50px; height:50px;" >

                                    </div>

                                </div>


                                <button type="submit" class="btn btn-primary">Update Instructor Info</button>
                            </form>

                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>


@endsection
