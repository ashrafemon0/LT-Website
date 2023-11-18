<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAbout;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Auth;
class AboutController extends Controller
{
    public function HomeAbout(){
        $homeAbout = HomeAbout::latest()->get();
        return view('admin.home.index', compact('homeAbout'));
    }

    public function AddAbout(){
        return view('admin.home.create');
    }

    public function StoreAbout(Request $request){

        $big_img = $request->file('big_img');
        $big_name_gen = hexdec(uniqid()).'.'.$big_img->getClientOriginalExtension();
        Image::make($big_img)->resize(300,200)->save('image/brand/'.$big_name_gen);


        $small_img = $request->file('small_img');
        $small_name_gen = hexdec(uniqid()).'.'.$small_img->getClientOriginalExtension();
        Image::make($small_img)->resize(300,200)->save('image/brand/'.$small_name_gen);


        $big_img_path = 'image/brand/'.$big_name_gen;
        $small_img_path = 'image/brand/'.$small_name_gen;


        HomeAbout::insert([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'long_dis' => $request->long_dis,
            'small_img' => $small_img_path,
            'big_img' => $big_img_path,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.about')->with('success','About Inserted Successfully');
    }


    public function EditAbout($id){
        $homeabout = HomeAbout::find($id);
        return view('admin.home.edit',compact('homeabout'));
    }

    public function UpdateAbout(Request $request, $id){
        $update = HomeAbout::find($id)->update([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'long_dis' => $request->long_dis,
            'small_img' => $request->small_img,
            'big_img' => $request->big_img,

        ]);

        return Redirect()->route('home.about')->with('success','About Updated Successfully');
    }

    public function DeleteAbout($id){
        $delete = HomeAbout::find($id)->Delete();
        return Redirect()->back()->with('success','About Deleted Successfully');
    }

//    public function Portfolio(){
//        $images = Multipic::all();
//        return view('pages.portfolio',compact('images'));
//    }



}
