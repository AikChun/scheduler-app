<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class CourseCode extends Model
{
    //
    protected $fillable = [
        'code'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
