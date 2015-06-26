<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('order_id');
      $table->integer('cart_nonUnique')->unsigned();
      $table->integer('order_status');
			$table->string('order_customer_city');
      $table->string('order_customer_state');
      $table->string('order_customer_phone');
      $table->string('order_customer_billing_address');
      $table->string('order_customer_delivery_address');
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
		Schema::drop('orders');
	}

}
