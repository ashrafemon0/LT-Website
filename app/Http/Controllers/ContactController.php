<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

 public function AdminContact(){
     $contacts = Contact::all();
     return view('admin.contact.index',compact('contacts'));
 }

    public function Update(Request $request){
        $request->validate([
            'title' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'map' => 'required',

        ],
            [
                'title.required' => 'Please Input Contact Title',
                'email.required' => 'Please Input Contact Email',
                'phone.required' => 'Please Input Contact Phone ',
                'map.required' => 'Please Input Contact Map ',
            ]);

        $contact_id = $request->id;

        Contact::findOrFail($contact_id)->update([

                'title' => $request->title,
                'email' => $request->email,
                'phone' => $request->phone,
                'map' => $request->map,
                'created_at' => Carbon::now()

            ]);

            $notification = array(
                'message' => 'Contact Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->back()->with($notification);

    } // end method

 public function AdminContactEdit($id){
     $ContactEdit = Contact::findOrFail($id);
     return view('admin.contact.edit',compact('ContactEdit'));
 }


    public function Contact(){
        $contacts = DB::table('contacts')->first();
        return view('pages.contact',compact('contacts'));
    }


    public function ContactForm(Request $request){
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('contact')->with('success','Your Message Send Successfully');

    }

    public function AdminMessage(){
        $messages = ContactForm::all();
        return view('admin.contact.message',compact('messages'));
    }

    public function AdminMessageDelete($id){
        ContactForm::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }



}
