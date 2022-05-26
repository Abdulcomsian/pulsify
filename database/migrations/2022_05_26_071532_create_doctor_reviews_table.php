<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('review')->nullable();
            $table->string('overall_rating')->nullable();
             $table->string('cleanliness_rating')->nullable();
            $table->string('medical_staff_rating')->nullable();
            $table->string('reception_rating')->nullable();
            $table->string('helpfullness_rating')->nullable();
            $table->string('communication_rating')->nullable();
            $table->unsignedBigInteger('doctor_detail_id')->nullable();
            $table->foreign('doctor_detail_id')->references('id')->on('doctor_details');
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
        Schema::dropIfExists('doctor_reviews');
    }
}
