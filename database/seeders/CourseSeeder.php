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
            ['program_id' => 2, 'department_id' => 1,'name' =>'ND Business Administration and Management'],
            ['program_id' => 1,'department_id' => 1, 'name' =>'HND Business Administration and Management'],
            ['program_id' => 3, 'department_id' => 1,'name' =>'NDS Business Administration and Management'],
            ['program_id' => 5, 'department_id' => 1,'name' =>'Diploma in Personnel Management'],
            ['program_id' => 5, 'department_id' => 1,'name' =>'Diploma in Office Technology and management'],
            ['program_id' => 1,'department_id' => 2, 'name' =>'HND Marketing'],
            ['program_id' => 2, 'department_id' => 2,'name' =>'ND Marketing'],
            ['program_id' => 3,'department_id' => 2, 'name' =>'NDS Marketing'],
            ['program_id' => 5,'department_id' => 3, 'name' =>'PD Marketing'],
            ['program_id' => 1,'department_id' => 3, 'name' =>'HND Public Administration'],
            ['program_id' => 2,'department_id' => 3, 'name' =>'ND Public Administration'],
            ['program_id' => 3, 'department_id' => 3,'name' =>'NDS Public Administration'],
            ['program_id' => 5,'department_id' => 3, 'name' =>'PD Public Administration'],
            ['program_id' => 2,'department_id' => 4, 'name' =>'ND Local Government'],
            ['program_id' => 5,'department_id' => 4, 'name' =>'Diploma Local Government'],
            ['program_id' => 2,'department_id' => 4, 'name' =>'ND Local Government'],
            ['program_id' => 1,'department_id' => 5, 'name' =>'HND Accountancy'],
            ['program_id' => 2, 'department_id' => 5,'name' =>'ND Accountancy'],
            ['program_id' => 3, 'department_id' => 5,'name' =>'NDS Accountancy'],
            ['program_id' => 5, 'department_id' => 5,'name' =>'PD Accountancy'],
            ['program_id' => 1, 'department_id' => 6,'name' =>'HND Banking and Finance'],
            ['program_id' => 2, 'department_id' => 6, 'department_id' => 6, 'name' =>'ND Banking and Finance'],
            ['program_id' => 3, 'department_id' => 6, 'name' =>'NDS Banking and Finance'],
            ['program_id' => 5, 'department_id' => 6, 'name' =>'PD Banking and Finance'],
            ['program_id' => 1,  'department_id' => 7,'name' =>'HND Mechanical Engineering (Production)'],
            ['program_id' => 1,'department_id' => 7, 'name' =>'HND Mechanical Engineering (Power & Machine)'],
            ['program_id' => 2,'department_id' => 7, 'name' =>'ND Mechanical Engineering'],
            ['program_id' => 3,'department_id' => 7, 'name' =>'NDS Mechanical Engineering'],
            ['program_id' => 5, 'department_id' => 7,'name' =>'Diploma in Mechanical Engineering'],
            ['program_id' => 1,'department_id' => 8, 'name' =>'HND Metallurgical Engineering'],
            ['program_id' => 2, 'department_id' => 8,'name' =>'ND Metallurgical Engineering'],
            ['program_id' => 3, 'department_id' => 8,'name' =>'NDS Metallurgical Engineering'],
            ['program_id' => 1, 'department_id' => 9,'name' =>'HND Electrical Engineering Technology(POWER AND MACHINE)'],
            ['program_id' => 1,'department_id' => 9, 'name' =>'HND ELECTRICAL ENGINEERING (ELECT. AND TELECOMMUNICATIONS)'],
            ['program_id' => 2, 'department_id' => 9,'name' =>'ND Electrical Engineering Technology'],
            ['program_id' => 3,'department_id' => 9, 'name' =>'NDS Electrical Engineering Technology'],
            ['program_id' => 5, 'department_id' => 9,'name' =>'Diploma Electrical Engineering'],
            ['program_id' => 1,'department_id' => 10, 'name' =>'HND Agricultural Engineering (Farm Power Machinery)'],
            ['program_id' => 1,'department_id' => 10, 'name' =>'HND Agricultural Engineering (Soil & Water Engineering)'],
            ['program_id' => 2, 'department_id' => 10,'name' =>'ND Agricultural Engineering Technology'],
            ['program_id' => 3, 'department_id' => 10,'name' =>'NDS Agricultural Engineering Technology'],
            ['program_id' => 2, 'department_id' => 10,'name' =>'ND Agricultural Technology'],
            ['program_id' => 5, 'department_id' => 10,'name' =>'Diploma in Agric Engineering'],
            ['program_id' => 1, 'department_id' => 11,'name' =>'HND Civil Engineering Technology'],
            ['program_id' => 2, 'department_id' => 11,'name' =>'ND Civil Engineering Technology'],
            ['program_id' => 3, 'department_id' => 11,'name' =>'NDS Civil Engineering Technology'],
            ['program_id' => 5, 'department_id' => 11,'name' =>'Diploma in Civil Engineering'],
            ['program_id' => 1,'department_id' => 12, 'name' =>'HND Architectural Technology'],
            ['program_id' => 2,'department_id' => 12, 'name' =>'ND Architectural Technology'],
            ['program_id' => 3,'department_id' => 12, 'name' =>'NDS Architectural Technology'],
            ['program_id' => 5,'department_id' => 12, 'name' =>'Diploma Architectural Technology'],
            ['program_id' => 1,'department_id' => 13, 'name' =>'HND Building Technology'],
            ['program_id' => 2,'department_id' => 13, 'name' =>'ND Building Technology'],
            ['program_id' => 5,'department_id' => 13, 'name' =>'Diploma in Building Technology'],
            ['program_id' => 1,'department_id' => 14, 'name' =>'HND Urban and Regional Planning'],
            ['program_id' => 2,'department_id' => 14, 'name' =>'ND Urban and Regional Planning'],
            ['program_id' => 3, 'department_id' => 14,'name' =>'NDS Urban and Regional Planning'],
            ['program_id' => 1,'department_id' => 14, 'name' =>'HND Urban and Regional Planning'],
            ['program_id' => 1, 'department_id' => 15,'name' =>'HND Quantity Surveying'],
            ['program_id' => 2, 'department_id' => 15, 'name' =>'ND Quantity Surveying'],
            ['program_id' => 3,  'department_id' => 15,'name' =>'NDS Quantity Surveying'],
            ['program_id' => 5, 'department_id' => 15, 'name' =>'Diploma in Quantity Surveying'],
            ['program_id' => 1,  'department_id' => 16,'name' =>'HND Estate Management'],
            ['program_id' => 2, 'department_id' => 16, 'name' =>'ND Estate Management'],
            ['program_id' => 3,  'department_id' => 16,'name' =>'NDS Estate Management'],
            ['program_id' => 5, 'department_id' => 16, 'name' =>'Diploma in Estate Management'],
            ['program_id' => 1, 'department_id' => 17, 'name' =>'HND Surveying and Geo-Informatics'],
            ['program_id' => 2,  'department_id' => 17,'name' =>'ND Surveying and Geo-Informatics'],
            ['program_id' => 3,  'department_id' => 17,'name' =>'NDS Surveying and Geo-Informatics'],
            ['program_id' => 4,  'department_id' => 18,'name' =>'Industrial Education(NCE)'],
            ['program_id' => 4,  'department_id' => 19,'name' =>'Business Education(NCE)'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'COMPUTER EDUCATION/BIOLOGY'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'COMPUTER EDUCATION/CHEMISTRY'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'COMPUTER EDUCATION/PHYSICS'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'COMPUTER EDUCATION/MATHEMATICS'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'COMPUTER EDUCATION/INTEGRATED SCIENCE'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'MATHEMATICS/ BIOLOGY'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'MATHEMATICS /CHEMISTRY'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'MATHEMATICS /PHYSICS'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'MATHEMATICS/ INTEGRATED SCIENCE'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'INTEGRATED SCIENCE/ BIOLOGY'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'INTEGRATED SCIENCE/CHEMISTRY'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'INTEGRATED SCIENCE/ PHYSICS'],
            ['program_id' => 4,  'department_id' => 25,'name' =>'INTEGRATED SCIENCE(DOUBLE MAJOR)'],
            ['program_id' => 1,  'department_id' => 20,'name' =>'HND Computer Science'],
            ['program_id' => 2,  'department_id' => 20,'name' =>'ND Computer Science'],
            ['program_id' => 3,  'department_id' => 20,'name' =>'NDS Computer Science'],
            ['program_id' => 1,  'department_id' => 21,'name' =>'HND Statistics'],
            ['program_id' => 2,  'department_id' => 21,'name' =>'ND Statistics'],
            ['program_id' => 3,  'department_id' => 21,'name' =>'HND Statistics'],
            ['program_id' => 5,  'department_id' => 21,'name' =>'PD Statistics'],
            ['program_id' => 1,  'department_id' => 22,'name' =>'HND SLT Physics with Electronics'],
            ['program_id' => 1,  'department_id' => 22,'name' =>'HND SLT Microbiology/Biochemistry'],
            ['program_id' => 1,  'department_id' => 22,'name' =>'HND SLT Chemistry'],
            ['program_id' => 1,  'department_id' => 22,'name' =>'HND SLT(BIOLOGY/MICROBIOLOGY)'],
            ['program_id' => 1,  'department_id' => 22,'name' =>'HND MICROBIOLOGY OPTION'],
            ['program_id' => 2,  'department_id' => 22,'name' =>'ND Science Laboratory Technology'],
            ['program_id' => 2,  'department_id' => 23,'name' =>'ND Social Development'],
            ['program_id' => 3,  'department_id' => 23,'name' =>'NDS Social Development'],
            ['program_id' => 5,  'department_id' => 23,'name' =>'PD Social Development'],
            ['program_id' => 5,  'department_id' => 24,'name' =>'Diploma Sharia and Civil Law'],
            ['program_id' => 5,  'department_id' => 26,'name' =>'Diploma Mass Communication'],
            ['program_id' => 2,  'department_id' => 27,'name' =>'ND Library and Information Science'],

        ];
        DB::table('courses')->insert($courses);

    }
}