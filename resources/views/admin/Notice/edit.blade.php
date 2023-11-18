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
                        <div class="card-header"> Edit Notice Board </div>
                        <div class="card-body">



                            <form action="{{ url('notice/update/'.$notices->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Notice Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$notices->title}}">

                                    @error('title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                    <label for="exampleInputEmail1">Notice Description</label>
                                    <textarea name="notice_des" id="myTextarea">
                                        {{$notices->notice_des}}
                                    </textarea>

                                    @error('notice_des')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror


                                </div>


                                <button type="submit" class="btn btn-primary">Update Notice Board</button>
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
