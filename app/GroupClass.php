<?php
namespace App;

use App\Course;
use App\GroupClass;
use App\User;
use DB;
use Illuminate\Database\Eloquent\Model;

class GroupClass extends Model
{
    protected $fillable = [
        'group_name',
        'total_hours',
        'day',
        'start_time',
        'end_time',
        'course_id',
        'lecturer_id',
        'group_number',
    ];
    /**
    * List all the classes order by start_time
    */
    public function lecturer()
    {
        return $this->belongsTo(User::class, 'lecturer_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function getStartDateAttribute($value)
    {
        return date('l d-m-Y H:i', strtotime($value));
    }
}
