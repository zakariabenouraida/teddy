<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['productName', 'productCategory_id', 'productDetails', 'productImage', 'productPrice'];
    public function prodcate(){
        return $this->hasMany(ProdCate::class);}
}
