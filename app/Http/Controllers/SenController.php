<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenController extends Controller
{
    public function SenView(){
        return view('pages.SenViewPage');
    }
}
