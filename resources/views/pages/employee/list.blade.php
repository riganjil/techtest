@extends('layout.main')
@section('active_employee')
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
                        <h6 class="ml-2 font-weight-bold text-primary ">Employees</h6>
                        <br>
                        <div class="col-lg-12">
                            <form method="get" class="form-inline">
                                <div class="form-group mr-3">
                                    <label for="exampleFormControlSelect1" class="mr-3">Input manager name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group mr-3">
                                    <label for="exampleFormControlSelect2" class="mr-3">Select department</label>
                                    <select name="department" class="form-control" id="exampleFormControlSelect1">
                                        @foreach($department as $row)
                                        <option value="{{$row->department_id}}">{{$row->department_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Department Name</th>
                                    <th>Country Name</th>
                                    <th>Job Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $key => $value)
                                    <tr>
                                        <td>{{$value->employee_id}}</td>
                                        <td>{{$value->first_name}}</td>
                                        <td>{{$value->last_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->department_name}}</td>
                                        <td>{{$value->country_name}}</td>
                                        <td>{{$value->job_title}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

