<?php

namespace App\Policies;

use App\CV;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CVPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user can delete the given CV.
     *
     * @param User $user
     * @param CV $cv
     * @return bool
     */
    public function destroy(User $user, CV $cv)
    {
        return $user->id === $cv->user_id;
    }
}
