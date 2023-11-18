<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\CampusInformation;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class InstructorController extends Controller
{
    public function instructor(){
        $instructor = Instructor::all();
        return view('pages.instructor',compact('instructor'));
    }






    public function AllInstructor(){

        $Instructor = Instructor::latest()->paginate(15);
        return view('admin.Instructor.index' , compact('Instructor'));
    }

    public function AdminInstructorStore(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'fa_link' => 'required',
            'tw_link' => 'required',
            'ln_link' => 'required',
            'image' => 'required',

        ],
            [
                'name.required' => 'Please Input Instructor name',
                'designation.required' => 'Please Input designation',
                'fa_link.required' => 'Please Input Instructor Facebook Link',
                'tw_link.required' => 'Please Input Twitter Link',
                'ln_link.required' => 'Please Input',
            ]);

        $Instructor_image =  $request->file('image');


        $name_gen = hexdec(uniqid()).'.'.$Instructor_image->getClientOriginalExtension();
        Image::make($Instructor_image)->resize(300,200)->save('image/brand/'.$name_gen);

        $last_img = 'image/brand/'.$name_gen;

        Instructor::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'fa_link' => $request->fa_link,
            'tw_link' => $request->tw_link,
            'ln_link' => $request->ln_link,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Instructor Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

    public function Edit($id){

        $InstructorEdit = Instructor::findOrFail($id);
        return view('admin.Instructor.edit',compact('InstructorEdit'));

    } // end method

    public function Update(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'fa_link' => 'required',
            'tw_link' => 'required',
            'ln_link' => 'required',

        ],
            [
                'name.required' => 'Please Input Instructor name',
                'designation.required' => 'Please Input designation',
                'fa_link.required' => 'Please Input Instructor Facebook Link',
                'tw_link.required' => 'Please Input Twitter Link',
                'ln_link.required' => 'Please Input',
            ]);


        $campusInfo_id = $request->id;

        if ($request->file('image')) {

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(740,493)->save('image/brand/'.$name_gen);
            $save_url = 'http://127.0.0.1:8000/image/brand/'.$name_gen;

            Instructor::findOrFail($campusInfo_id)->update([

                'name' => $request->name,
                'designation' => $request->designation,
                'fa_link' => $request->fa_link,
                'tw_link' => $request->tw_link,
                'ln_link' => $request->ln_link,
                'image' => $save_url,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Instructor Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);


        }else{

            Instructor::findOrFail($campusInfo_id)->update([

                'name' => $request->name,
                'designation' => $request->designation,
                'fa_link' => $request->fa_link,
                'tw_link' => $request->tw_link,
                'ln_link' => $request->ln_link,
                'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'Instructor Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);
        }

    } // end method




    public function Delete($id){

        Instructor::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Instructor Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method
}
