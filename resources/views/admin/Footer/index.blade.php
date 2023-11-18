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
                                <th scope="col">Footer Logo</th>
                                <th scope="col">Footer Description</th>
                                <th scope="col">Footer Address</th>
                                <th scope="col">Footer Phone</th>
                                <th scope="col">Footer Email</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- @php($i = 1) -->
                            @foreach($FooterAddress as $FooterAddresses)
                                <tr>
                                    <th scope="row"> {{ $FooterAddress->firstItem()+$loop->index  }} </th>
                                    <td> <img src="{{ asset($FooterAddresses->footer_logo) }}" style="height:40px; width:70px;" > </td>
                                    <td> {{ $FooterAddresses->footer_des }} </td>
                                    <td> {{ $FooterAddresses->footer_address }} </td>
                                    <td> {{ $FooterAddresses->footer_phone }} </td>
                                    <td> {{ $FooterAddresses->footer_email }} </td>
                                    <td>
                                        @if($FooterAddresses->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($FooterAddresses->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('footerAddress/edit/'.$FooterAddresses->id) }}" class="btn btn-info">Edit</a>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{ $FooterAddress->links() }}

                    </div>
                </div>



            </div>


        </div>




    </div>
@endsection
