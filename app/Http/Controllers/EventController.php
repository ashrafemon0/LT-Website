<?php

namespace App\Http\Controllers;

use App\Models\AllEvent;
use App\Models\CampusInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    public function AllEvent(){

        $AllEvent = AllEvent::latest()->paginate(8);
        return view('admin.Event.index' , compact('AllEvent'));
    }

    public function StoreEvent(Request $request){
        $request->validate([
            'event_time' => 'required',
            'place' => 'required',
            'event_title' => 'required',
            'eventDate' => 'required',

        ],
            [
                'event_time.required' => 'Please Input Event Time',
                'place.required' => 'Please Input Event Place',
                'event_title.required' => 'Please Input Event Title',
                'eventDate.required' => 'Please Input Event Date',

            ]);

        AllEvent::insert([
            'event_time' => $request->event_time,
            'place' => $request->place,
            'event_title' => $request->event_title,
            'eventDate' => $request->eventDate,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Event Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }
    public function Delete($id){

        AllEvent::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Event Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

}
