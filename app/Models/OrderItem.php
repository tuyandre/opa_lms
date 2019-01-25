<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
