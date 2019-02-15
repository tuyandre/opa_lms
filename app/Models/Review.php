<?php

namespace App\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected  $guarded = [];

    public function course()
    {
        return $this->morphedByMany(Course::class, 'reviewable');
    }

    public function reviewable()
    {
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
