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
            return  redirect('/student/index');
            //  $student = User::where('id', Auth::user()->id)->get();
            // switch (Auth::user()->programme_id) {

            //     case 1:
            //         return redirect('/dashboard-hnd');
            //         break;
            //     case 2:
            //         return redirect('/index');
            //         break;
            //     case 3:
            //         return redirect('dashboard-nds');
            //         break;
            //     case 4:
            //         return redirect('dashboard-nce');
            //         break;
            //     case 5:
            //         return redirect('dashboard-cce');
            //         break;

            //     default:
            //        dd("Select an option");
            //         break;
            // }
            // session()->regenerate();
            // return redirect('/');
        }

        return back()->withErrors(['msgError' => 'These credentials do not match our records.']);
    }

    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}