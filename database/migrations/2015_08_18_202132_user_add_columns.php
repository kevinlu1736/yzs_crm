<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('tel');
            $table->date('birthday');
            $table->integer('pt')->unsigned();
            $table->string('company');
            $table->text('address');
            $table->integer('age')->unsigned();
            $table->char('gender', 4);
        });

        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('tel');
            $table->dropColumn('birthday');
            $table->dropColumn('pt');
            $table->dropColumn('company');
            $table->dropColumn('address');
            $table->dropColumn('age');
            $table->dropColumn('gender');

        });
    }
}
