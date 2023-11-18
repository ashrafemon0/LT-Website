@extends('admin.admin_master')

@section('admin')
    <style>
        /* Add your custom styling here */
        #myTextarea {
            height: 400px; /* Set the desired height here */
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
        <div class="container-fluid">
            <div class="row">




                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Blog Post </div>
                        <div class="card-body">



                            <form action="{{ url('blog/update/'.$blog->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blog Title</label>
                                    <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$blog->blog_title}}">
                                    <label for="exampleInputEmail1">Blog Description</label>
                                    <textarea name="blog_des" id="myTextarea">
                                       {{$blog->blog_des}}
                                    </textarea>
                                    <label for="exampleInputEmail1">Blog Author</label>
                                    <input type="text" name="blog_author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$blog->blog_author}}">
                                    <label for="exampleInputEmail1">Blog React</label>
                                    <input type="text" name="blog_react" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$blog->blog_react}}">
                                    <label for="exampleInputEmail1">Blog Comment</label>
                                    <input type="text" name="blog_comment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $blog->blog_comment }}">

                                    @error('blog_title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blog Image</label>
                                    <input type="file" name="blog_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $blog->blog_img }}">

                                    @error('blog_img')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <img src="{{ asset($blog->blog_img) }}" style="width:50px; height:50px;" >

                                </div>



                                <button type="submit" class="btn btn-primary">Update Blog Post</button>
                            </form>

                        </div>

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
@endsection
