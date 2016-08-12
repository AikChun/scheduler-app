<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class CourseCode extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'code'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
