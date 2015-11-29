<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    /**
     * One to Many relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cv()
    {
        return $this->belongsTo(User::class);
    }
}
