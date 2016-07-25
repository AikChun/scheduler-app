<?php

namespace App;

use App\GroupClass;
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
        return $this->belongsTo(App\User::class, 'lecturer_id');
    }

    public function course()
    {
        return $this->belongsTo(App\Course::class);
    }

}
