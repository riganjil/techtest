<?php

namespace App\Http\Controllers;

use App\Country;
use App\Location;
use App\Region;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function region()
    {
        $data = Region::get();
        return view('pages.location.list_region', ['data' => $data]);
    }

    public function country()
    {
        $data = Country::join('regions', 'regions.region_id', '=', 'countries.region_id')->get();
        return view('pages.location.list_country', ['data' => $data]);
    }

    public function location()
    {
        $data = Location::join('countries', 'countries.country_id', '=', 'locations.country_id')->get();
        return view('pages.location.list_location', ['data' => $data]);
    }
}
