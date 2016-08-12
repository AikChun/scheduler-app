<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammeName extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];
}
