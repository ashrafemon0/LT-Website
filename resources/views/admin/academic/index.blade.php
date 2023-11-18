@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All Academic Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Academic Image</th>
                                <th scope="col">Academic Title</th>
                                <th scope="col">Academic Description</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($academics as $academic)
                                <tr>
                                    <th scope="row"> {{ $academics->firstItem()+$loop->index  }} </th>
                                    <td> <img src="{{ asset($academic->aca_img) }}" style="height:40px; width:70px;" > </td>
                                    <td> {{ $academic->aca_title }} </td>
                                    <td> {{ $academic->aca_des }} </td>
                                    <td>
                                        @if($academic->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($academic->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('academic/edit/'.$academic->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('academic/delete/'.$academic->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{ $academics->links() }}

                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> Add Course </div>
                        <div class="card-body">



                            <form action="{{ route('store.academic') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Academic Title</label>
                                    <input type="text" name="aca_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('aca_title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Academic Description</label>
                                    <input type="text" name="aca_des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('aca_des')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Academic Image</label>
                                    <input type="file" name="aca_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('aca_img')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary">Add Course</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>


        </div>




    </div>
@endsection
