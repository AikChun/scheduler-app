<?php

namespace App;

use App\Course;
use App\ProgrammeType;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $fillable = [
        'name',
        'programme_type_id'
    ];
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function programmeType()
    {
        return $this->belongsTo(ProgrammeType::class);
    }
}
