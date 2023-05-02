<?php

namespace App\Http\Controllers;

use App\Rules\Name;
use App\Models\Contact;
use App\Rules\PhoneNumber;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Encryption\DecryptException;

class ContactController extends Controller
{
    public function createContact(Request $request)
    {
        $validated = $request->validate([
            'firstname'   => ['required', new Name, 'max:50', 'min:2'],
            'lastname'    => ['required', new Name, 'max:50', 'min:2'],
            'phonenumber' => ['required', new PhoneNumber, 'max:15', 'min:10'],
            'address'     => ['required', 'string', 'max:250', 'min:2'],
        ]);

        $firstName   = $request->input('firstname');
        $lastName    = $request->input('lastname');
        $phoneNumber = $request->input('phonenumber');
        $address     = $request->input('address');

        $contactObj = new Contact();

        $contactObj->first_name   = Str::title($firstName);
        $contactObj->last_name    = Str::title($lastName);
        $contactObj->phone_number = $phoneNumber;
        $contactObj->address      = Str::title($address);
        $contactObj->user_id      = Auth::id();

        $res = $contactObj->save();
        if($res){
            return back()->with('success', 'Contact save successfully');
        }
    }

    //From user profile page comes this method
    public function contactForm()
    {
      return view('contact');
    }

    public function showContact($id)
    {
        $id = Crypt::decryptString($id);
        $contacts = DB::table('contacts')->where('id', $id)->get();
        return view('editcontact', ['contacts'=>$contacts]);
    }

    public function update(Request $request, $id)
    {
        $validData = $request->validate([
            'first_name'   => [new Name, 'max:50', 'min:2'],
            'last_name'    => [new Name, 'max:50', 'min:2'],
            'phone_number' => [new PhoneNumber, 'max:15', 'min:10'],
            'address'      => ['string', 'max:250', 'min:2'],
        ]);

        $firstName   = $request->first_name;
        $lastName    = $request->last_name;
        $phoneNumber = $request->phone_number;
        $address     = $request->address;

        $data = array(
            'first_name'   => Str::title($firstName),
            'last_name'    => Str::title($lastName),
            'phone_number' => $phoneNumber,
            'address'      => Str::title($address),
        );

        $res = DB::table('contacts')->where('id', $id)->update($data);
        if($res){
            return back()->with('success', 'Contact update successfully');
        }
    }

    public function delete($id)
    {
        $id = Crypt::decryptString($id);
        $res = DB::table('contacts')->where('id', $id)->delete($id);
        if($res){
            return redirect()->back()->with('success', 'Contact delete successfully');
        }
    }

    public function show($id)
    {
        $id = Crypt::decryptString($id);
        $contact = DB::table('contacts')->where('id', $id)->get();
        return view('showContact',['contact'=>$contact]);
    }
}
