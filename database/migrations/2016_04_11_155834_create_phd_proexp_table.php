<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhdProexpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phdProexp', function (Blueprint $table) {
            $table->integer('applNo')->unsigned();
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

        Schema::table('phdProexp', function (Blueprint $table) {
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
        Schema::drop('phdProexp');
    }
}
