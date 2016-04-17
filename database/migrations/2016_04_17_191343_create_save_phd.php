<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavePhd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savedphd', function (Blueprint $table) {
            $table->increments('applNo');
            $table->string('applicationCategory', 20)->nullabe();
            $table->string('registrationNumber', 25)->nullabe();
            $table->string('dateOfReg', 15)->nullabe();
            $table->string('imagePath', 50)->nullabe();
            $table->string('dept1', 50)->nullabe();
            $table->string('dept2', 50)->nullabe();
            $table->string('dept3', 50)->nullabe();
            $table->string('areaOfResearch', 50)->nullabe();
            $table->string('name', 50)->nullabe();
            $table->string('fatherName', 50)->nullabe();
            $table->string('dob', 10)->nullabe();
            $table->string('category', 5)->nullabe();
            $table->string('sex', 10)->nullabe();
            $table->string('maritalStatus', 10)->nullabe();
            $table->string('PH', 5)->nullabe();
            $table->string('nationality', 20)->nullabe();
            $table->string('addrforcomm', 150)->nullabe();
            $table->string('permanentaddr', 150)->nullabe();
            $table->string('email', 100)->nullabe();
            $table->bigInteger('mobile')->nullabe();
            $table->bigInteger('lanline')->nullabe();
            $table->string('proexp1', 150)->nullabe();
            $table->string('proexp2', 150)->nullabe();
            $table->string('proexp3', 150)->nullabe();
            $table->string('position1', 20)->nullabe();
            $table->string('position2', 20)->nullabe();
            $table->string('position3', 20)->nullabe();
            $table->string('from1', 20)->nullabe();
            $table->string('from2', 20)->nullabe();
            $table->string('from3', 20)->nullabe();
            $table->string('to1', 20)->nullabe();
            $table->string('to2', 20)->nullabe();
            $table->string('to3', 20)->nullabe();
            $table->string('ugdegreeName', 50)->nullabe();
            $table->string('ugbranch', 50)->nullabe();
            $table->string('uggpa', 5)->nullabe();
            $table->enum('ugclass', ['Honours', 'Distinction', 'First', 'Second'])->nullabe();
            $table->string('uginstitutionName', 50)->nullabe();
            $table->string('uguniversityName', 50)->nullabe();
            $table->string('ugyop', 10)->nullabe();
            $table->string('pgdegreeName', 50)->nullabe();
            $table->string('pgbranch', 50)->nullabe();
            $table->string('pggpa', 5)->nullabe();
            $table->enum('pgclass', ['Honours', 'Distinction', 'First', 'Second'])->nullabe();
            $table->string('pginstitutionName', 50)->nullabe();
            $table->string('pguniversityName', 50)->nullabe();
            $table->string('pgyop', 10)->nullabe();
            $table->string('score', 5)->nullable();
            $table->string('rank', 6)->nullable();
            $table->string('pgproject', 50)->nullable();
            $table->string('publications1', 50)->nullable();
            $table->string('publications2', 50)->nullable();
            $table->string('publications3', 50)->nullable();
            $table->string('awards1', 100)->nullable();
            $table->string('awards2', 100)->nullable();
            $table->string('awards3', 100)->nullable(); 
            $table->string('subdate', 10)->nullable();
            $table->string('discipline', 10);
            $table->string('exam', 10);
            $table->string('validity', 5);
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
        Schema::drop('savedphd');
    }
}
