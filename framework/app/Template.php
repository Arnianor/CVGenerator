<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{

    /**
     * The table associated with the Template model.
     *
     * @var string
     */
    protected $table = 'templates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','css','style'];

    /**
     * Many to Many relation.
     * Retrieve the users this template belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsToMany(User::class,'users','user_id');
    }
}
