<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;


/**
 * Class Lesson
 *
 * @package App
 * @property string $course
 * @property string $title
 * @property string $slug
 * @property string $lesson_image
 * @property text $short_text
 * @property text $full_text
 * @property integer $position
 * @property string $downloadable_files
 * @property tinyInteger $free_lesson
 * @property tinyInteger $published
*/
class Lesson extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'lesson_image', 'short_text', 'full_text', 'position', 'downloadable_files', 'free_lesson', 'published', 'course_id'];
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCourseIdAttribute($input)
    {
        $this->attributes['course_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setPositionAttribute($input)
    {
        $this->attributes['position'] = $input ? $input : null;
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id')->withTrashed();
    }

    public function test() {
        return $this->hasOne('App\Models\Test');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\Auth\User', 'lesson_student')->withTimestamps();
    }

    public function media()
    {
        return $this->morphMany(Media::class,'model');
    }

    public function chapterStudents()
    {
        return $this->morphMany(ChapterStudent::class,'model');
    }

    public function downloadableMedia(){
        return $this->morphMany(Media::class,'model')
            ->where('type','!=','youtube')
            ->Where('type','!=','vimeo')
            ->Where('type','!=','custom')
            ->Where('type','!=','embed');

    }


    public function mediaVideo()
    {
        return $this->morphOne(Media::class,'model')
            ->where('type','=','youtube')
            ->orWhere('type','=','vimeo')
            ->orWhere('type','=','custom')
            ->orWhere('type','=','embed');
    }

    public function courseTimeline()
    {
        return $this->morphOne(CourseTimeline::class,'model');
    }
    
}
