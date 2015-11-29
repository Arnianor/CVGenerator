<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    /**
     * Many to Many relation.
     * Retrieve the users this template belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
