<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SessionController extends Controller
{
    public function create()
    {
        return view('session/login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'phone_no'=>['required','digits:11'],
            'password'=>'required'
        ]);

        if(Auth::attempt($attributes))
        {

             session()->regenerate();

             if(auth()->user()->course_id)
             {
                return redirect("/student/".strtolower(auth()->user()->program->abv)."/dashboard");
             }
            return  redirect('/student/'.strtolower(auth()->user()->program->abv).'/index');

        }

        return back()->withErrors(['msgError' => 'These credentials do not match our records.']);
    }

    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
