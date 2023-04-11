<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $contacts = DB::table('contacts')->where('user_id', $id)->orderBy('first_name', 'asc')->get();
        $total = $contacts->count();
        return view('home', compact('contacts','total'));
    }

    public function registationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'     => ['required', 'max:100', 'min:2', 'string'],
            'email'    => ['required', 'email:rfc,dns', 'unique:users'],
            'password' => ['required', Password::min(5)->mixedCase() ]
        ]);

        $name     = $request->input('name');
        $email    = $request->input('email');
        $password = $request->input('password');

        $userObj = new User();

        $userObj->name     = Str::title($name);
        $userObj->email    = $email;
        $userObj->password = Hash::make($password);

        $res = $userObj->save();
        if($res){
            return redirect('/login');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }

        return redirect()->route('login')
            ->withErrors(['email' => 'Invalid email or password.'])
            ->withInput();

    }

    public function profile()
    {
        return view('profile');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}