<?php

namespace App\Http\Controllers\Nd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Nd\{validateOneRequest,validateTwoRequest,
    validateThreeRequest,validateFourRequest,validateFiveRequest,validateSixRequest};
use App\Models\{User,Course,Department,ExamGrade,State,Lga,Program,Subject};

use App\Services\Nd\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NdUsersController extends Controller
{
    public function __construct(
        protected UserService $userService
    ){}
    public function index(){
        // Get all the departments
         $data['programs'] =  Program::with('departments')->find( Auth::user()->program_id);


         $data['studentCourse'] = Course::find(Auth::user()->course_id);

         $data['studentDepartment'] = Department::find(Auth::user()->department_id);

         return view('nd/add-step-one')->with($data);

     }
     public function getCourses(int $department_id): object
     {
         // Get the Courses of that Department

         $courses =Course::where(['program_id' =>Auth::user()
         ->program_id,'department_id'=> $department_id])
         ->get(['id','name']);

         return  response()->json($courses);
     }
     public function getLgas(int $state_id): object
    {
        $lgas =Lga::where(['state_id'=> $state_id])
        ->get(['id','name']);

        return  response()->json($lgas);
    }
    public function validateOne(validateOneRequest $request)
    {

        $validatedData = $request->validated();

        try {
            $this->userService->validateOne($validatedData);
            return redirect()->route('nd.create.step.two')->with('success','Your account details have been saved/updated.');
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }

    }
    public function createTwo(Request $request)
    {
        if(!auth()->user()->course_id) {

            return redirect()->back()->withErrors(['msgError' => 'Some Fields have not been added']);
        }

        $data['states'] = State::all();
        $data['studentState'] = State::find(Auth::user()->state_id);
        $data['studentLga'] = Lga::find(Auth::user()->lga_id);

        $user = $request->session()->get('user');

        return view('nd/add-step-two')->with($data);
    }

    public function validateTwo(validateTwoRequest $request)
    {
        $validatedData = $request->validated();
        try {
            $this->userService->validateTwo($validatedData);
            return redirect()->route('nd.create.step.three')->with(['success'=>'Your account details have been saved/updated.']);
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }

        return redirect()->route('nd.create.step.three');
    }

    public function createThree(Request $request)
    {
        if(!auth()->user()->lga_id) {

            return redirect()->back()->withErrors(['msgError' => 'Some Fields have not been added']);
        }
        $school = User::find(auth()->user()->id)->attendedSchool;

        return view('nd/add-step-three')->with(['school'=>$school]);
    }

    public function validateThree(validateThreeRequest $request)
    {

        $validatedData = $request->validated();

        try {
            $this->userService->validateThree($validatedData);
            return redirect()->route('nd.create.step.four')->with(['success'=>'Your account details have been saved/updated.']);
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }

    }

    public function createFour(Request $request)
    {
        if(! User::with('attendedSchool')->find(auth()->user()->id)->attendedSchool) {

            return redirect()->back()->withErrors(['msgError' => 'Some Fields have not been added']);
        }

        return view('nd/add-step-four');
    }
    public function validateFour(validateFourRequest $request)
    {

        $validatedData = $request->validated();


        try {
            $this->userService->validateFour($validatedData);
            return redirect()->route('nd.create.step.five')->with(['success'=>'Your account details have been saved/updated.']);
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }

    }
    public function createFive(Request $request)
    {
        if(! auth()->user()->examDetail) {

            return redirect()->back()->withErrors(['msgError' => 'Some Fields have not been added']);
        }

        $subjects = DB::table('subjects')
        ->orderBy('name', 'asc')
        ->get();
        $grades = DB::table('grades')
        ->orderBy('name', 'asc')
        ->get();

        return view('nd/add-step-five',['subjects' => $subjects,'grades' => $grades]);
    }
    public function validateFive(validateFiveRequest $request)
    {
        $validatedData = $request->validated();
        $grades = ExamGrade::all();

        try {
            $this->userService->validateFive($validatedData );
            return redirect()->route('nd.create.step.six')->with(['success'=>'Your account details have been saved/updated.']);
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }
    }
    public function createSix(Request $request)
    {
        if(! auth()->user()->ExamGrades) {

            return redirect()->back()->withErrors(['msgError' => 'Some Fields have not been added']);
        }

        return view('nd/add-step-six');
    }
    public function validateSix(validateSixRequest $request)
    {
        $validatedData = $request->validated();


        try {
            $this->userService->validateSix($validatedData );
            return redirect()->route('nd.dashboard')->with(['success'=>'Your account details have been saved/updated.']);
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }
    }
}
