<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            ['program_id' => 2, 'name' =>'ND Business Administration and Management'],
            ['program_id' => 1, 'name' =>'HND Business Administration and Management'],
            ['program_id' => 3, 'name' =>'NDS Business Administration and Management'],
            ['program_id' => 5, 'name' =>'Diploma in Personnel Management'],
            ['program_id' => 5, 'name' =>'Diploma in Office Technology and management'],
            ['program_id' => 1, 'name' =>'HND Marketing'],
            ['program_id' => 2, 'name' =>'ND Marketing'],
            ['program_id' => 3, 'name' =>'NDS Marketing'],
            ['program_id' => 5, 'name' =>'PD Marketing'],
            ['program_id' => 1, 'name' =>'HND Public Administration'],
            ['program_id' => 2, 'name' =>'ND Public Administration'],
            ['program_id' => 3, 'name' =>'NDS Public Administration'],
            ['program_id' => 5, 'name' =>'PD Public Administration'],
            ['program_id' => 2, 'name' =>'ND Local Government'],
            ['program_id' => 1, 'name' =>'HND Accountancy'],
            ['program_id' => 2, 'name' =>'ND Accountancy'],
            ['program_id' => 3, 'name' =>'NDS Accountancy'],
            ['program_id' => 5, 'name' =>'PD Accountancy'],
            ['program_id' => 1, 'name' =>'HND Banking and Finance'],
            ['program_id' => 2, 'name' =>'ND Banking and Finance'],
            ['program_id' => 3, 'name' =>'NDS Banking and Finance'],
            ['program_id' => 5, 'name' =>'PD Banking and Finance'],
            ['program_id' => 1, 'name' =>'HND Mechanical Engineering (Production)'],
            ['program_id' => 1, 'name' =>'HND Mechanical Engineering (Power & Machine)'],
            ['program_id' => 2, 'name' =>'ND Mechanical Engineering'],
            ['program_id' => 3, 'name' =>'NDS Mechanical Engineering'],
            ['program_id' => 5, 'name' =>'Diploma in Mechanical Engineering'],
            ['program_id' => 1, 'name' =>'HND Metallurgical Engineering'],
            ['program_id' => 2, 'name' =>'ND Metallurgical Engineering'],
            ['program_id' => 3, 'name' =>'NDS Metallurgical Engineering'],
            ['program_id' => 1, 'name' =>'HND Electrical Engineering Technology(POWER AND MACHINE)'],
            ['program_id' => 1, 'name' =>'HND ELECTRICAL ENGINEERING (ELECT. AND TELECOMMUNICATIONS)'],
            ['program_id' => 2, 'name' =>'ND Electrical Engineering Technology'],
            ['program_id' => 3, 'name' =>'NDS Electrical Engineering Technology'],
            ['program_id' => 5, 'name' =>'Diploma Electrical Engineering'],
            ['program_id' => 1, 'name' =>'HND Agricultural Engineering (Farm Power Machinery)'],
            ['program_id' => 1, 'name' =>'HND Agricultural Engineering (Soil & Water Engineering)'],
            ['program_id' => 2, 'name' =>'ND Agricultural Engineering Technology'],
            ['program_id' => 3, 'name' =>'NDS Agricultural Engineering Technology'],
            ['program_id' => 2, 'name' =>'ND Agricultural Technology'],
            ['program_id' => 5, 'name' =>'Diploma in Agric Engineering'],
            ['program_id' => 1, 'name' =>'HND Civil Engineering Technology'],
            ['program_id' => 2, 'name' =>'ND Civil Engineering Technology'],
            ['program_id' => 3, 'name' =>'NDS Civil Engineering Technology'],
            ['program_id' => 5, 'name' =>'Diploma in Civil Engineering'],
            ['program_id' => 1, 'name' =>'HND Architectural Technology'],
            ['program_id' => 2, 'name' =>'ND Architectural Technology'],
            ['program_id' => 1, 'name' =>'HND Building Technology'],
            ['program_id' => 2, 'name' =>'ND Building Technology'],
            ['program_id' => 5, 'name' =>'Diploma in Building Technology'],
            ['program_id' => 1, 'name' =>'HND Urban and Regional Planning'],
            ['program_id' => 2, 'name' =>'ND Urban and Regional Planning'],
            ['program_id' => 3, 'name' =>'NDS Urban and Regional Planning'],
            ['program_id' => 1, 'name' =>'HND Urban and Regional Planning'],
            ['program_id' => 2, 'name' =>'ND Urban and Regional Planning'],
            ['program_id' => 1, 'name' =>'HND Quantity Surveying'],
            ['program_id' => 2, 'name' =>'ND Quantity Surveying'],
            ['program_id' => 3, 'name' =>'NDS Quantity Surveying'],
            ['program_id' => 5, 'name' =>'Diploma in Quantity Surveying'],
            ['program_id' => 1, 'name' =>'HND Estate Management'],
            ['program_id' => 2, 'name' =>'ND Estate Management'],
            ['program_id' => 3, 'name' =>'NDS Estate Management'],
            ['program_id' => 5, 'name' =>'Diploma in Estate Management'],
            ['program_id' => 1, 'name' =>'HND Surveying and Geo-Informatics'],
            ['program_id' => 2, 'name' =>'ND Surveying and Geo-Informatics'],
            ['program_id' => 3, 'name' =>'NDS Surveying and Geo-Informatics'],





        ];
        DB::table('courses')->insert($courses);

    }
}