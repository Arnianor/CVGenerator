<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    /**
     * The table associated with the Education model.
     *
     * @var string
     */
    protected $table = 'educations';

    /**
     * One to Many relation.
     * Retrieve the user this education belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retrive the CV this education belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cv()
    {
        return $this->belongsTo(CV::class);
    }

    /**
     * Retrieve the Section this belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
