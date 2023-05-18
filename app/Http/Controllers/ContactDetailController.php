<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactDetails;
use Illuminate\Support\Facades\Auth;

class ContactDetailController extends Controller
{
    public function contactDetail($id)
    {
        return view('contactDetail', compact('id'));
    }
    public function contactDetailsCreate(Request $request)
    {
        $id = Auth::id();

        $contactId   = $request->input('contact_id');
        $image       = $request->file('images');
        $fatherName  = $request->input('father_name');
        $motherName  = $request->input('mother_name');
        $email       = $request->input('email');
        $jobTitle    = $request->input('job_title');
        $description = $request->input('description');

        $imagePath = $image->store('images', 'public');

        $contactDetailObj = new ContactDetails();

        $contactDetailObj->contact_id    = $contactId;
        $contactDetailObj->user_id       = $id;
        $contactDetailObj->contact_image = $imagePath;
        $contactDetailObj->father_name   = $fatherName;
        $contactDetailObj->mother_name   = $motherName;
        $contactDetailObj->email         = $email;
        $contactDetailObj->job_title     = $jobTitle;
        $contactDetailObj->description   = $description;

        $res = $contactDetailObj->save();
        if($res){
            return redirect()->back()->with('success', 'Contact Details saved successfully');
        }
    }
}