<?php

namespace App;

use App\Class;
use DB;
use Illuminate\Database\Eloquent\Model;
class Class extends Model
{
    //
    /**
    * List all the classes order by start_time
    */
    public function lecturer()
    {
        return $this->belongsTo(App\User::class, 'lecturer_id');
    }

    public function student_group()
    {
        return $this->belongsTo(App\StudentGroup::class);
    }

    public function module()
    {
        return $this->belongsTo(App\Module::class);
    }
    
}
