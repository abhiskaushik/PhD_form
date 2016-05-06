<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeGpaLength extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phdug', function (Blueprint $table) {
            $table->dropColumn('gpa');
            // $table->string('gpa', 15);
        });

        Schema::table('phdpg', function (Blueprint $table) {
            $table->dropColumn('gpa');
            // $table->string('gpa', 15);
        });

        Schema::table('msug', function (Blueprint $table) {
            $table->dropColumn('gpa');
            // $table->string('gpa', 15);
        });

        Schema::table('savedphd', function (Blueprint $table) {
            $table->string('uggpa', 15)->change();
            $table->string('pggpa', 15)->change();
        });

        Schema::table('savedms', function (Blueprint $table) {
            $table->string('uggpa', 15)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     Schema::table('phdug', function (Blueprint $table) {
    //         //
    //     });
    // }
}
