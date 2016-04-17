<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaveMs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savedms', function (Blueprint $table) {
            $table->increments('applNo');
            $table->string('applicationCategory', 20);
            $table->string('registrationNumber', 25);
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
            $table->string('nationality', 20);
            $table->string('addrforcomm', 150);
            $table->string('permanentaddr', 150);
            $table->string('email', 100);
            $table->bigInteger('mobile');
            $table->bigInteger('lanline');
            $table->string('ugdegreeName', 50);
            $table->string('ugbranch', 50);
            $table->string('uggpa', 5);
            $table->enum('ugclass', ['Honours', 'Distinction', 'First', 'Second']);
            $table->string('uginstitutionName', 50);
            $table->string('uguniversityName', 50);
            $table->string('ugyop', 10);
            $table->string('gpamax1', 6);
            $table->string('gpa1', 6);
            $table->string('gpamax2', 6);
            $table->string('gpa2', 6);
            $table->string('gpamax3', 6);
            $table->string('gpa3', 6);
            $table->string('gpamax4', 6);
            $table->string('gpa4', 6);
            $table->string('gpamax5', 6);
            $table->string('gpa5', 6);
            $table->string('gpamax6', 6);
            $table->string('gpa6', 6);
            $table->string('gpamax7', 6);
            $table->string('gpa7', 6);
            $table->string('gpamax8', 6);
            $table->string('gpa8', 6);
            $table->string('proexp1', 150);
            $table->string('proexp2', 150);
            $table->string('proexp3', 150);
            $table->string('position1', 20);
            $table->string('position2', 20);
            $table->string('position3', 20);
            $table->string('from1', 20);
            $table->string('from2', 20);
            $table->string('from3', 20);
            $table->string('to1', 20);
            $table->string('to2', 20);
            $table->string('to3', 20);
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
        Schema::drop('savedms');
    }
}
