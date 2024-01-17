<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Work
 *
 * @property $id
 * @property $position
 * @property $modality
 * @property $time-contract
 * @property $workplace
 * @property $description
 * @property $skills_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Skill $skill
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Work extends Model
{
    
    static $rules = [
		'position' => 'required',
		'modality' => 'required',
		'time-contract' => 'required',
		'workplace' => 'required',
		'description' => 'required',
		'skills_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['position','modality','time-contract','workplace','description','skills_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function skill()
    {
        return $this->hasOne('App\Models\Skill', 'id', 'skills_id');
    }
    

}
