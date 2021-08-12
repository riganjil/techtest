<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $data = Job::get();
        return view("pages.job.list", ['data' => $data]);
    }
}
