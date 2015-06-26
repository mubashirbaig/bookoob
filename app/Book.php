<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	/**
     * Fillable fields
     * 
     * @var array
     */
	

	protected $fillable = [
        	'book_name',
	        'book_contents',
	        'book_ISBN',
	        'book_date_published', 
	        'book_quantity',
	        'book_description',
    ];

}
