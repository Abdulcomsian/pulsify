<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsHasEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_has_educations', function (Blueprint $table) {
            $table->id();
            $table->string('college_name');
            $table->string('degree');
            $table->string('from_year');
            $table->string('to_year');
            $table->unsignedBigInteger('doctor_detail_id')->nullable();
            $table->foreign('doctor_detail_id')->references('id')->on('doctor_details');
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
        Schema::dropIfExists('doctors_has_educations');
    }
}
