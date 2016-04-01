    <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePgDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pgdetails', function (Blueprint $table) {
            $table->integer('registrationNumber')->unsigned();
            $table->string('degreeName', 50);
            $table->string('branch', 50);
            $table->float('percenatge');
            $table->enum('class', ['Honours', 'Distinction', 'First', 'Second']);
            $table->string('institutionName', 50);
            $table->string('universityName', 50);
            $table->string('yop', 10);
            $table->timestamps();
        });

        Schema::table('pgdetails', function (Blueprint $table) {
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
        Schema::drop('pgdetails');
    }
}
