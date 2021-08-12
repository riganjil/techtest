@extends('layout.main')
@section('active_technical')
    active
@endsection
@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Technical Test</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Part 1 - GIT
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Question 1 : Dapatkah Anda
                                    menjelaskan kesalahan workflow apa yang ditemukan oleh Alfa, dan langkah
                                    apa yang dapat diambil untuk dapat memperbaiki kesalahan yang telah terjadi.
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Question 2 : Sebagai tambahan,
                                    bagaimana pendapat Anda terhadap workflow git yang berjalan di
                                    perusahaan Alfa? Apakah Anda memiliki masukkan terhadap workflow tersebut?
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Answer 1 : Dapatkah Anda
                                    menjelaskan kesalahan workflow apa yang ditemukan oleh Alfa, dan langkah
                                    apa yang dapat diambil untuk dapat memperbaiki kesalahan yang telah terjadi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Part 2 - CODE, DATABASE, INTEGRASI
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Question 1 : Dapatkah Anda
                                    menuliskan perubahan apa yang perlu Anda lakukan pada code tersebut agar
                                    enhancement yang diharapkan team HR dapat berjalan sesuai kebutuhan?
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Answer 1 :
                                    <pre>
                                        <code>
$name = $request->name;
$department_id = $request->department;

$department = Department::get();
$employee = Employee::selectRaw("employee_id, first_name, last_name, email,
phone_number, department_name, country_name, job_title")
    ->join("departments", 'departments.department_id', "=", "employees.department_id")
    ->join("jobs", 'jobs.job_id', "=", "employees.job_id")
    ->join("locations", 'locations.location_id', "=", "departments.location_id")
    ->join("countries", 'countries.country_id', "=", "locations.country_id");
if ($name && $department){
    $employees = $employee->whereRaw("concat(employees.first_name,' ', employees.last_name) like '%$name%' and employees.department_id = $department_id")
    ->get();
}else{
   $employees = $employee->get();
}

return view('employee.index', ['employees' => $employees, 'department' => $department]);
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Part 2 - DRAGONBALL
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Question 1 : Suppose that you
                                    have to implement a class named DRAGON BALL. This class must have an attribute named
                                    ballCount (which starts from 0) and a method iFoundaBall.
                                    When iFoundaBall is called, ballCount is increased by one. If the value of ballCount
                                    is equal to seven, then the message You can ask your wish is printed, and ballCount
                                    is reset to 0.
                                    How would you implement this class?
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Answer 1 :
                                    <pre>
                                        <code>
class Dragonball {

    public $ballCount = 0;

    public function iFoundaBall($loop) {

        for ($i = 1; $i < $loop; $i++) {
            $ball =  $this->ballCount + $i;
            echo 'Ball ' . $ball . "<br>";
            if ($ball == 7) {
                echo 'You can ask your wish';
                exit;
            }
        }

        $this->ballCount = 0;
    }
}

$dragonBall = new DragonBall;
echo $dragonBall->iFoundaBall(10);
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
