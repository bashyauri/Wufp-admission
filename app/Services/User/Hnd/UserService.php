<?php

namespace App\Services\User\Hnd;

use App\Models\AttendedSchool;
use App\Models\examDetails;
use App\Models\ExamGrade;
use App\Models\HigherEducation;
use App\Models\User;



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
            AttendedSchool::updateOrCreate(
                ['user_id' =>auth()->user()->id],
                ['primary_school_name' => $validatedData['primary_school_name'],
                    'secondary_school_name' => $validatedData['secondary_school_name'],
                    'tertiary_school_name' => $validatedData['tertiary_school_name'],
                    'primary_year' => $validatedData['primary_school_year'],
                    'secondary_school_year' => $validatedData['secondary_school_year'],
                    'tertiary_school_year' => $validatedData['tertiary_school_year'],
            ]);

    }
    public function validateFour(array $validatedData):void
    {

            examDetails::updateOrCreate(
                ['user_id' =>auth()->user()->id],
                ['ssce_certificate1' => $validatedData['ssce_certificate1'],
                    'exam_number1' => $validatedData['exam_number1'],
                    'exam_year1' => $validatedData['exam_year1'],
                    'ssce_certificate2' => $validatedData['ssce_certificate2'] ?? null,
                    'exam_number2' => $validatedData['exam_number2'] ?? null,
                    'exam_year2' => $validatedData['exam_year2'] ?? null,
                ]
               );

    }
    public function validateFive(array $validatedData):void
    {

        for ($i=0; $i < 8 ; $i++) {
            ExamGrade::updateOrCreate(
                ['user_id'=> auth()->user()->id,'subject' =>$validatedData['subject'][$i]],
                [
                    'user_id'=> auth()->user()->id,
                    'name' => $validatedData['name'][$i],
                    'subject' => $validatedData['subject'][$i],
                    'grade' => $validatedData['grade'][$i],
                ]
               );
            }

    }
    public function validateSix(array $validatedData): void
    {
        if(!empty($validatedData['certificate'])) {
            $validatedData['uniqueFileName'] = uniqid().$validatedData['certificate']->getClientOriginalName();
            $validatedData['certificate']->move(public_path('/assets/certificate/'), $validatedData['uniqueFileName']);
        }
        else{
            $validatedData['uniqueFileName'] = auth()->user()->higherEducation->certificate;
        }
        HigherEducation::updateOrCreate(  ['user_id'=> auth()->user()->id],
        [
            'user_id'=> auth()->user()->id,
            'certificate_type' => $validatedData['certificate_type'],
            'certificate' => $validatedData['uniqueFileName'],
            'course_name' => $validatedData['course_name'],
            'grade_obtained' => $validatedData['grade_obtained'],

        ]);
    }
}