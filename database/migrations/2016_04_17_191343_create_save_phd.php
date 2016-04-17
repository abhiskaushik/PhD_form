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
            $table->string('applicationCategory', 20)->nullable();
            $table->string('registrationNumber', 25)->nullable();
            $table->string('dateOfReg', 15)->nullable();
            $table->string('imagePath', 50)->nullable();
            $table->string('dept1', 50)->nullable();
            $table->string('dept2', 50)->nullable();
            $table->string('dept3', 50)->nullable();
            $table->string('areaOfResearch', 50)->nullable();
            $table->string('name', 50)->nullable();
            $table->string('fatherName', 50)->nullable();
            $table->string('dob', 10)->nullable();
            $table->string('category', 5)->nullable();
            $table->string('sex', 10)->nullable();
            $table->string('maritalStatus', 10)->nullable();
            $table->string('PH', 5)->nullable();
            $table->string('nationality', 20)->nullable();
            $table->string('addrforcomm', 150)->nullable();
            $table->string('permanentaddr', 150)->nullable();
            $table->string('email', 100)->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->bigInteger('lanline')->nullable();
            $table->string('proexp1', 150)->nullable();
            $table->string('proexp2', 150)->nullable();
            $table->string('proexp3', 150)->nullable();
            $table->string('position1', 20)->nullable();
            $table->string('position2', 20)->nullable();
            $table->string('position3', 20)->nullable();
            $table->string('from1', 20)->nullable();
            $table->string('from2', 20)->nullable();
            $table->string('from3', 20)->nullable();
            $table->string('to1', 20)->nullable();
            $table->string('to2', 20)->nullable();
            $table->string('to3', 20)->nullable();
            $table->string('ugdegreeName', 50)->nullable();
            $table->string('ugbranch', 50)->nullable();
            $table->string('uggpa', 5)->nullable();
            $table->enum('ugclass', ['Honours', 'Distinction', 'First', 'Second'])->nullable();
            $table->string('uginstitutionName', 50)->nullable();
            $table->string('uguniversityName', 50)->nullable();
            $table->string('ugyop', 10)->nullable();
            $table->string('pgdegreeName', 50)->nullable();
            $table->string('pgbranch', 50)->nullable();
            $table->string('pggpa', 5)->nullable();
            $table->enum('pgclass', ['Honours', 'Distinction', 'First', 'Second'])->nullable();
            $table->string('pginstitutionName', 50)->nullable();
            $table->string('pguniversityName', 50)->nullable();
            $table->string('pgyop', 10)->nullable();
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
