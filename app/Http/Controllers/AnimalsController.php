<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AnimalsController extends Controller
{
    public function index(){
        return view('pets.index',[
            'user' => Auth::user(),
            'pets' => \App\Models\Animal::all(),
        ]);
    }

    public function show($id){
        return view('pets.show',[
            'user' => Auth::user(),
            'pet' => \App\Models\Animal::find($id),
            'owner' => \App\Models\User::find(\App\Models\Animal::find($id)->owner_id),
        ]);
    }

    public function create(){
        return view('pets.create',[
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request, \App\Models\Animal $pet){
        $validated = $request->validate([
            'name' => 'required',
            'animal' => 'required',
            'breed' => 'required',
            'date' => 'required',
            'time_from' => 'required|min:5|max:5',
            'time_to' => 'required|min:5|max:5',
            'hourly_rate' => 'required|not_regex:/[a-z]/',
            'description' => 'required|max:500',
        ]);

        $pet->owner_id = Auth::user()->id;
        $pet->name = $validated['name'];
        $pet->animal = $validated['animal'];
        $pet->breed = $validated['breed'];
        $pet->date = $validated['date'];
        $pet->time = $validated['time_from'] . "-" . $validated['time_to'];
        $pet->hourly_rate = $validated['hourly_rate'];
        $pet->description = $validated['description'];

        if($request->file('image')){
            $pet->image = 'data:image/' . $request->file('image')->getClientOriginalExtension() . ';base64,' . base64_encode(file_get_contents($request->file('image')));
        } else {
            $pet->image = '/img/Default.jpg';
        }

        try{
            $pet->save();
            return redirect('/');
        }
        catch(Exception $e){
            $message = "Er is iets fout gegaan. Probeer het later opnieuw.";
            return redirect('/pets/create')->withErrors([$message]);
        }
    }
}
