<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            UserSeeder::class,
            TagsSeeder::class,
            CategorySeeder::class,
            ItemsManagementSeeder::class,
            ItemTagsSeeder::class,
            DepartmentSeeder::class,
            ProgramSeeder::class,
            DepartmentProgramSeeder::class,
            CourseSeeder::class
        ]);
    }
}