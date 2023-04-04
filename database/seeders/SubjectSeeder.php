<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $subjects = [
            ['name' => 'English Language'],
            ['name' => 'Mathematics'],
            ['name' => 'Further Mathematics'],
            ['name' => 'Biology'],
            ['name' => 'Agricultural Science'],
            ['name' => 'Chemistry'],
            ['name' => 'Physics'],
            ['name' => 'Geography'],
            ['name' => 'Technical Drawing'],
            ['name' => 'Literature in English'],
            ['name' => 'Fine Art'],
            ['name' => ' Music'],
            ['name' => 'French'],
            ['name' => 'Religious Knowledge'],
            ['name' => 'Commerce'],
            ['name' => 'Economics'],
            ['name' => 'Government'],
            ['name' => 'History'],
            ['name' => 'Principles of Accounts'],
            ['name' => 'Business Methods'],
            ['name' => 'Office Practice'],
            ['name' => 'Typewriting'],
            ['name' => 'Shorthand'],
            ['name' => 'Food and Nutrition'],
            ['name' => 'Basic Electricity'],
            ['name' => 'Metalwork'],
            ['name' => 'Auto Mechanics'],
            ['name' => 'Home Economics'],
            ['name' => 'General Woodwork'],
            ['name' => 'Islamic studies'],
            ['name' => 'Computer Studies'],
            ['name' => 'Information Communication Tech'],
            ['name' => 'Hausa Language'],
            ['name' => 'Ibo Language'],
            ['name' => 'Yoruba Language'],
            ['name' => 'Marketing'],
            ['name' => 'Civic Education'],
            ['name' => 'Financial Accounting'],
            ['name' => 'Building/eng. Drawing'],
            ['name' => 'Arc and Gas Weiding'],
            ['name' => 'Bricklaying and Blocklaying'],
            ['name' => 'Walls, Floors and Cetling Finishing'],
            ['name' => 'Animal Husbandry'],
        ];
        Subject::insert($subjects);
    }
}