<?php

use App\Models\Course;
use App\Models\Department;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('program_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone_no')->unique();
            $table->string('password');
            $table->date('birthday')->nullable();
            $table->string('verify_password');
            $table->string('file')->nullable()->default('default/default.jpg');
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('lga_id')->nullable();
            $table->string('home_address')->nullable();
            $table->string('cor_address')->nullable();
            $table->string('home_town')->nullable();
            $table->string('sponsor')->nullable();
            $table->string('kin_name')->nullable();
            $table->string('kin_gsm')->nullable();
            $table->integer('kin_address')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('course_id')->nullable();

            $table->string('remark')->nullable();
            $table->string('recommendation')->nullable();
            $table->string('comment')->nullable();
            $table->rememberToken();
            $table->timestamps();


        });
        // Schema::rename('users', 'student_tb');


    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
