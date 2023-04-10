<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function createContact(Request $request)
    {
        $validated = $request->validate([
            'firstname'   => ['required', 'string', 'max:50', 'min:2'],
            'lastname'    => ['required', 'string', 'max:50', 'min:2'],
            'phonenumber' => ['required', 'string', 'max:15', 'min:10'],
            'address'     => ['required', 'string', 'max:250', 'min:2'],
        ]);

        $firstName   = $request->input('firstname');
        $lastName    = $request->input('lastname');
        $phoneNumber = $request->input('phonenumber');
        $address     = $request->input('address');

        $contactObj = new Contact();

        $contactObj->first_name   = $firstName;
        $contactObj->last_name    = $lastName;
        $contactObj->phone_number = $phoneNumber;
        $contactObj->address      = $address;
        $contactObj->user_id      = Auth::id();

        $res = $contactObj->save();
        if($res){
            return back()->with('success', 'Contact save successfully');
        }
    }
}