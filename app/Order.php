<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $fillable = [
					'cart_nonUnique',
        	'order_status',
	        'order_customer_city',
					'order_customer_state',
					'order_customer_phone',
					'order_customer_billing_address',
					'order_customer_delivery_address',
	        
    ];

}
