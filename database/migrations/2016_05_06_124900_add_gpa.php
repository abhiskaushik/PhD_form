<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGpa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phdug', function (Blueprint $table) {
            $table->string('gpa', 15);
        });

        Schema::table('phdpg', function (Blueprint $table) {
            $table->string('gpa', 15);
        });

        Schema::table('msug', function (Blueprint $table) {
            $table->string('gpa', 15);
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
    }
}
