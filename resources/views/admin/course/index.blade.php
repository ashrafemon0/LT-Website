@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All course </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Description</th>
                                <th scope="col">Course Enroll</th>
                                <th scope="col">Course Review</th>
                                <th scope="col">Course price</th>
                                <th scope="col">Teacher Name</th>
                                <th scope="col">Course Duration</th>
                                <th scope="col">Details Des</th>
                                <th scope="col">Course Image</th>
                                <th scope="col">Teacher Image</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($courses as $course)
                                <tr>
                                    <th scope="row"> {{ $i++  }} </th>
                                    <td> {{ $course->course_name }} </td>
                                    <td> {{ $course->course_des }} </td>
                                    <td> {{ $course->course_enroll }} </td>
                                    <td> {{ $course->course_review }} </td>
                                    <td> {{ $course->course_price }} </td>
                                    <td> {{ $course->teachers_name }} </td>
                                    <td> {{ $course->duration }} </td>
                                    <td> {{ Str::limit(strip_tags($course->coursedetails,20)) }} </td>
                                    <td> <img src="{{ asset($course->teacher_img) }}" style="height:40px; width:70px;" > </td>
                                    <td> <img src="{{ asset($course->teacher_photo) }}" style="height:40px; width:70px;" > </td>
                                    <td>
                                        @if($course->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($course->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('course/edit/'.$course->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('course/delete/'.$course->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> Add Course </div>
                        <div class="card-body">



                            <form action="{{ route('store.course') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Name</label>
                                    <input type="text" name="course_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('course_name')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">course Description</label>
                                    <input type="text" name="course_des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('course_des')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">course Enroll</label>
                                    <input type="text" name="course_enroll" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('course_enroll')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">course Review</label>
                                    <input type="text" name="course_review" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('course_review')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">course Price</label>
                                    <input type="text" name="course_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('course_price')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Teacher Name</label>
                                    <input type="text" name="teachers_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('teachers_name')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">course Duration</label>
                                    <input type="text" name="duration" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('duration')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <label for="exampleInputEmail1">Course Details Description</label>
                                <textarea name="coursedetails" id="myTextarea"></textarea>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Image</label>
                                    <input type="file" name="teacher_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('teacher_img')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Teacher Image</label>
                                    <input type="file" name="teacher_photo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('teacher_photo')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>




                                <button type="submit" class="btn btn-primary">Add Course</button>
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
