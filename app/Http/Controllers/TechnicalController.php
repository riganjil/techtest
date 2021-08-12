<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicalController extends Controller
{
    public function technical()
    {
        return view("pages.technical.view");
    }

    public function technical_php()
    {
        return view("pages.technical_php.view");
    }
}
