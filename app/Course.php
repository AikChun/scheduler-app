<?php

namespace App;

use App\Programme;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'programme_id',
        'title',
        'code',
        'number_of_students',
        'number_of_groups',
        'estimated_number_of_students',
        'start_date',
        'end_date'
    ];

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function groupClasses()
    {
        return $this->hasMany(GroupClass::class);
    }
}
