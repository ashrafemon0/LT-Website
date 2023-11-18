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
                        <div class="card-header"> Edit Slider Info </div>
                        <div class="card-body">



                            <form action="{{ url('slider/update/'.$slider->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slider Title</label>
                                    <textarea name="title" id="myTextarea">
                                       {{$slider->title}}
                                    </textarea>
                                    <label for="exampleInputEmail1">Slider Description</label>
                                    <textarea name="description" id="myTextarea2">
                                       {{$slider->description}}
                                    </textarea>

                                    @error('title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slider Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $slider->image }}">

                                    @error('image')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <img src="{{ asset($slider->image) }}" style="width:50px; height:50px;" >

                                </div>



                                <button type="submit" class="btn btn-primary">Update Campus Info</button>
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
            // Initialize TinyMCE
            tinymce.init({
                selector: '#myTextarea2'
            });
        </script>
    </div>


@endsection
