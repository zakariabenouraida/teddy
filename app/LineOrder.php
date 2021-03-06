<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineOrder extends Model
{
    protected $fillable = ['order_id', 'product_id', 'productSize_id', 'productQuantity'];


    public function order()
    {
        return $this->hasOne(Order::class);    
    }
    public function products()
    {
        return $this->hasMany(Product::class);    
    }
    public function Sizes()
    {
        return $this->hasMany(Size::class);    
    }
}
