<?php

namespace App\Models;



class OrderItems extends RModel
{
    protected $table = 'order_items';

    protected $fillable = ['quantity', 'price', 'item_date', 'product_id', 'order_id'];
}
