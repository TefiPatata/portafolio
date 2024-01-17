<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profileinfo
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $profile_photo
 * @property $description
 * @property $phone
 * @property $location
 * @property $aboutme_id
 * @property $work_id
 * @property $services_id
 * @property $portfolio_id
 * @property $socialnetworks_id
 * @property $skillssection_id
 * @property $messages_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Aboutme $aboutme
 * @property Message $message
 * @property Portfolio $portfolio
 * @property Service $service
 * @property Skillssection $skillssection
 * @property Socialnetwork $socialnetwork
 * @property Work $work
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profileinfo extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'profile_photo' => 'required',
		'description' => 'required',
		'phone' => 'required',
		'location' => 'required',
		'aboutme_id' => 'required',
		'work_id' => 'required',
		'services_id' => 'required',
		'portfolio_id' => 'required',
		'socialnetworks_id' => 'required',
		'skillssection_id' => 'required',
		'messages_id' => 'required',
    ];

    protected $perPage = 20;

    // app/Models/Skillssection.php
    protected $table = 'profileinfo';


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','profile_photo','description','phone','location','aboutme_id','work_id','services_id','portfolio_id','socialnetworks_id','skillssection_id','messages_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function aboutme()
    {
        return $this->hasOne('App\Models\Aboutme', 'id', 'aboutme_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function message()
    {
        return $this->hasOne('App\Models\Message', 'id', 'messages_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function portfolio()
    {
        return $this->hasOne('App\Models\Portfolio', 'id', 'portfolio_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function service()
    {
        return $this->hasOne('App\Models\Service', 'id', 'services_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function skillssection()
    {
        return $this->hasOne('App\Models\Skillssection', 'id', 'skillssection_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function socialnetwork()
    {
        return $this->hasOne('App\Models\Socialnetwork', 'id', 'socialnetworks_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function work()
    {
        return $this->hasOne('App\Models\Work', 'id', 'work_id');
    }
    

}
