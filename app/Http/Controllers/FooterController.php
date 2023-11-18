<?php

namespace App\Http\Controllers;

use App\Models\CampusInformation;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class FooterController extends Controller
{
    public function AllFooter(){

        $FooterAddress = Footer::latest()->paginate(8);
        return view('admin.Footer.index' , compact('FooterAddress'));
    }
    public function Edit($id){

        $FooterEdit = Footer::findOrFail($id);
        return view('admin.Footer.edit',compact('FooterEdit'));

    } // end method

    public function Update(Request $request){
        $request->validate([
            'footer_des' => 'required',
            'footer_address' => 'required',
            'footer_phone' => 'required',
            'footer_email' => 'required',

        ],
            [
                'footer_des.required' => 'Please Input Footer Des',
                'footer_address.required' => 'Please Input footer address',
                'footer_phone.required' => 'Please Input footer Phone',
                'footer_email.required' => 'Please Input footer Email',
            ]);


        $FooterAddress_id = $request->id;

        if ($request->file('footer_logo')) {

            $image = $request->file('footer_logo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(740,493)->save('image/brand/'.$name_gen);
            $save_url = 'http://127.0.0.1:8000/image/brand/'.$name_gen;

            Footer::findOrFail($FooterAddress_id)->update([

                'footer_des' => $request->footer_des,
                'footer_address' => $request->footer_address,
                'footer_phone' => $request->footer_phone,
                'footer_email' => $request->footer_email,
                'footer_logo' => $save_url,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Footer Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);


        }else{

            Footer::findOrFail($FooterAddress_id)->update([

                'footer_des' => $request->footer_des,
                'footer_address' => $request->footer_address,
                'footer_phone' => $request->footer_phone,
                'footer_email' => $request->footer_email,
                'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'Footer Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);
        }

    } // end method
}
