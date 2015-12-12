<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{

    /**
     * The table associated with the CV model.
     *
     * @var string
     */
    protected $table = 'cvs';

    /**
     * Many to One relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sections()
    {
        return $this->belongsToMany(Section::class,'cv_sections','cv_id','section_id');
    }

    /**
     * Get the CV's sections.
     *
     * @return array|static[]
     */
    public function getSections()
    {
        $sections = DB::table('sections')->where('cv_id',$this->id)->get();

        return $sections;
    }

    /**
     * Retrive all the CV's section models.
     *
     * @return mixed
     */
    public function retriveSections()
    {
        $sections = $this->sections()->where('cv_id',$this->id)->get();

        return $sections;
    }

}
