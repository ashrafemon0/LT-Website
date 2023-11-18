<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumniController extends Controller
{
    public function AlumniView(){
        $academics = DB::table('academic_programs')->get();
        return view('pages.alumni',compact('academics'));
    }
}
