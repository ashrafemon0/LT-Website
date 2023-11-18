<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Multipic;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function gallery(){
        $AllPhoto = Multipic::all();
        return view('pages.gallery',compact('AllPhoto'));
    }
    public function Multpic(){
        $images = Multipic::all();
        return view('admin.multipic.index',compact('images'));
    }


    public function StoreImg(Request $request){

        $image =  $request->file('image');

        foreach($image as $multi_img){

            $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
            Image::make($multi_img)->resize(300,300)->save('image/multi/'.$name_gen);

            $last_img = 'image/multi/'.$name_gen;

            Multipic::insert([

                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
        } // end of the foreach



        return Redirect()->back()->with('success','Brand Inserted Successfully');


    }
}
