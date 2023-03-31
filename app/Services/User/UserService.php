<?php

namespace App\Services\User;

use App\Models\AttendedSchool;
use App\Models\User;

use function PHPSTORM_META\type;

/**
 * Class UserService.
 */
class UserService
{
    public function validateOne(array $validatedData):void
    {
        $validatedData['birthday'] = $validatedData['choices-year'].'-'.$validatedData['choices-month'].'-'.$validatedData['choices-day'];
        if(!empty($validatedData['user_img'])) {
            $validatedData['uniqueFileName'] = uniqid().$validatedData['user_img']->getClientOriginalName();
            $validatedData['user_img']->move(public_path('/assets/img/users/'), $validatedData['uniqueFileName']);
        }
        else{
            $validatedData['uniqueFileName'] = auth()->user()->file;
        }

       $user =  User::where('id','=',auth()->user()->id)
        ->update([
            'file' => $validatedData['uniqueFileName'],
            'gender' => $validatedData['gender'],
            'marital_status' => $validatedData['marital_status'],
            'kin_name' => $validatedData['next_of_kin'],
            'kin_gsm' => $validatedData['next_of_kin_phone'],
            'department_id' => $validatedData['department'],
            'course_id' => $validatedData['courses'],
            'birthday' => $validatedData['birthday'],
        ]);

    }
    public function validateTwo(array $validatedData):void
    {
        User::where(['id' => auth()->user()->id])
        ->update([
            'nationality' => $validatedData['nationality'],
            'state_id' => $validatedData['state'],
            'lga_id' => $validatedData['lga'],
            'home_town' => $validatedData['home_town'],
            'home_address' => $validatedData['home_address'],
            'cor_address' => $validatedData['cor_address'],
            'kin_address' => $validatedData['kin_address'],
            'sponsor' => $validatedData['sponsor'],
        ]);
    }
    public function validateThree(array $validatedData):void
    {
        // foreach ($validatedData as $key => $value) {
        //     'school_name' => $value['school_name'],
        // }
        // dd(count($validatedData));
        // dd($validatedData['school_name'][2]);

        for ($i=0; $i < count($validatedData)-1; $i++) {
            AttendedSchool::create(
                [
                    'user_id' => auth()->user()->id,
                    'school_name' => $validatedData['school_name'][$i],
                    'certificate_obtained' => $validatedData['certificate_obtained'][$i],
                    'year' => $validatedData['year'][$i],
                ]
                );
        }


    }
}
