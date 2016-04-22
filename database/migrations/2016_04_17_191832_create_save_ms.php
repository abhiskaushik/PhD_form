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
            $table->string('applicationCategory', 20)->default('');
            $table->string('registrationNumber', 25)->default('');
            $table->string('chalanNo', 30)->default('');
            $table->string('dateOfReg', 15)->default('');
            $table->string('imagePath', 50)->default('');
            $table->string('dept1', 50)->default('');
            $table->string('dept2', 50)->default('');
            $table->string('dept3', 50)->default('');
            $table->string('areaOfResearch', 50)->default('');
            $table->string('name', 50)->default('');
            $table->string('fatherName', 50)->default('');
            $table->string('dob', 10)->default('');
            $table->string('category', 5)->nullable();
            $table->string('sex', 10)->nullable();
            $table->string('maritalStatus', 10)->nullable();
            $table->string('PH', 5)->nullable();
            $table->string('nationality', 20)->default('');
            $table->string('addrforcomm', 150)->default('');
            $table->string('permanentaddr', 150)->default('');
            $table->string('email', 100)->default('');
            $table->bigInteger('mobile')->default(7000000000);
            $table->bigInteger('lanline')->default(7000000000);
            $table->string('age', 3)->default('');
            $table->string('ugdegreeName', 50)->default('');
            $table->string('ugbranch', 50)->default('');
            $table->string('uggpa', 5)->default('');
            $table->string('ugclass', 10)->nullable();
            $table->string('uginstitutionName', 50)->default('');
            $table->string('uguniversityName', 50)->default('');
            $table->string('ugyop', 10)->default('');
            $table->string('gpamax1', 6)->default('');
            $table->string('gpa1', 6)->default('');
            $table->string('gpamax2', 6)->default('');
            $table->string('gpa2', 6)->default('');
            $table->string('gpamax3', 6)->default('');
            $table->string('gpa3', 6)->default('');
            $table->string('gpamax4', 6)->default('');
            $table->string('gpa4', 6)->default('');
            $table->string('gpamax5', 6)->default('');
            $table->string('gpa5', 6)->default('');
            $table->string('gpamax6', 6)->default('');
            $table->string('gpa6', 6)->default('');
            $table->string('gpamax7', 6)->default('');
            $table->string('gpa7', 6)->default('');
            $table->string('gpamax8', 6)->default('');
            $table->string('gpa8', 6)->default('');
            $table->string('proexp1', 150)->default('');
            $table->string('proexp2', 150)->default('');
            $table->string('proexp3', 150)->default('');
            $table->string('position1', 20)->default('');
            $table->string('position2', 20)->default('');
            $table->string('position3', 20)->default('');
            $table->string('from1', 20)->default('');
            $table->string('from2', 20)->default('');
            $table->string('from3', 20)->default('');
            $table->string('to1', 20)->default('');
            $table->string('to2', 20)->default('');
            $table->string('to3', 20)->default('');
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
