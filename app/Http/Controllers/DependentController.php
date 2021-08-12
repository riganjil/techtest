<?php

namespace App\Http\Controllers;

use App\Dependent;
use Illuminate\Http\Request;

class DependentController extends Controller
{
    public function index()
    {
        $data = Dependent::get();
        return view('pages.dependent.list', ['data' => $data]);
    }
}
