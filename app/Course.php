<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    //
    protected $fillable = [
        'programme_id',
        'title',
        'code',
        'number_of_students', 
        'number_of_groups',
    ];
}
