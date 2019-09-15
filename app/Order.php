<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id'];

    public function lineorders()
    {
        return $this->hasMany(LineOrder::class);    
    }

    public function user()
    {
        return $this->belongsTo(User::class);    
    }
}

