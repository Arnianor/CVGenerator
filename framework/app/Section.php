<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    /**
     * The table associated with the Section model.
     *
     * @var string
     */
    protected $table = 'sections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type'];

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
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cvs()
    {
        return $this->belongsToMany(Cv::class);
    }

    /**
     * One-to-one relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skill()
    {
        return $this->hasOne(Skill::class);
    }

    /**
     * One-to-one relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hobby()
    {
        return $this->hasOne(Hobby::class);
    }

    /**
     * One-to-one relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function job()
    {
        return $this->hasOne(Work::class);
    }

    /**
     * One-to-one relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function language()
    {
        return $this->hasOne(Language::class);
    }

    /**
     * One-to-one relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function education()
    {
        return $this->hasOne(Education::class);
    }
}
