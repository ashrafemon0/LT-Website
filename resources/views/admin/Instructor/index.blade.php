@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All Instructor Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Instructor Image</th>
                                <th scope="col">Instructor Title</th>
                                <th scope="col">Instructor Designation</th>
                                <th scope="col">Instructor Facebook</th>
                                <th scope="col">Instructor Twitter</th>
                                <th scope="col">Instructor Linkiden</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($Instructor as $Instructors)
                                <tr>
                                    <th scope="row"> {{ $Instructor->firstItem()+$loop->index  }} </th>
                                    <td> <img src="{{ asset($Instructors->image) }}" style="height:40px; width:70px;" > </td>
                                    <td> {{ $Instructors->name }} </td>
                                    <td> {{ $Instructors->designation}} </td>
                                    <td> {{ $Instructors->fa_link}} </td>
                                    <td> {{ $Instructors->tw_link}} </td>
                                    <td> {{ $Instructors->ln_link}} </td>
                                    <td>
                                        @if($Instructors->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($Instructors->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('instructor/edit/'.$Instructors->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('instructor/delete/'.$Instructors->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{ $Instructor->links() }}

                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> Add CampusInfo </div>
                        <div class="card-body">



                            <form action="{{ route('store.instructor') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Instructor Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('name')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Designation</label>
                                    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('designation')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Facebook Link</label>
                                    <input type="text" name="fa_link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('fa_link')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Twitter Link</label>
                                    <input type="text" name="tw_link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('tw_link')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Linkedin Link</label>
                                    <input type="text" name="ln_link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('ln_link')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instructor Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('image')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary">Add Instructor</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>


        </div>




    </div>
@endsection
