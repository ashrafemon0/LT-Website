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
                        <div class="card-header"> Edit Academic Programm </div>
                        <div class="card-body">



                            <form action="{{ url('academic/update/'.$academics->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Academic Title</label>
                                    <input type="text" name="aca_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$academics->aca_title}}">
                                    <label for="exampleInputEmail1">Academic Description</label>
                                    <input type="text" name="aca_des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $academics->aca_des }}">

                                    @error('aca_title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Academic Image</label>
                                    <input type="file" name="aca_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $academics->aca_img }}">

                                    @error('brand_image')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <img src="{{ asset($academics->aca_img) }}" style="width:50px; height:50px;" >

                                </div>



                                <button type="submit" class="btn btn-primary">Update Course</button>
                            </form>

                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>

@endsection
