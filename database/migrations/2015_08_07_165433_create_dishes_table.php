<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateDishesTable
 */
class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Create dishes table.
         */
        Schema::create('dishes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string("name");
            $table->unsignedInteger("price");
            $table->text("ingredients");
            $table->longText("steps");
            $table->string('inventor_id');
            $table->string('modified_by');
            $table->timestamps();

            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
            //
    }
}
