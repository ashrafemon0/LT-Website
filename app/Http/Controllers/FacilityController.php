<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function ViewFacility(){
        return view('pages.facility');
    }
}
