<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Exception;

class RegisterController extends Controller
{
    public function edit(){
        return view('register', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request){
        $user = Auth::user();

        $validated = $request->validate([
            'phone_number' => 'required|max:10|not_regex:/[a-z]/',
            'role' => 'required',
            'description' => 'required|max:500',
        ]);
        
        $user->phone_number = $validated['phone_number'];
        $user->role = $validated['role'];
        $user->description = $validated['description'];
        $user->registered = true;

        if($request->file('profile_picture')){
            $user->profile_picture = 'data:image/' . $request->file('profile_picture')->getClientOriginalExtension() . ';base64,' . base64_encode(file_get_contents($request->file('profile_picture')));
        } else {
            $user->profile_picture = '/img/Default.jpg';
        }

        try{
            $user->save();
            return redirect('/');
        }
        catch(Exception $e){
            $message = "Er is iets fout gegaan. Probeer het later opnieuw.";
            return redirect('/register/edit')->withErrors([$message]);
        }
    }
}
