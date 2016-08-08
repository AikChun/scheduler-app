<?php

namespace App;

use App\Course;
use App\ProgrammeType;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $fillable = [
        'name',
        'year',
        'semester',
        'facilitator_id',
        'recess_end_date',
        'recess_start_date',
        'programme_type_id'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function facilitator()
    {
        return $this->belongsTo(User::class, 'facilitator_id');
    }

}
