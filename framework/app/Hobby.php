<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{

    /**
     * The table associated with the Hobby model.
     *
     * @var string
     */
    protected $table = 'hobbies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['text'];

    /**
     * One to Many relation.
     * Retrieve the user this hobby belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retrive the CV this hobby belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cv()
    {
        return $this->belongsTo(Cv::class);
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
