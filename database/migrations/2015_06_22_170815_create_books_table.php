<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
						$table->increments('book_id');
            $table->integer('category_id')->unsigned();
            $table->integer('admin_id')->unsigned();
            $table->string('book_name');
            $table->text('book_contents');
            $table->string('book_ISBN');
						$table->string('book_author');
						$table->string('book_price');
						$table->string('book_publisher');
						$table->string('book_image_path');
            $table->timestamp('book_date_published');
            $table->string('book_quantity');
            $table->text('book_description');
            $table->timestamps();
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}
