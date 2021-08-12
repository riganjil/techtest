@extends('layout.main')
@section('active_job')
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
                        <h6 class="m-0 font-weight-bold text-primary float-left">Job</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Job Title</th>
                                    <th>Minimum Salary</th>
                                    <th>Maximum Salary</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Job Title</th>
                                    <th>Minimum Salary</th>
                                    <th>Maximum Salary</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{$row->job_id}}</td>
                                        <td>{{$row->job_title}}</td>
                                        <td>Rp. {{number_format($row->min_salary)}}</td>
                                        <td>Rp. {{number_format($row->max_salary)}}</td>
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

