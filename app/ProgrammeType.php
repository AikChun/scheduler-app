<?php

namespace App;

use App\Programme;
use Illuminate\Database\Eloquent\Model;

class ProgrammeType extends Model
{
    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }
}
