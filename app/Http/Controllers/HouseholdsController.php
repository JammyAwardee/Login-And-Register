<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HouseholdsController extends Controller
{
    public function index(){
        $householdHeads = DB::table('residents')
            ->select('household_id', 'last_name', 'first_name', 'middle_name', 'suffix')
            ->where('relation_to_head', 'head')
            ->orderBy('household_id', 'asc');

        $households = array("households" => DB::table('households')
            ->joinSub($householdHeads, 'householdHeads', function ($join) {
                $join->on('households.id', '=', 'householdHeads.household_id');
            })->orderBy('updated_at', 'desc')->paginate(10));
        return view('households.households', $households);
    }
}
