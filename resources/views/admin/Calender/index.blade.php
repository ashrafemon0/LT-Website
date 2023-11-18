@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All Calender Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Calender Link</th>
                                <th scope="col">Calender Image</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($Calender as $Calenders)
                                <tr>
                                    <th scope="row"> {{ $i++  }} </th>
                                    <td> {{ $Calenders->google_calender }} </td>
                                    <td> <img src="{{ asset($Calenders->calender_img) }}" style="height:40px; width:70px;" > </td>
                                    <td>
                                        @if($Calenders->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($Calenders->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('calender/edit/'.$Calenders->id) }}" class="btn btn-info">Edit</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>


                    </div>
                </div>



            </div>


        </div>




    </div>
@endsection
