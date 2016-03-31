<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDdDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dddetails', function (Blueprint $table) {
            $table->integer('registrationNumber');
            $table->bigInteger('ddno');            
            $table->string('date', 10);
            $table->integer('amount');
            $table->string('drawnAt', 10);
            $table->timestamps();
        });

        Schema::table('dddetails', function (Blueprint $table) {
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
        Schema::drop('dddetails');
    }
}
