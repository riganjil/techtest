<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
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

        return view('pages.employee.list', ['employees' => $employees, 'department' => $department]);
    }
}
