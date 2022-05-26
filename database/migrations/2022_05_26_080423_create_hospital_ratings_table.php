<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('review')->nullable();
            $table->string('overall_rating')->nullable();
            $table->string('cleanliness_rating')->nullable();
            $table->string('medical_staff_rating')->nullable();
            $table->string('reception_rating')->nullable();
            $table->string('helpfullness_rating')->nullable();
            $table->string('communication_rating')->nullable();
            $table->unsignedBigInteger('hospital_id')->nullable();
            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->tinyinteger('status')->default(1);
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
        Schema::dropIfExists('hospital_ratings');
    }
}
