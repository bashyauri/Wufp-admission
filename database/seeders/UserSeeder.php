<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_tb')->insert([
            'id' => 1,
            'program_id' => 1,
            'first_name' => 'admin',
            'last_name' => 'admin',
            'file' => 'team-1.jpg',
            'email' => 'admin@softui.com',
            'phone_no' => '08029991710',
            'password' => Hash::make('secret'),
            'verify_password' => 'secret',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('student_tb')->insert([
            'id' => 2,
            'program_id' => 2,
            'first_name' => 'creator',
            'last_name' => 'creator',
            'file' => 'team-2.jpg',
            'email' => 'creator@softui.com',
            'phone_no' => '09038272560',
            'password' => Hash::make('secret'),
            'verify_password' => 'secret',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('student_tb')->insert([
            'id' => 3,
            'program_id' => 3,
            'first_name' => 'Bashar',
            'last_name' => 'Umar',
            'file' => 'team-3.jpg',
            'email' => 'member@softui.com',
            'phone_no' => '08038272560',
            'password' => Hash::make('secret'),
            'verify_password' => 'secret',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}