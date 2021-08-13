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

    public function add()
    {
        return view('pages.department.add');
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return "success";

    }
}
