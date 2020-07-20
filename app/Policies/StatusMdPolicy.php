<?php

namespace App\Policies;

use App\Models\StatusMd;
use App\Models\UserMd;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusMdPolicy
{
    use HandlesAuthorization;

    public function destroy(UserMd $user, StatusMd $status)
    {
        return $user->id === $status->user_id;
    }
}
