<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session/register');
    }

    public function store()
    {

        $attributes = request()->validate([
            'programme_id' => 'required',
            'first_name' => ['required', 'max:50'],
            'middle_name' => ['max:50'],
            'last_name' => ['required', 'max:50'],
            'phone_no' => ['required', 'digits:11'],
            'email' => ['required', 'email', 'max:50', Rule::unique('student_tb', 'email')],
            // 'password' => Hash::make($this->password),
            // 'vpassword' => $this->password,
            'password' => ['required', 'min:5', 'max:20'],
            'agreement' => ['accepted']
        ]);
        $insertUser = User::create(
            [
                'programme_id' => $attributes['programme_id'],
                'first_name' => $attributes['first_name'],
                'middle_name' => $attributes['middle_name'],
                'last_name' => $attributes['last_name'],
                'phone_no' => $attributes['phone_no'],
                'email' => $attributes['email'],
                'password' => Hash::make($attributes['password']),
                'verify_password' => $attributes['password'],
            ]
        );

        session()->flash('success', 'Your account has been created.');
        Auth::login($insertUser);
        return redirect('/student/index');
        // // // return to different type of login
        // // $student = User::findByEmail(Auth::user()->email);
        // // dd($student);
        // switch ($attributes['programme_id']) {
        //     case 1:
        //         return route('/dashboard-hnd');
        //         break;
        //     case 2:

        //         return  view('dashboards/nd_default',compact('student'));
        //         break;
        //     case 3:
        //         return view('dashboards/nds_default');
        //         break;
        //     case 4:
        //         return view('dashboards/nce_default');
        //         break;
        //     case 5:
        //         return view('dashboards/cce_default');
        //         break;

        //     default:
        //        dd("Select an option");
        //         break;
        // }

    }
}