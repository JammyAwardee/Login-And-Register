<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangayOfficialsController extends Controller
{
    public function index(){
        // public function index(){
        //     $householdHeads = DB::table('residents')
        //         ->select('household_id', 'last_name', 'first_name', 'middle_name', 'suffix')
        //         ->where('relation_to_head', 'head')
        //         ->orderBy('household_id', 'asc');
    
        //     $households = array("households" => DB::table('households')
        //         ->joinSub($householdHeads, 'householdHeads', function ($join) {
        //             $join->on('households.id', '=', 'householdHeads.household_id');
        //         })->orderBy('updated_at', 'desc')->paginate(10));
        //     return view('households.households', $households);
        // }
        $officials = array("officials" => DB::table('barangayofficials')->filter(request(['search']))
                                            ->join('residents', 'resident_id', '=', 'residents.id')
                                            ->select('residents.last_name', 'residents.first_name', 'residents.middle_name', 'residents.suffix', 'barangayofficials.resident_id', 'barangayofficials.id', 'barangayofficials.role', 'barangayofficials.term_start', 'barangayofficials.term_end')
                                            ->orderBy('role', 'asc')
                                            ->paginate(10));
        return view('officials.officials', $officials);
    }
}
