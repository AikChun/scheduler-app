<?php
namespace App;

use App\Course;
use App\GroupClass;
use App\User;
use DB;
use Illuminate\Database\Eloquent\Model;

class GroupClass extends Model
{
    //
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
