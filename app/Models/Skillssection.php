<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Skillssection
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $skills_id
 * @property $education_id
 * @property $certificate_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Certificate $certificate
 * @property Education $education
 * @property Skill $skill
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Skillssection extends Model
{
    
    static $rules = [
		'title' => 'required',
		'description' => 'required',
		'skills_id' => 'required',
		'education_id' => 'required',
		'certificate_id' => 'required',
    ];

    protected $perPage = 20;

    // app/Models/Skillssection.php
    protected $table = 'skillssection';


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','skills_id','education_id','certificate_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function certificate()
    {
        return $this->hasOne('App\Models\Certificate', 'id', 'certificate_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function education()
    {
        return $this->hasOne('App\Models\Education', 'id', 'education_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function skill()
    {
        return $this->hasOne('App\Models\Skill', 'id', 'skills_id');
    }
    

}
