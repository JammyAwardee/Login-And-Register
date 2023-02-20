<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Residents;
use App\Models\Households;
use Illuminate\Http\Request;
use App\Models\NewsandUpdates;
use Illuminate\Support\Facades\DB;
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
        $residents = Residents::all();
        $households = Households::all();
        $newsandupdates = NewsandUpdates::all();
        $maxAge = 64;
        $minAge = 15;
        $seniorAge = Carbon::today()->subYears(65)->startOfDay();
        $minorAge = Carbon::today()->subYears(18)->startOfDay();
        $belowAdult = Carbon::today()->subYears(15)->startOfDay();
        $minDate = Carbon::today()->subYears($maxAge);
        $maxDate = Carbon::today()->subYears($minAge)->endOfDay();
        $seniors = DB::table('residents')
            ->whereDate('b_date', '<=', $seniorAge)
            ->get();

        $minors = DB::table('residents')
            ->whereDate('b_date', '>', $minorAge)
            ->get();

        $labor = DB::table('residents')
            ->whereBetween('b_date', [$minDate, $maxDate])
            ->get();

        $children = DB::table('residents')
            ->whereDate('b_date', '<', $belowAdult)
            ->get();

        $unemployed = DB::table('residents')
            ->whereBetween('b_date', [$minDate, $maxDate])
            ->where('employment_status', 'unemployed')
            ->get();

        $women = DB::table('residents')
            ->whereDate('b_date', '<', $minorAge)
            ->where('gender', 'Female')
            ->get();

        $farmers = DB::table('residents')
            ->where('occupation', 'Farmer')
            ->get();

        $ofw = DB::table('residents')
            ->where('occupation', 'OFW')
            ->get();

        $businessman = DB::table('residents')
            ->where('occupation', 'Business Owner')
            ->get();

        $philhealth = DB::table('residents')
            ->where('has_philhealth', true)
            ->get();

        $female = DB::table('residents')
            ->where('gender', 'female')
            ->get();

        $male = DB::table('residents')
            ->where('gender', 'male')
            ->get();

        $selfemployed = DB::table('residents')
            ->whereBetween('b_date', [$minDate, $maxDate])
            ->where('employment_status', 'self-employed')
            ->get();

        $regular = DB::table('residents')
            ->whereBetween('b_date', [$minDate, $maxDate])
            ->where('employment_status', 'regular')
            ->get();

        $contractual = DB::table('residents')
            ->whereBetween('b_date', [$minDate, $maxDate])
            ->where('employment_status', 'contractual')
            ->get();

        $casual = DB::table('residents')
            ->whereBetween('b_date', [$minDate, $maxDate])
            ->where('employment_status', 'casual')
            ->get();

        $retired = DB::table('residents')
            ->whereBetween('b_date', [$minDate, $maxDate])
            ->where('employment_status', 'retired')
            ->get();

        return view('officialHome', ['residents' => $residents, 'households' => $households, 'newsandupdates' => $newsandupdates, 'seniors' => $seniors, 'minors' => $minors, 'labor' => $labor, 'unemployed' => $unemployed, 'women' => $women, 'farmers' => $farmers, 'ofw' => $ofw, 'businessman' => $businessman, 'philhealth' => $philhealth, 'female' => $female, 'male' => $male, 'children' => $children, 'selfemployed' => $selfemployed, 'regular' => $regular, 'contractual' => $contractual, 'casual' => $casual, 'retired' => $retired]);
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {
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
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
    public function officialProfile()
    {
        return view('officialprofile');
    }

    public function updateOfficialProfile(Request $request)
    {
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
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
}
