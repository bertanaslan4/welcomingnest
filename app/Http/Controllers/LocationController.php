<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Countries;
use App\Models\States;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getCountries()
    {
        $countries = Countries::all();
        return response()->json($countries);
    }

    public function getStates($country_id)
    {
        $states = States::where('country_id', $country_id)->get();
        return response()->json($states);
    }

    public function getCities($state_id)
    {
        $cities = Cities::where('state_id', $state_id)->get();
        return response()->json($cities);
    }
}
