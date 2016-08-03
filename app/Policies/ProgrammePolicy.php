<?php

namespace App\Policies;

use \App\User;
use \App\Programme;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProgrammePolicy
{
    public function add(User $user, Programme $programme)
    {
        return $user['role']['id'] < 3;
    }

    public function update(User $user, Programme $programme)
    {
        return $user['role']['id'] < 3;
    }

    public function delete(User $user, Programme $programme)
    {
        return $user['role']['id'] < 3;
    }
}
