<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhdPgDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phdpg', function (Blueprint $table) {
            $table->integer('applNo')->unsigned();
            $table->string('degreeName', 50);
            $table->string('branch', 50);
            $table->string('gpa', 5);
            $table->enum('class', ['Honours', 'Distinction', 'First', 'Second']);
            $table->string('institutionName', 50);
            $table->string('universityName', 50);
            $table->string('yop', 10);
            $table->timestamps();
        });

        Schema::table('phdpg', function (Blueprint $table) {
            $table->foreign('applNo')
                  ->references('applNo')
                  ->on('phd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phdpg');
    }
}
