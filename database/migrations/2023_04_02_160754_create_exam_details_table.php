<?php

use App\Models\User;
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
        Schema::create('exam_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('ssce_certificate1');
            $table->string('exam_number1')->unique();
            $table->year('exam_year1',4);
            $table->string('ssce_certificate2')->nullable();
            $table->string('exam_number2')->unique()->nullable();
            $table->year('exam_year2',4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_details');
    }
};