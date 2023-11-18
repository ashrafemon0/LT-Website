<?php

namespace App\Http\Controllers;

use App\Models\AcademicProgram;
use App\Models\CampusInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class campusInfoController extends Controller
{
    public function AllCampusInfo(){

        $campusInfos = CampusInformation::latest()->paginate(8);
        return view('admin.campusInfo.index' , compact('campusInfos'));
    }


    public function Edit($id){

        $campusInfos = CampusInformation::findOrFail($id);
        return view('admin.campusInfo.edit',compact('campusInfos'));

    } // end method

    public function Update(Request $request){
        $request->validate([
            'info_title' => 'required',
            'info_des' => 'required',
            'info_icon' => 'required',

        ],
            [
                'info_title.required' => 'Please Input CampusInfo Title',
                'info_des.required' => 'Please Input CampusInfo Des',
            ]);


        $campusInfo_id = $request->id;

        if ($request->file('info_icon')) {

            $image = $request->file('info_icon');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(740,493)->save('image/brand/'.$name_gen);
            $save_url = 'http://127.0.0.1:8000/image/brand/'.$name_gen;

            CampusInformation::findOrFail($campusInfo_id)->update([

                'info_title' => $request->info_title,
                'info_des' => $request->info_des,
                'info_icon' => $save_url,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Campus Info Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);


        }else{

            CampusInformation::findOrFail($campusInfo_id)->update([

                'info_title' => $request->info_title,
                'info_des' => $request->info_des,
                'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'campus Info Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);
        }

    } // end method

    public function Delete($id){

        CampusInformation::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Campus Info Program Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

}
