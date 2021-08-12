<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $data = Department::join('locations', 'locations.location_id', '=', 'departments.location_id')->get();
        return view("pages.department.list", ["data" => $data]);
    }
}
