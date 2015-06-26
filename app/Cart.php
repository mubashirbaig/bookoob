<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

	protected $fillable = [
        	'cart_quantity',
	        'cart_isChecked',
					'cart_nonUnique',
					'book_id',
					'user_id',
				
    ];

}
