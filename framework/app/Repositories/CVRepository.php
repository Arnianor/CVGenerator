<?php
/**
 * Created by PhpStorm.
 * User: horia_000
 * Date: 30-Nov-15
 * Time: 1:10 PM
 */

namespace App\Repositories;

use App\User;
use App\CV;

class CVRepository
{
    /**
     * Get all of the cvs for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return CV::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }

}