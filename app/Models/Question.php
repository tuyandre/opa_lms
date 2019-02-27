<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 *
 * @package App
 * @property text $question
 * @property string $question_image
 * @property integer $score
*/
class Question extends Model
{
    use SoftDeletes;

    protected $fillable = ['question', 'question_image', 'score'];

    protected static function boot()
    {
        parent::boot();
        if(auth()->check()) {
            if (auth()->user()->hasRole('teacher')) {
                static::addGlobalScope('filter', function (Builder $builder) {
                    $courses = auth()->user()->courses->pluck('id');
                    $builder->whereHas('tests', function ($q) use  ($courses) {
                        $q->whereIn('tests.course_id', $courses);
                    });
                });
            }
        }

    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setScoreAttribute($input)
    {
        $this->attributes['score'] = $input ? $input : null;
    }

    public function options()
    {
        return $this->hasMany('App\Models\QuestionsOption');
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'question_test');
    }

    
}
