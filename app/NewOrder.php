<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewOrder extends Model
{
    protected $fillable = ['order_id', 'product_id', 'productSize', 'productQuantity'];


    public function order()
    {
        return $this->hasOne(Order::class);    
    }
    public function products()
    {
        return $this->hasMany(Product::class);    
    } 
}
