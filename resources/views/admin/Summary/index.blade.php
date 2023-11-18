@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All CampusInfo Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Summary Count Value</th>
                                <th scope="col">Summary Title</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($summarys as $summary)
                                <tr>
                                    <th scope="row"> {{ $summarys->firstItem()+$loop->index  }} </th>
                                    <td> {{ $summary->count_number }} </td>
                                    <td> {{ $summary->count_title }} </td>
                                    <td>
                                        @if($summary->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($summary->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('summary/edit/'.$summary->id) }}" class="btn btn-info">Edit</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{ $summarys->links() }}

                    </div>
                </div>



            </div>
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header"> Add CampusInfo </div>--}}
{{--                        <div class="card-body">--}}



{{--                            <form action="{{ route('store.campusInfo') }}" method="POST" enctype="multipart/form-data">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail1">CampusInfo Title</label>--}}
{{--                                    <input type="text" name="info_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}

{{--                                    @error('info_title')--}}
{{--                                    <span class="text-danger"> {{ $message }}</span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail1">CampusInfo Description</label>--}}
{{--                                    <input type="text" name="info_des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}

{{--                                    @error('info_des')--}}
{{--                                    <span class="text-danger"> {{ $message }}</span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail1">CampusInfo Image</label>--}}
{{--                                    <input type="file" name="info_icon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}

{{--                                    @error('info_icon')--}}
{{--                                    <span class="text-danger"> {{ $message }}</span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}

{{--                                <button type="submit" class="btn btn-primary">Add Campus Info</button>--}}
{{--                            </form>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


        </div>




    </div>
@endsection
