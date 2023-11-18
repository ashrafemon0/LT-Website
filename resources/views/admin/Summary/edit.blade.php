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
                        <div class="card-header"> Edit Summary Info </div>
                        <div class="card-body">



                            <form action="{{ url('summary/update/'.$summary->id)  }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Campus Info Title</label>
                                    <input type="text" name="count_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$summary->count_number}}">
                                    <label for="exampleInputEmail1">Campus Info Description</label>
                                    <input type="text" name="count_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $summary->count_title }}">

                                    @error('$summary')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <button type="submit" class="btn btn-primary">Update Summary Info</button>
                            </form>

                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>

@endsection
