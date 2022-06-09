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
             $table->string('bedside_manner_rating')->nullable();
            $table->string('knowledge_rating')->nullable();
            $table->string('punctuality_rating')->nullable();
            $table->string('scheduling_rating')->nullable();
            $table->string('treatment_rating')->nullable();
            $table->unsignedBigInteger('doctor_detail_id')->nullable();
            $table->foreign('doctor_detail_id')->references('id')->on('doctor_details');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
