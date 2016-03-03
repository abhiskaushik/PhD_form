<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otherdetails', function (Blueprint $table) {
            $table->integer('registrationNumber');
            $table->string('score', 5);
            $table->string('pgproject', 50);
            $table->string('publications', 50);
            $table->string('awards', 100);
            $table->string('proexp', 150); 
            $table->string('subdate', 10);           
            $table->timestamps();
        });

        Schema::table('otherdetails', function (Blueprint $table) {
            $table->foreign('registrationNumber')
                  ->references('registrationNumber')
                  ->on('candidates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('otherdetails');
    }
}
