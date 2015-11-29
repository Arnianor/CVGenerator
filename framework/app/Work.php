<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    /**
     * The table corresponding to the Work model.
     *
     * @var string
     */
    protected $table = 'jobs';

    /**
     * One to Many relation.
     * Retrieve the user this job belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retrive the CV this job belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cv()
    {
        return $this->belongsTo(CV::class);
    }
}