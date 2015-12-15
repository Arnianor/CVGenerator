<?php
/**
 * Created by PhpStorm.
 * User: hmut
 * Date: 13-Dec-15
 * Time: 3:37 PM
 */

namespace App\Repositories;

use App\Section;
use App\User;
use App\CV;


class SectionRepository
{
    /**
     * Get all of the Sections of a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Section::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function forCv(Cv $cv)
    {
        return Section::whereCvId($cv->id)
            ->orderBy('created-at','asc')
            ->get();
    }

}