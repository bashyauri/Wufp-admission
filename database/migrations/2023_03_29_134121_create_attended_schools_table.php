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
        Schema::create('attended_schools', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('primary_school_name');
            $table->string('secondary_school_name');
            $table->string('tertiary_school_name')->nullable();
            $table->year('primary_year',4);
            $table->year('secondary_school_year',4);
            $table->year('tertiary_school_year',4)->nullable();
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
        Schema::dropIfExists('attended_schools');
    }
};