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
                        <div class="card-header"> Edit Campus Info </div>
                        <div class="card-body">



                            <form action="{{ url('campusInfo/update/'.$campusInfos->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Campus Info Title</label>
                                    <input type="text" name="info_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$campusInfos->info_title}}">
                                    <label for="exampleInputEmail1">Campus Info Description</label>
                                    <input type="text" name="info_des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $campusInfos->info_des }}">

                                    @error('info_title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">campus Info Image</label>
                                    <input type="file" name="info_icon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $campusInfos->info_icon }}">

                                    @error('info_icon')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <img src="{{ asset($campusInfos->info_icon) }}" style="width:50px; height:50px;" >

                                </div>



                                <button type="submit" class="btn btn-primary">Update Campus Info</button>
                            </form>

                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>


@endsection
