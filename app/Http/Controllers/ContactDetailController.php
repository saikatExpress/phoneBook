<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactDetailController extends Controller
{
    public function contactDetailsCreate(Request $request)
    {
        $fatherName = $request->father_name;
        return 'ok';
    }
}