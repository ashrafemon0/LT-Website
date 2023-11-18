<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CareerController extends Controller
{
    public function career(){
        $AllJob = JobPost::all();
        return view('pages.career',compact('AllJob'));
    }
    public function AllCareer(){

        $jobPost = JobPost::latest()->paginate(8);
        return view('admin.Career.index' , compact('jobPost'));
    }
    public function AdminJobStore(Request $request){
        $request->validate([
            'job_title' => 'required',
            'job_des' => 'required',
            'job_url' => 'required',

        ],
            [
                'name.required' => 'Please Input Instructor name',
                'designation.required' => 'Please Input designation',
                'job_url.required' => 'Please Input designation',
            ]);


        JobPost::insert([
            'job_title' => $request->job_title,
            'job_des' => $request->job_des,
            'job_url' => $request->job_url,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Job Post Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }
    public function Edit($id){

        $JobPostEdit = JobPost::findOrFail($id);
        return view('admin.Career.edit',compact('JobPostEdit'));

    } // end method
    public function Update(Request $request){
        $request->validate([
            'job_title' => 'required',
            'job_des' => 'required',
            'job_url' => 'required',


        ],
            [
                'job_title.required' => 'Please Input Job Title',
                'job_des.required' => 'Please Input Job Des',
                'job_url.required' => 'Please Input Job Url',
            ]);


        $campusInfo_id = $request->id;

        JobPost::findOrFail($campusInfo_id)->update([

                'job_title' => $request->job_title,
                'job_des' => $request->job_des,
                'job_url' => $request->job_url,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Job Post Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);


    } // end method

    public function Delete($id){

        JobPost::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Job Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

    public function ApplyPost(Request $request){

//        $request->validate([
//            'resume' => 'required|mimes:pdf|max:2048', // Validate PDF file type and size
//        ]);

        ApplyJob::insert([
            'job_title' => $request->job_title,
            'name' => $request->name,
            'email' => $request->email,
            'resume' => $request->resume,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('career')->with('success','Apply Successfully Done');

    }
    public function AdminApply(){
        $ApplyPerson = ApplyJob::all();
        return view('admin.Career.ApplyPerson',compact('ApplyPerson'));
    }
    public function downloadPdf($pdfId)
    {
        $pdf = ApplyJob::findOrFail($pdfId);

        // Define the file path
        $filePath = storage_path('app/public/' . $pdf->file_path);

        // Define the original name for the downloaded file
        $originalName = $pdf->original_name;

        return response()->download($filePath, $originalName);
    }
    public function JobDelete($id){

        ApplyJob::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Job Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

}
