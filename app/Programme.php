<?php

namespace App;

use App\Course;
use App\ProgrammeType;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $fillable = [
        'name',
        'programme_type_name',
        'year',
        'semester',
        'recess_start_date',
        'recess_end_date'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function facilitator()
    {
        return $this->belongsTo(User::class);
    }

    public static function listUniqueProgrammeNames()
    {
        return self::all()->map(function($programme) {
            return $programme->name;
        });
    }
}
