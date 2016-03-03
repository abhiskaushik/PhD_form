<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->string('applicationCategory', 20);
            $table->integer('registrationNumber');
            $table->string('dept', 50);
            $table->string('areaOfResearch', 50);
            $table->string('name', 50);
            $table->string('fatherName', 50);
            $table->string('dob', 10);
            $table->string('category', 5);
            $table->string('sex', 10);
            $table->string('maritalStatus', 10);
            $table->string('PH', 5);
            $table->string('nationality', 20);
            $table->string('addrforcomm', 150);
            $table->string('permanentaddr', 150);
            $table->primary('registrationNumber');
            $table->unique('registrationNumber');
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
        Schema::drop('candidates');
    }
}
