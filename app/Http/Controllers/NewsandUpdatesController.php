<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\NewsandUpdates;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class NewsandUpdatesController extends Controller
{
    public function index(Response $response) {
        return view('newsandupdates.news', ['newsandupdates' => NewsandUpdates::latest()->filter(request(['search']))->paginate(3)]);
    }

    public function create(){
        return view('newsandupdates.createnews');
    }

    public function store(Request $request){
        // dd($request->file('image'));
        $validator = Validator::make($request->all(), [
            'title' => ['required', Rule::unique('NewsandUpdates')],
            'category' => ['required'],
            'body' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $validated = $validator->validated();

        if ($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('images', 'public');
        }
        $validated['user_id'] = auth()->id();
        $validated['user_name'] = auth()->user()->name;
        $log = array('action'=>'created', 'by_userId'=>auth()->id(), 'by_userName'=>auth()->user()->name, 'receiver_type'=>'news and updates', 'receiver_name'=>$validated['title']);
        NewsandUpdates::create($validated);
        Log::create($log);
        return redirect('/newsandupdates')->with('status', 'Post published successfully!');
    }
}
