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
                        <div class="card-header"> Edit Footer Address </div>
                        <div class="card-body">



                            <form action="{{ url('footerAddress/update/'.$FooterEdit->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer Description</label>
                                    <input type="text" name="footer_des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $FooterEdit->footer_des }}">
                                    <label for="exampleInputEmail1">Footer Address</label>
                                    <input type="text" name="footer_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $FooterEdit->footer_address}}">
                                    <label for="exampleInputEmail1">Footer Phone</label>
                                    <input type="text" name="footer_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $FooterEdit->footer_phone }}">
                                    <label for="exampleInputEmail1">Footer Mail</label>
                                    <input type="text" name="footer_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $FooterEdit->footer_email }}">

                                    @error('info_title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer Logo</label>
                                    <input type="file" name="footer_logo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $FooterEdit->footer_logo }}">

                                    @error('info_icon')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <img src="{{ asset($FooterEdit->footer_logo) }}" style="width:50px; height:50px;" >

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
