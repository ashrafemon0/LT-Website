<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\ourCourse;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{

    public function AllIdCourseDetails($id){
        $CourseId = $id;
        $result = ourCourse::where('id',$CourseId)->first();

        return view('pages.CourseDetailsPage',compact('result'));
    }
}
