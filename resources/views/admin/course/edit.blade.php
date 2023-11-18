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
                        <div class="card-header"> Edit course </div>
                        <div class="card-body">



                            <form action="{{ url('course/update/'.$course->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Name</label>
                                    <input type="text" name="course_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$course->course_name}}">
                                    <label for="exampleInputEmail1">Course Description</label>
                                    <input type="text" name="course_des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->course_des }}">
                                    <label for="exampleInputEmail1">course Enroll</label>
                                    <input type="text" name="course_enroll" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->course_enroll }}">
                                    <label for="exampleInputEmail1">course Review</label>
                                    <input type="text" name="course_review" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->course_review }}">
                                    <label for="exampleInputEmail1">course Price</label>
                                    <input type="text" name="course_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $course->course_price }}">
                                    <label for="exampleInputEmail1">Teachers Name</label>
                                    <input type="text" name="teachers_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $course->teachers_name }}">
                                    <label for="exampleInputEmail1">course Duration</label>
                                    <input type="text" name="duration" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $course->duration }}">
                                    <label for="exampleInputEmail1">course Details Des</label>
                                    <textarea name="coursedetails" id="myTextarea">
                                       {{$course->coursedetails}}
                                    </textarea>
                                    @error('course_name')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Image</label>
                                    <input type="file" name="teacher_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->teacher_img }}">

                                    @error('teacher_img')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <img src="{{ asset($course->teacher_img) }}" style="width:50px; height:50px;" >

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Teacher Image</label>
                                    <input type="file" name="teacher_photo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->teacher_photo }}">

                                    @error('teacher_photo')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <img src="{{ asset($course->teacher_photo) }}" style="width:50px; height:50px;" >

                                </div>

                                <button type="submit" class="btn btn-primary">Update Course</button>
                            </form>

                        </div>

                    </div>
                </div>



            </div>
        </div>
        <script>
            // Initialize TinyMCE
            tinymce.init({
                selector: '#myTextarea'
            });
        </script>
    </div>

@endsection
