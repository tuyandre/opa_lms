<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bundle extends Model
{
    use SoftDeletes;


    protected $fillable = ['category_id', 'title', 'slug', 'description', 'price', 'course_image', 'start_date', 'published', 'featured', 'trending', 'popular', 'meta_title', 'meta_description', 'meta_keywords','user_id'];


    public function courses()
    {
        return $this->belongsToMany(Course::class, 'bundle_courses');
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

}
