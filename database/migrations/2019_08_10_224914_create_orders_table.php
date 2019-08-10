<?php

use Illuminate\Support\Facades\Schema;
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
          $table->bigIncrements('id');
           $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
           $table->unsignedBigInteger('product_id');
          $table->foreign('product_id')->references('id')->on('products');
          $table->integer('quantity');
          $table->decimal('unit_price', 8, 2);
          $table->decimal('total', 8, 2);
          $table->dateTime('order_date');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
