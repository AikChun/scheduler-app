<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammeType extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }
}
