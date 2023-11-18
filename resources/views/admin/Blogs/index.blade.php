@extends('admin.admin_master')

@section('admin')
    <style>
        /* Add your custom styling here */
        #myTextarea {
            height: 400px; /* Set the desired height here */
        }
    </style>
    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All Blogs Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Blog Image</th>
                                <th scope="col">Blog Title</th>
                                <th scope="col">Blog Des</th>
                                <th scope="col">Blog Author</th>
                                <th scope="col">Blog Comment</th>
                                <th scope="col">Blog React</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($blogs as $blog)
                                <tr>
                                    <th scope="row"> {{ $blogs->firstItem()+$loop->index  }} </th>
                                    <td> <img src="{{ asset($blog->blog_img) }}" style="height:40px; width:70px;" > </td>
                                    <td> {{ $blog->blog_title }} </td>
                                    <td> {{ Str::limit($blog->blog_des, 50) }} </td>
                                    <td> {{ $blog->blog_author }} </td>
                                    <td> {{ $blog->blog_comment }} </td>
                                    <td> {{ $blog->blog_react }} </td>
                                    <td>
                                        @if($blog->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('blog/edit/'.$blog->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('blog/delete/'.$blog->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{ $blogs->links() }}

                    </div>
                </div>



            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"> Add Blog Post </div>
                                    <div class="card-body">



                                        <form action="{{ route('store.blogs') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Blog Title</label>
                                                <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                <label for="exampleInputEmail1">Blog Description</label>
                                                <textarea name="blog_des" id="myTextarea"></textarea>

                                                <label for="exampleInputEmail1">Blog Author</label>
                                                <input type="text" name="blog_author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                <label for="exampleInputEmail1">Blog React</label>
                                                <input type="text" name="blog_react" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                <label for="exampleInputEmail1">Blog Comment</label>
                                                <input type="text" name="blog_comment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('blog_comment')
                                                <span class="text-danger"> {{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Blog Image</label>
                                                <input type="file" name="blog_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('blog_img')
                                                <span class="text-danger"> {{ $message }}</span>
                                                @enderror

                                            </div>

                                            <button type="submit" class="btn btn-primary">Add Blog Post</button>
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
