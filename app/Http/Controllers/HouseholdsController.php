<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Households;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class HouseholdsController extends Controller
{
    
    public function index(Request $request){
        return view('households.households', ['households' => Households::latest()->filter(request(['search']))->paginate(10)]);
    }

    public function create(){
        return view('households.createhousehold');
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'province' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'zone_id' => ['required'],
            'street_address' => ['required'],
            'ownership_status' => ['required'],
            'dwelling_type' => ['required'],
            'water_source' => ['required'],
            'lighting_source' => ['required'],
            'toilet_type' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('/households/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $validated = $validator->validated();
        $validated['user_id'] = auth()->id();
        Households::create($validated);
        return redirect('/households')->with('status', 'Household created successfully!');
    }

    public function edit(Households $household){
        // dd($household);
        return view('households.edithousehold', ['household' => $household]);
    }

    public function update(Request $request, Households $household) {
        $validator = Validator::make($request->all(), [
            'province' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'zone_id' => ['required'],
            'street_address' => ['required'],
            'ownership_status' => ['required'],
            'dwelling_type' => ['required'],
            'water_source' => ['required'],
            'lighting_source' => ['required'],
            'toilet_type' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('/households/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $validated = $validator->validated();
        $household->update($validated);
        return back()->with('status', 'Household updated successfully!');
    }
}
