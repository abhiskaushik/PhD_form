<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegNoNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phd', function (Blueprint $table) {
            $table->string('registrationNumber', 25)->nullable()->change();
        });

        Schema::table('ms', function (Blueprint $table) {
            $table->string('registrationNumber', 25)->nullable()->change();
        });

        Schema::table('phdother', function(Blueprint $table) {
            $table->string('discipline', 10)->nullable();
            $table->string('exam', 10)->nullable();
            $table->string('validity', 20)->nullable();
        });

        Schema::create('msother', function(Blueprint $table) {
            $table->integer('applNo')->unsigned();
            $table->string('score', 5)->nullable();
            $table->string('rank', 6)->nullable();
            $table->string('discipline', 10)->nullable();
            $table->string('exam', 10)->nullable();
            $table->string('validity', 20)->nullable();
            $table->timestamps();
        });

        Schema::table('msother', function (Blueprint $table) {
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
        Schema::table('phd', function (Blueprint $table) {
            //
        });
    }
}
