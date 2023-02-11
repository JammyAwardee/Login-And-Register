<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function officialHome()
    {
        return view('officialHome');
    }

    public function profile(){
        return view('profile');
    }

    public function updateProfile(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email']
        ]);
        User::whereId(auth()->user()->id)->update([
            'name' => ($request->name),
            'email' => ($request->email),
        ]);

        return back()->with("status", "Profile updated successfully!");
    }

    public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
}
    public function officialProfile(){
        return view('officialprofile');
    }

    public function updateOfficialProfile(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email']
        ]);
        User::whereId(auth()->user()->id)->update([
            'name' => ($request->name),
            'email' => ($request->email),
        ]);

        return back()->with("status", "Profile updated successfully!");
    }

    public function updateOfficialPassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
}
}
