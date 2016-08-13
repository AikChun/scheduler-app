<?php
namespace App;

use App\Course;
use App\GroupClass;
use App\User;
use Log;
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

    public static function clashingVenueAndTime($class, $day, $venue, $startTime, $endTime)
    {
        if(!self::clashingTime($class, $day, $startTime, $endTime)) {
            return false;
        }

        return $class['venue'] == $venue;
    }

    public static function clashingTime($class, $day, $startTime, $endTime)
    {
        if($class['day'] != $day) {
            return false;
        }

        $classStartTime = date('H:i', strtotime($class['start_time']));
        $classEndTime   = date('H:i', strtotime($class['end_time']));
        $startTime      = date('H:i', strtotime($startTime));
        $endTime        = date('H:i', strtotime($endTime));

        if($classStartTime >= $endTime) {
            return false;
        }

        if($classEndTime <= $startTime) {
            return false;
        }

        if($classStartTime <= $startTime && $startTime <= $classEndTime) {
            return true;
        }

        if($classStartTime <= $endTime && $endTime <= $classEndTime) {
            return true;
        }

        if($classStartTime > $startTime && $classEndTime < $endTime) {
            return true;
        }

        return false;
    }
}
