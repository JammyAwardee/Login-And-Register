<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangayOfficialsController extends Controller
{
    public function index(){
        $officials = array("officials" => DB::table('barangayofficials')
                                            ->join('residents', 'resident_id', '=', 'residents.id')
                                            ->select('residents.last_name', 'residents.first_name', 'residents.middle_name', 'residents.suffix', 'barangayofficials.resident_id', 'barangayofficials.id', 'barangayofficials.role', 'barangayofficials.term_start', 'barangayofficials.term_end')
                                            ->orderBy('role', 'asc')
                                            ->paginate(10));
        return view('officials.officials', $officials);
    }

    public function search(Request $request){
        $query = ($request->input('search'));
        if ($query != '') {
            $officials = array("officials" => DB::table('barangayofficials')
                                            ->join('residents', 'resident_id', '=', 'residents.id')
                                            ->select('residents.last_name', 'residents.first_name', 'residents.middle_name', 'residents.suffix', 'barangayofficials.resident_id', 'barangayofficials.id', 'barangayofficials.role', 'barangayofficials.term_start', 'barangayofficials.term_end')
                                            ->where('residents.last_name', 'like', '%' . $query . '%')
                                            ->orWhere('residents.first_name', 'like', '%' . $query . '%')
                                            ->orWhere('residents.middle_name', 'like', '%' . $query . '%')
                                            ->orWhere('residents.suffix', 'like', '%' . $query . '%')
                                            ->orWhere('barangayofficials.role', 'like', '%' . $query . '%')
                                            ->paginate(10)
                                        );
            if(count($officials)>0){
                return view('officials.officials', $officials);
            }
            return redirect('/officials');
        }
        return redirect ('/officials')->with('error', "Please search by Official's name, role");
    }
}
