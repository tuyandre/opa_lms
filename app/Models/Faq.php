<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected  $guarded = [];

    protected function category(){
        return $this->belongsTo(Category::class);
    }
}
