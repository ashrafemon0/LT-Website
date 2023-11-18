@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">

                <h4>Admin Message </h4>

                <br><br>


                <div class="col-md-12">
                    <div class="card">


                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        <div class="card-header"> All Apply Data </div>


                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" width="5%">SL </th>
                                <th scope="col" width="15%">Name </th>
                                <th scope="col" width="15%">Apply job Title </th>
                                <th scope="col" width="25%">Email</th>
                                <th scope="col" width="15%">Resume</th>
                                <th scope="col">Created At</th>
                                <th scope="col" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach ($ApplyPerson as $ApplyPersons)
                                <tr>

                            <th scope="row"> {{ $i++  }} </th>
                            <td> {{ $ApplyPersons->name }} </td>
                              <td> {{ $ApplyPersons->job_title }} </td>
                            <td> {{ $ApplyPersons->email }} </td>
                                    <td><a href="{{ asset('storage/pdfs/sample.pdf') }}" class="btn btn-primary" download>Download PDF</a></td>
                                <td>
                                    @if($ApplyPersons->created_at ==  NULL)
                                        <span class="text-danger"> No Date Set</span>
                                    @else
                                        {{ Carbon\Carbon::parse($ApplyPersons->created_at)->diffForHumans() }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('ApplyJob/delete/'.$ApplyPersons->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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
