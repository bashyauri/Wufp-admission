<?php

namespace App\Http\Controllers\Nds;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Lga;
use App\Models\Payment;
use App\Models\Program;
use App\Models\State;
use App\Models\User;
use Illuminate\Contracts\View\View;


class HomeController extends Controller
{
    public function index() : View
    {
        $data['programs'] =  Program::find( auth()->user()->program_id);

        $data['studentCourse'] = Course::find(auth()->user()->course_id);
        $data['studentDepartment'] = Department::find(auth()->user()->department_id);
        $data['studentPayments'] = User::with('payments')->find(auth()->user()->id)->payments;
        return view('dashboards.student.nds.default')->with($data);
    }
    public function printForm(User $student){
        $this->authorize('printAdmissionForm', $student);
        $lga = Lga::where(['id'=>auth()->user()->lga_id])->first(['name']);
        $state = State::where(['id'=>auth()->user()->state_id])->first(['name']);
        $admissionPayment = Payment::where(['student_id'=> auth()->user()->id,'resource'=>'Admission Fees'])->first(['RRR','transaction_id']);

        return view('nds.print-form')->with(['admissionPayment'=>$admissionPayment,'lga'=>$lga,'state'=>$state]);

    }
}