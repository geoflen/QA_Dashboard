<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('auditors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone_number');
            $table->text('organization');
            $table->string('email');
            $table->string('designation');

            $table->timestamps();
        });

        Schema::create('auditor_certifications', function (Blueprint $table) {
            $table->increments('id');
            //TODO cross check relationship type should it be unique?
            $table->integer('certification_id')->unsigned();
            $table->integer('auditor_id')->unsigned();


            $table->foreign('certification_id')->references('id')->on('certifications');
            $table->foreign('auditor_id')->references('id')->on('auditors');

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
        Schema::dropIfExists('certifications');
        Schema::dropIfExists('auditors');
        Schema::dropIfExists('auditor_certifications');
    }
}


