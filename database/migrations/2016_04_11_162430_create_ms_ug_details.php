<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsUgDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msug', function (Blueprint $table) {
            $table->string('registrationNumber', 25);
            $table->string('degreeName', 50);
            $table->string('branch', 50);
            $table->string('gpa', 5);
            $table->enum('class', ['Honours', 'Distinction', 'First', 'Second']);
            $table->string('institutionName', 50);
            $table->string('universityName', 50);
            $table->string('yop', 10);
            $table->timestamps();
        });

        Schema::table('msug', function (Blueprint $table) {
            $table->foreign('registrationNumber')
                  ->references('registrationNumber')
                  ->on('ms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('msug');
    }
}
