<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\calendar;
use App\Models\CampusInformation;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CalenderController extends Controller
{
    public function holiday(){
        $CalenderData = DB::table('calendars')->get();
        return view('pages.holiday',compact('CalenderData'));
    }
    public function Calender(){
        $Calender = calendar::all();
        return view('admin.Calender.index',compact('Calender'));
    }

    public function Edit($id){

        $CalenderEdit = calendar::findOrFail($id);
        return view('admin.Calender.edit',compact('CalenderEdit'));

    } // end method
    public function Update(Request $request){
        $request->validate([
            'google_calender' => 'required',
            'calender_img' => 'required',

        ],
            [
                'google_calender.required' => 'Please Input Calender Link',
                'calender_img.required' => 'Please Input Calender Image',
            ]);


        $Calender_id = $request->id;

        if ($request->file('calender_img')) {

            $image = $request->file('calender_img');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(940,493)->save('image/brand/'.$name_gen);
            $save_url = 'http://127.0.0.1:8000/image/brand/'.$name_gen;

            calendar::findOrFail($Calender_id)->update([

                'google_calender' => $request->google_calender,
                'calender_img' => $save_url,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Calender Information Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);


        }else{

            calendar::findOrFail($Calender_id)->update([

                'google_calender' => $request->google_calender,
                'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'Calender Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);
        }

    } // end method
}
