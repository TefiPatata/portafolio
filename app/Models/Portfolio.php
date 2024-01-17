<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Portfolio
 *
 * @property $id
 * @property $name_project
 * @property $type_project
 * @property $participation
 * @property $photo1
 * @property $photo2
 * @property $description
 * @property $client_id
 * @property $skills_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Skill $skill
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Portfolio extends Model
{
    
    static $rules = [
		'name_project' => 'required',
		'type_project' => 'required',
		'participation' => 'required',
		'photo1' => 'required',
		'photo2' => 'required',
		'description' => 'required',
		'client_id' => 'required',
		'skills_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_project','type_project','participation','photo1','photo2','description','client_id','skills_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'client_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function skill()
    {
        return $this->hasOne('App\Models\Skill', 'id', 'skills_id');
    }
    

}
