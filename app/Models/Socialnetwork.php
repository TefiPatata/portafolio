<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Socialnetwork
 *
 * @property $id
 * @property $url_net
 * @property $icon
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Socialnetwork extends Model
{
    
    static $rules = [
		'url_net' => 'required',
		'icon' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['url_net','icon'];



}
