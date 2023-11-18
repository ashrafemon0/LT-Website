<?php

namespace App\Http\Controllers;

use App\Models\ourCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{

    public function AllCoursePage(){
        $coursesPage = ourCourse::latest()->paginate(8);
        return view('pages.CoursePage',compact('coursesPage'));
    }
    public function AllCourse(){
        $courses = ourCourse::all();
        return view('admin.course.index', compact('courses'));
    }

    public function StoreCourse(Request $request){
        $request->validate([
            'course_name' => 'required',
            'course_des' => 'required',
            'course_enroll' => 'required',
            'course_review' => 'required',
            'course_price' => 'required',
            'teachers_name' => 'required',
            'duration' => 'required',
            'coursedetails' => 'required',
            'teacher_img' => 'required',
            'teacher_photo' => 'required',

        ],
            [
                'course_name.required' => 'Please Input Course Name',
                'course_des.required' => 'Please Input Course Des',
                'course_enroll.required' => 'Please Input Course Enroll value',
                'course_review.required' => 'Please Input Course Review',
                'teachers_name.required' => 'Please Input Course Teacher',
                'duration.required' => 'Please Input Course Duration',
                'course_price.required' => 'Please Input Course Price',
                'coursedetails.required' => 'Please Input Course Details',
            ]);

        $course_image =  $request->file('teacher_img');
        $teacher_photo =  $request->file('teacher_photo');

        $name_gen = hexdec(uniqid()).'.'.$course_image->getClientOriginalExtension();
        Image::make($course_image)->resize(800,500)->save('image/brand/'.$name_gen);

        $last_img = 'image/brand/'.$name_gen;

        $name_gen = hexdec(uniqid()).'.'.$teacher_photo->getClientOriginalExtension();
        Image::make($teacher_photo)->resize(500,300)->save('image/brand/'.$name_gen);

        $last_img2 = 'image/brand/'.$name_gen;

        ourCourse::insert([
            'course_name' => $request->course_name,
            'course_des' => $request->course_des,
            'course_enroll' => $request->course_enroll,
            'course_review' => $request->course_review,
            'course_price' => $request->course_price,
            'teachers_name' => $request->teachers_name,
            'duration' => $request->duration,
            'coursedetails' => $request->coursedetails,
            'teacher_img' => $last_img,
            'teacher_photo' => $last_img2,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Course Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

    public function Edit($id){

        $course = ourCourse::findOrFail($id);
        return view('admin.course.edit',compact('course'));

    } // end method

    public function Update(Request $request){
        $request->validate([
            'course_name' => 'required',
            'course_des' => 'required',
            'course_enroll' => 'required',
            'course_review' => 'required',
            'course_price' => 'required',
            'teachers_name' => 'required',
            'duration' => 'required',
            'coursedetails' => 'required',
            'teacher_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // First image validation
            'teacher_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Second image validation
        ], [
            'course_name.required' => 'Please Input Course Title',
            'course_des.required' => 'Please Input Course Des',
            'course_enroll.required' => 'Please Input Course enroll',
            'course_review.required' => 'Please Input Course review',
            'teacher_img.required' => 'Please upload the first image',
            'teacher_photo.required' => 'Please upload the second image',
            'teacher_img.image' => 'The first image must be a valid image file (jpeg, png, jpg, gif)',
            'teacher_photo.image' => 'The second image must be a valid image file (jpeg, png, jpg, gif)',
            'teacher_img.max' => 'The first image size should not exceed 2MB',
            'teacher_photo.max' => 'The second image size should not exceed 2MB',
        ]);

        $campusInfo = ourCourse::findOrFail($request->id);

        // Upload the first image
        if ($request->file('teacher_img')) {
            $image1 = $request->file('teacher_img');
            $name_gen1 = hexdec(uniqid()) . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(740, 493)->save('image/brand/' . $name_gen1);
            $save_url1 = 'http://127.0.0.1:8000/image/brand/' . $name_gen1;
        } else {
            $save_url1 = $campusInfo->teacher_img; // Use the existing URL if no new image is provided
        }

        // Upload the second image
        if ($request->file('teacher_photo')) {
            $image2 = $request->file('teacher_photo');
            $name_gen2 = hexdec(uniqid()) . '.' . $image2->getClientOriginalExtension();
            Image::make($image2)->resize(740, 493)->save('image/brand/' . $name_gen2);
            $save_url2 = 'http://127.0.0.1:8000/image/brand/' . $name_gen2;
        } else {
            $save_url2 = $campusInfo->teacher_photo; // Use the existing URL if no new image is provided
        }

        // Update the CampusInformation model with the new values
        $campusInfo->update([
            'course_name' => $request->course_name,
            'course_des' => $request->course_des,
            'course_enroll' => $request->course_enroll,
            'course_review' => $request->course_review,
            'course_price' => $request->course_price,
            'teachers_name' => $request->teachers_name,
            'duration' => $request->duration,
            'coursedetails' => $request->coursedetails,
            'teacher_img' => $save_url1, // Update the first image URL
            'teacher_photo' => $save_url2, // Update the second image URL
            'created_at' => Carbon::now()
        ]);

        $notification = [
            'message' => 'Course Updated Successfully',
            'alert-type' => 'success'
        ];

        return Redirect()->back()->with($notification);
    }



    public function Delete($id){

        ourCourse::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Courses Delected Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

}
