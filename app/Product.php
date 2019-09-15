<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['productName', 'productCategory_id', 'productDetails', 'productImage', 'productPrice'];

    public function prodcates()
    {
        return $this->hasMany(ProdCate::class);
    }

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }
}
