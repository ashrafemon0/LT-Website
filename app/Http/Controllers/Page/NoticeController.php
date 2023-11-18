<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\NoticeBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    public function notice(){
        return view('pages.notice');
    }

    public function AdminNotice(){
        $Notices = NoticeBoard::all();
        return view('admin.Notice.index',compact('Notices'));
    }

    public function AdminNoticeStore(Request $request){
        $request->validate([
            'title' => 'required',
            'notice_des' => 'required',

        ],
            [
                'info_title.required' => 'Please Input CampusInfo Title',
                'info_des.required' => 'Please Input CampusInfo Des',

            ]);



        NoticeBoard::insert([
            'title' => $request->title,
            'notice_des' => $request->notice_des,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Notice Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function AdminNoticeEdit($id){
        $notices = NoticeBoard::findOrFail($id);
        return view('admin.Notice.edit',compact('notices'));
    }

    public function Update(Request $request){
        $request->validate([
            'title' => 'required',
            'notice_des' => 'required',

        ],
            [
                'title.required' => 'Please Input Notice Title',
                'notice_des.required' => 'Please Input Notice Des',
            ]);


        $Notice_id = $request->id;

        NoticeBoard::findOrFail($Notice_id)->update([

                'title' => $request->title,
                'notice_des' => $request->notice_des,
                'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'Notice Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);

    } // end method

    public function Delete($id){

        NoticeBoard::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Notice Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

    public function noticeView(){
        $notices = DB::table('notice_boards')->get();
        return view('pages.notice',compact('notices'));
    }


}
