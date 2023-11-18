<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function History(){
        return view('pages.history');
    }

    public function AllAbout(){
        return view('about');
    }
}
