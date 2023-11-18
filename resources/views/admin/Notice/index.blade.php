@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All Notice Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Notice Title</th>
                                <th scope="col">Notice Description</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($Notices as $Notice)
                                <tr>
                                    <th scope="row"> {{ $i++  }} </th>
                                    <td> {{ $Notice->title }} </td>
                                    <td> {{ Str::limit($Notice->notice_des, 50) }} </td>
                                    <td>
                                        @if($Notice->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($Notice->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('notice/edit/'.$Notice->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('notice/delete/'.$Notice->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> Add CampusInfo </div>
                        <div class="card-body">



                            <form action="{{ route('store.notice') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Notice Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <label for="exampleInputEmail1">Notice Description</label>
                                <textarea name="notice_des" id="myTextarea"></textarea>

                                    @error('notice_des')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror


                                <button type="submit" class="btn btn-primary">Add Notice</button>
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
