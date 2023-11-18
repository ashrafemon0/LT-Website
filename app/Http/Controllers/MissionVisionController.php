<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionVisionController extends Controller
{
    public function missionVision(){
        return view('pages.missionVision');
    }
}
