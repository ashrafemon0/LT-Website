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
                        <div class="card-header"> Edit Calender </div>
                        <div class="card-body">



                            <form action="{{ url('calender/update/'.$CalenderEdit->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Calender Link</label>
                                    <input type="text" name="google_calender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$CalenderEdit->google_calender}}">
                                    @error('google_calender')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">campus Info Image</label>
                                    <input type="file" name="calender_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $CalenderEdit->calender_img }}">

                                    @error('calender_img')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <img src="{{ asset($CalenderEdit->calender_img) }}" style="width:50px; height:50px;" >

                                </div>



                                <button type="submit" class="btn btn-primary">Update Calender</button>
                            </form>

                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>


@endsection
