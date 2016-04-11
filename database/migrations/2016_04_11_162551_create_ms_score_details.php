<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsScoreDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msSemScore', function (Blueprint $table) {
            $table->integer('applNo')->unsigned();
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
        });

        Schema::table('msSemScore', function (Blueprint $table) {
            $table->foreign('applNo')
                  ->references('applNo')
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
        Schema::drop('msSemScore');
    }
}
