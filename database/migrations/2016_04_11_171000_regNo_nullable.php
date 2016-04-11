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

        Schema::table('phdother', function(Blueprint $table) {
            $table->string('discipline', 10);
            $table->string('exam', 10);
            $table->string('validity', 5);
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
