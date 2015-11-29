<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * One to Many relation.
     * Retrieve the user this section belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retrive the CV this section belongs to.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cv()
    {
        return $this->belongsTo(CV::class);
    }
}
