<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_id')->unique();
            $table->unsignedBigInteger('student_id');
            $table->string('amount');
            $table->string('date');
            $table->string('status')->nullable();
            $table->string('use_status')->nullable();
            $table->string('resource')->nullable();
            $table->string('RRR')->unique()->nullable();
            $table->integer('code')->default(0);
            $table->timestamps();


            $table->foreign('student_id')->references('id')->on('student_tb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
};