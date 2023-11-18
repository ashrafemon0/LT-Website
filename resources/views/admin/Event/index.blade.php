@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All Event Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Event Time</th>
                                <th scope="col">Event Place</th>
                                <th scope="col">Event Title</th>
                                <th scope="col">Event Date</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($AllEvent as $AllEvents)
                                <tr>
                                    <th scope="row"> {{ $AllEvent->firstItem()+$loop->index  }} </th>
                                    <td> {{ $AllEvents->event_time }} </td>
                                    <td> {{ $AllEvents->place }} </td>
                                    <td> {{ $AllEvents->event_title }} </td>
                                    <td> {{ $AllEvents->eventDate }} </td>
                                    <td>
                                        @if($AllEvents->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($AllEvents->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('allevents/edit/'.$AllEvents->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('allevents/delete/'.$AllEvents->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{ $AllEvent->links() }}

                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> Add CampusInfo </div>
                        <div class="card-body">



                            <form action="{{ route('store.event') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Event Start & End Time</label>
                                    <input type="text" name="event_time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="11:50 am to 05:50 pm">

                                    @error('event_time')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Event Place</label>
                                    <input type="text" name="place" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('place')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Event Title</label>
                                    <input type="text" name="event_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('event_title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="eventDate">Select Event Date:</label>
                                    <input class="form-control" type="date" id="eventDate" name="eventDate">

                                    @error('eventDate')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror

                                </div>


                                <button type="submit" class="btn btn-primary">Add Event</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>


        </div>




    </div>
@endsection
