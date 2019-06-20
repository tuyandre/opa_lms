<?php

namespace App\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Bundle extends Model
{
    use SoftDeletes;


    protected $fillable = ['category_id', 'title', 'slug', 'description', 'price', 'course_image', 'start_date', 'published', 'featured', 'trending', 'popular', 'meta_title', 'meta_description', 'meta_keywords','user_id'];


    public function scopeOfTeacher($query)
    {
        if (!Auth::user()->isAdmin()) {
            return $query->where('user_id', Auth::user()->id);
        }
        return $query;
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'bundle_courses');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeOfAuthor($query)
    {
        if (!\Auth::user()->isAdmin()) {
            return  $query->where('user_id', \Auth::user()->id);
        }
        return $query;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRatingAttribute()
    {
        return $this->reviews->avg('rating');

    }


    public function students()
    {
        return $this->belongsToMany(User::class, 'bundle_student')->withTimestamps()->withPivot(['rating']);
    }


    public function reviews()
    {
        return $this->morphMany('App\Models\Review', 'reviewable');
    }


    public function item()
    {
        return $this->morphMany(OrderItem::class,'item');
    }


}
