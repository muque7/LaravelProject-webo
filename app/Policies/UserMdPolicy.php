<?php

namespace App\Policies;

use App\Models\UserMd;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserMdPolicy
{
    use HandlesAuthorization;

    public function update(UserMd $currentUser, UserMd $user)
    {
        return $currentUser->id === $user->id;
    }
    public function destroy(UserMd $currentUser, UserMd $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }

    public function follow(UserMd $currentUser, UserMd $user)
    {
        return $currentUser->id !== $user->id;
    }
}
