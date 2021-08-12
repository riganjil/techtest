@extends('layout.main')
@section('active_location')
    active
@endsection
@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary float-left">Location</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Street Address</th>
                                    <th>Postal Code</th>
                                    <th>City</th>
                                    <th>State / Province</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Street Address</th>
                                    <th>Postal Code</th>
                                    <th>City</th>
                                    <th>State / Province</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{$row->location_id}}</td>
                                        <td>{{$row->street_address}}</td>
                                        <td>{{$row->postal_code}}</td>
                                        <td>{{$row->city}}</td>
                                        <td>{{$row->state_province}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

