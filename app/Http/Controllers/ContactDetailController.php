<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactDetails;

class ContactDetailController extends Controller
{
    public function contactDetail($id)
    {
        return view('contactDetail', compact('id'));
    }
    public function contactDetailsCreate(Request $request)
    {
        $fatherName = $request->input('father_name');
        $motherName = $request->input('mother_name');
        $email = $request->input('email');
        $jobTitle = $request->input('job_title');
        // $description = $request->input('description');

        $contactDetailObj = new ContactDetails();

        $contactDetailObj->father_name = $fatherName;
        $contactDetailObj->mother_name = $motherName;
        $contactDetailObj->email = $email;
        $contactDetailObj->job_title = $jobTitle;

        $res = $contactDetailObj->save();
        if($res){
            return redirect()->back()->with('success', 'Contact Details saved successfully');
        }
    }
}