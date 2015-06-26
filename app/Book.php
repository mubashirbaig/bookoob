<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	protected $fillable = [
        	'book_name',
	        'book_contents',
	        'book_ISBN',
	        'book_date_published',
	        'book_quantity',
	        'book_description',
	        'book_image_path',
	        'book_author',
	        'book_price',
					'book_publisher',
	        'category_id',
	       	'admin_id',
    ];

}
