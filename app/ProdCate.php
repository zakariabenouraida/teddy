<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdCate extends Model
{
    protected $fillable = ['productCategory'];


    public function product(){
        return $this->belongsTo(Product::class);
    }
}
