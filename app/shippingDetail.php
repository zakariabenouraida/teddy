<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shippingDetail extends Model
{
    protected $fillable = ['user_id', 'shippingCountry', 'shippingCity', 'shippingAddress', 'shippingZip', 'Phone'];

    public function user()
    {
        return $this->belongsTo(User::class);    
    }
}
