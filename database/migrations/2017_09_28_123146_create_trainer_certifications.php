<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainerCertifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::create('trainers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone_number');
            $table->text('organization');
            $table->string('email');
            $table->string('designation');

            $table->timestamps();
        });
        Schema::create('trainer_certifications', function (Blueprint $table) {
            $table->increments('id');
            //TODO cross check relationship type should it be unique?
            $table->integer('certification_id')->unsigned();
            $table->integer('trainer_id')->unsigned();


            $table->foreign('certification_id')->references('id')->on('certifications');
            $table->foreign('trainer_id')->references('id')->on('trainers');

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
        //
        Schema::dropIfExists('trainers');
        Schema::dropIfExists('trainer_certifications');
    }
}




