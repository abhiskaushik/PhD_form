<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhdOtherDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phdother', function (Blueprint $table) {
            $table->integer('applNo')->unsigned();
            $table->string('score', 5)->nullable();
            $table->string('rank', 6)->nullable();
            $table->string('pgproject', 50)->nullable();
            $table->string('publications1', 50)->nullable();
            $table->string('publications2', 50)->nullable();
            $table->string('publications3', 50)->nullable();
            $table->string('awards1', 100)->nullable();
            $table->string('awards2', 100)->nullable();
            $table->string('awards3', 100)->nullable(); 
            $table->string('subdate', 10);           
            $table->timestamps();
        });

        Schema::table('phdother', function (Blueprint $table) {
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
        Schema::drop('phdother');
    }
}
