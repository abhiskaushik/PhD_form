<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsCandidates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms', function (Blueprint $table) {
            $table->increments('applNo');
            $table->string('applicationCategory', 20);
            $table->string('registrationNumber', 25);
            $table->string('chalanNo', 30);
            $table->string('dateOfReg', 15);
            $table->string('imagePath', 50);
            $table->string('dept1', 50);
            $table->string('dept2', 50);
            $table->string('dept3', 50);
            $table->string('areaOfResearch', 50);
            $table->string('name', 50);
            $table->string('fatherName', 50);
            $table->string('dob', 10);
            $table->string('category', 5);
            $table->string('sex', 10);
            $table->string('maritalStatus', 10);
            $table->string('PH', 5);
            $table->string('age', 3);
            $table->string('nationality', 20);
            $table->string('addrforcomm', 150);
            $table->string('permanentaddr', 150);
            $table->string('email', 100);
            $table->bigInteger('mobile');
            $table->bigInteger('lanline');
            $table->boolean('deleted')->default(false);
            $table->boolean('accepted')->default(false);
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
        Schema::drop('ms');
    }
}
