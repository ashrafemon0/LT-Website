@extends('admin.admin_master')

@section('admin')

    <style>
        /* Add your custom styling here */
        #myTextarea {
            height: 500px; /* Set the desired height here */
        }
    </style>

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All JobPost </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Job Title</th>
                                <th scope="col">Job Description</th>
                                <th scope="col">Job URL</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($jobPost as $jobPosts)
                                <tr>
                                    <th scope="row"> {{ $jobPost->firstItem()+$loop->index  }} </th>
                                    <td> {{ $jobPosts->job_title }} </td>
                                    <td> {{ Str::limit($jobPosts->job_des, 50) }} </td>
                                    <td> {{ Str::limit($jobPosts->job_url, 20) }} </td>
                                    <td>
                                        @if($jobPosts->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($jobPosts->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('career/edit/'.$jobPosts->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('career/delete/'.$jobPosts->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{ $jobPost->links() }}

                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> Add CampusInfo </div>
                        <div class="card-body">



                            <form action="{{ route('store.career') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Job Title</label>
                                    <input type="text" name="job_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('job_title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Job Description</label>
                                    <textarea name="job_des" id="myTextarea"></textarea>

                                    @error('job_des')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Job URL</label>
                                    <input type="text" name="job_url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"/>

                                    @error('job_url')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <button type="submit" class="btn btn-primary">Add Campus Info</button>
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
