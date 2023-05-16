<?php

namespace App\Http\Controllers\Nds;
use App\Http\Controllers\Controller;
use App\Http\Requests\Nds\{validateOneRequest,validateTwoRequest,
validateThreeRequest,validateFourRequest,validateFiveRequest,validateSixRequest};
use App\Models\{User,Course,Department,ExamGrade,State,Lga,Program,Subject};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Services\User\UserService;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function __construct(
        public $userService = new UserService,
    ) {}

    public function index(){
       // Get all the departments
        $data['programs'] =  Program::with('departments')->find( Auth::user()->program_id);

        $data['studentCourse'] = Course::find(Auth::user()->course_id);
        $data['studentDepartment'] = Department::find(Auth::user()->department_id);






    //    $dashboard = match(Auth::user()->program_id){
    //         1 => 'dashboards.hnd',
    //         2 => 'dashboards.nd',
    //         3 => 'dashboards.student.nds.add-step-one',
    //         4 => 'dashboards.nce',
    //         5 => 'dashboards.pd',

    //     };
        return view('dashboards/student/nds/add-step-one')->with($data);

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
    public function create()
    {
        $this->authorize('manage-users', User::class);
        $users =  User::with('roles')->get();
        return view('laravel-examples/users/users-management', compact('users'));
    }

    public function createOne(Request $request)
    {
        $user = $request->session()->get('user');
        $roles = DB::table('roles')->get();
        return view('laravel-examples/users/add-step-one',compact('user', 'roles'));
    }

    public function validateOne(validateOneRequest $request)
    {

        $validatedData = $request->validated();

        try {
            $this->userService->validateOne($validatedData);
            return redirect()->route('nds.create.step.two')->with('success','Your account details have been saved/updated.');
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

        return view('dashboards/student/nds/add-step-two')->with($data);
    }

    public function validateTwo(validateTwoRequest $request)
    {
        $validatedData = $request->validated();
        try {
            $this->userService->validateTwo($validatedData);
            return redirect()->route('nds.create.step.three')->with(['success'=>'Your account details have been saved/updated.']);
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }

        return redirect()->route('nds.create.step.three');
    }

    public function createThree(Request $request)
    {
        if(!auth()->user()->lga_id) {

            return redirect()->back()->withErrors(['msgError' => 'Some Fields have not been added']);
        }
        $school = User::with('attendedSchool')->find(auth()->user()->id)->attendedSchool;



        return view('dashboards/student/nds/add-step-three')->with(['school'=>$school]);
    }

    public function validateThree(validateThreeRequest $request)
    {

        $validatedData = $request->validated();

        try {
            $this->userService->validateThree($validatedData);
            return redirect()->route('nds.create.step.four')->with(['success'=>'Your account details have been saved/updated.']);
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

        return view('dashboards/student/nds/add-step-four');
    }
    public function validateFour(validateFourRequest $request)
    {

        $validatedData = $request->validated();


        try {
            $this->userService->validateFour($validatedData);
            return redirect()->route('nds.create.step.five')->with(['success'=>'Your account details have been saved/updated.']);
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

        return view('dashboards/student/nds/add-step-five',['subjects' => $subjects,'grades' => $grades]);
    }
    public function validateFive(validateFiveRequest $request)
    {
        $validatedData = $request->validated();
        $grades = ExamGrade::all();

        try {
            $this->userService->validateFive($validatedData );
            return redirect()->route('nds.create.step.six')->with(['success'=>'Your account details have been saved/updated.']);
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

        return view('dashboards/student/nds/add-step-six');
    }
    public function validateSix(validateSixRequest $request)
    {
        $validatedData = $request->validated();


        try {
            $this->userService->validateSix($validatedData );
            return redirect()->route('nds.dashboard')->with(['success'=>'Your account details have been saved/updated.']);
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }
    }
    public function store(Request $request)
    {
        if(!empty($request->file('user_img'))) {
            $uniqueFileName = uniqid().$request->file('user_img')->getClientOriginalName();
            $request->file('user_img')->move(public_path('/assets/img/users/'),$uniqueFileName);
        }
        else{
            $uniqueFileName = 'default/default.jpg';
        }


        $validatedData = $request->validate([
            'public_email' => ['max:50'],
            'biography' => ['max:50'],
        ]);
        $user = $request->session()->get('user');
        $user->fill($validatedData);
        $user->file = $uniqueFileName;
        $user->save();

        $request->session()->forget('user');

        return redirect('/laravel-users-management')->with('success','User successfully added.');
    }

    public function destroy($id){
        try{
            DB::table('users')->where('id', $id)->delete();
            return redirect('/laravel-users-management')
                ->with('success','User deleted successfully');
                }catch(Exception $e){
                //if email or phone exist before in db redirect with error messages
                    return redirect()->back()->withErrors(['msgError' => 'You can\'t delete this user.']);
                }
    }

    public function createEditOne(Request $request, $id)
    {
        $this->authorize('manage-users', User::class);
        $roles =  DB::table('roles')->get();
        $user = User::with('roles')->where('id', $id)->first();

        $editUser = $request->session()->get('user');
        return view('laravel-examples/users/edit-step-one',compact('user', 'roles', 'editUser'));
    }

    public function validateEditOne(Request $request, $id)
    {
        $user = User::with('roles')->where('id', $id)->first();
        $validatedData = $request->validate([
            'first_name' => ['required', 'max:50'],
            'last_name' => ['max:50'],
            'role_id' => ['required'],
            'company' => ['max:150'],
        ]);

        if(!empty(request()->get('password')) || $user->email != $request->get('email'))
        {
            if(env('IS_DEMO') && $user->id <4)
            {

                return redirect()->back()->withErrors(['msgError' => 'You are in a demo version, you can\'t change the email address or the password.']);
            }
            else{
            $validatedData = $request->validate([
                'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')->ignore($id)],
                'password' => ['required', 'min:5', 'max:20', 'confirmed'],
            ]);
            }
        }

        if(empty($request->session()->get('user'))){
            $editUser = User::findOrFail($id);
            $editUser->fill($validatedData);
            $editUser->password = Hash::make(request()->get('password'));
            $request->session()->put('user', $editUser);
        }else{
            $editUser = $request->session()->get('user');
            $editUser->fill($validatedData);
            $request->session()->put('user', $editUser);
        }

        return redirect('/edit-create-step-two/'. $id);
    }

    public function createEditTwo(Request $request, $id)
    {
        $user = User::with('roles')->where('id', $id)->first();
        $editUser = $request->session()->get('user');
        return view('laravel-examples/users/edit-step-two',compact('user', 'editUser'));
    }

    public function validateEditTwo(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Address_1' => ['max:50'],
            'Address_2' => ['max:50'],
            'city' => ['max:50'],
            'state' => ['max:50'],
            'zip_code' => ['max:50'],
        ]);

        $editUser = $request->session()->get('user');
        $editUser->fill($validatedData);
        $request->session()->put('user', $editUser);

        return redirect('/edit-create-step-three/'. $id);
    }

    public function createEditThree(Request $request, $id)
    {
        $user = User::with('roles')->where('id', $id)->first();
        $editUser = $request->session()->get('user');
        return view('laravel-examples/users/edit-step-three',compact('user', 'editUser'));
    }

    public function validateEditThree(Request $request, $id)
    {
        $validatedData = $request->validate([
            'twitter' => ['max:50'],
            'facebook' => ['max:50'],
            'instagram' => ['max:50'],
        ]);

        $editUser = $request->session()->get('user');
        $editUser->fill($validatedData);
        $request->session()->put('user', $editUser);

        return redirect('/edit-create-step-four/'. $id);
    }

    public function createEditFour(Request $request, $id)
    {
        $user = User::with('roles')->where('id', $id)->first();
        $editUser = $request->session()->get('user');
        return view('laravel-examples/users/edit-step-four',compact('user', 'editUser'));
    }

    public function edit(Request $request, $id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        if(!empty($request->file('user_img'))) {
            $uniqueFileName = uniqid().$request->file('user_img')->getClientOriginalName();
            $request->file('user_img')->move(public_path('/assets/img/users/'),$uniqueFileName);
        }
        else{
            $uniqueFileName = $user->file;
        }

        $validatedData = $request->validate([
            'public_email' => ['max:50'],
            'biography' => ['max:50'],
        ]);
        $editUser = $request->session()->get('user');
        $editUser->fill($validatedData);
        $editUser->file = $uniqueFileName;
        $editUser->save();

        $request->session()->forget('user');

        return redirect('/laravel-users-management')->with('success','User successfully edited.');
    }
}
