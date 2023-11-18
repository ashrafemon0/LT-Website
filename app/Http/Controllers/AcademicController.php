<?php

namespace App\Http\Controllers;

use App\Models\AcademicProgram;
use App\Models\ourCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class AcademicController extends Controller
{
    public function AllAcademic()
    {

        $academics = AcademicProgram::latest()->paginate(5);
        return view('admin.academic.index', compact('academics'));
    }

    public function StoreAcademic(Request $request){
        $request->validate([
            'aca_title' => 'required',
            'aca_des' => 'required',
            'aca_img' => 'required',

        ],
            [
                'aca_title.required' => 'Please Input Academic Title',
                'aca_des.required' => 'Please Input Academic Des',

            ]);

        $academic_image =  $request->file('aca_img');


        $name_gen = hexdec(uniqid()).'.'.$academic_image->getClientOriginalExtension();
        Image::make($academic_image)->resize(300,200)->save('image/brand/'.$name_gen);

        $last_img = 'image/brand/'.$name_gen;

        AcademicProgram::insert([
            'aca_title' => $request->aca_title,
            'aca_des' => $request->aca_des,
            'aca_img' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

    public function Edit($id){

        $academics = AcademicProgram::findOrFail($id);
        return view('admin.academic.edit',compact('academics'));

    } // end method

    public function Update(Request $request){
        $request->validate([
            'aca_title' => 'required',
            'aca_des' => 'required',
            'aca_img' => 'required',

        ],
            [
                'aca_title.required' => 'Please Input Academic Title',
                'aca_des.required' => 'Please Input Academic Des',
            ]);


        $academic_id = $request->id;

        if ($request->file('aca_img')) {

            $image = $request->file('aca_img');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(740,493)->save('image/brand/'.$name_gen);
            $save_url = 'http://127.0.0.1:8000/image/brand/'.$name_gen;

            AcademicProgram::findOrFail($academic_id)->update([

                'aca_title' => $request->aca_title,
                'aca_des' => $request->aca_des,
                'aca_img' => $save_url,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Academic Program Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);


        }else{

            AcademicProgram::findOrFail($academic_id)->update([

                'aca_title' => $request->aca_title,
                'aca_des' => $request->aca_des,
                'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'Academic Program Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);
        }

    } // end method
    public function Delete($id){

        AcademicProgram::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Academic Program Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method
}
