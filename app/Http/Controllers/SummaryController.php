<?php

namespace App\Http\Controllers;

use App\Models\CampusInformation;
use App\Models\Summary;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class SummaryController extends Controller
{
    public function AllSummary()
    {

        $summarys = Summary::latest()->paginate(5);
        return view('admin.Summary.index', compact('summarys'));
    }
    public function Edit($id){

        $summary = Summary::findOrFail($id);
        return view('admin.summary.edit',compact('summary'));

    } // end method

    public function Update(Request $request){
        $request->validate([
            'count_number' => 'required',
            'count_title' => 'required',

        ],
            [
                'count_number.required' => 'Please Input Summary Count Number',
                'count_title.required' => 'Please Input Summary Title',
            ]);


        $summary_id = $request->id;




            Summary::findOrFail($summary_id)->update([

                'count_number' => $request->count_number,
                'count_title' => $request->count_title,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Summary Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);


    } // end method
}
