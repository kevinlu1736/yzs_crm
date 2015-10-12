<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->timestamps();
            //
        });

        Schema::create('order_dish', function (Blueprint $table){
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade');
            $table->integer('dish_id')->unsigned();
            $table->foreign('dish_id')
                  ->references('id')
                  ->on('dishes')
                  ->onDelete('cascade');
            $table->timestamps();

            $table->primary(['order_id', 'dish_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_dish');
        Schema::drop('orders');
    }
}
