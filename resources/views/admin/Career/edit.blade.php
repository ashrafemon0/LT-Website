@extends('admin.admin_master')

@section('admin')
    <style>
        /* Add your custom styling here */
        #myTextarea {
            height: 500px; /* Set the desired height here */
        }
    </style>

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
                        <div class="card-header"> Edit Job Post </div>
                        <div class="card-body">



                            <form action="{{ url('career/update/'.$JobPostEdit->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Job Title</label>
                                    <input type="text" name="job_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$JobPostEdit->job_title}}">

                                    @error('job_title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Job Description</label>
                                        <textarea name="job_des" id="myTextarea">
                                            {{$JobPostEdit->job_des}}
                                        </textarea>

                                        @error('job_des')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror

                                    </div>

                                </div>


                                <button type="submit" class="btn btn-primary">Update Job Post</button>
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
