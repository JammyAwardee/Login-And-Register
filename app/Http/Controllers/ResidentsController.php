<?php

namespace App\Http\Controllers;

use App\Models\Residents;
use Illuminate\Http\Request;

class ResidentsController extends Controller
{
    public function index(Request $request){
        return view('residents.residents', ['residents' => Residents::latest()->filter(request(['search']))->paginate(10)]);
    }
}
