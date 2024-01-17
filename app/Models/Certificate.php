<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificate
 *
 * @property $id
 * @property $time_frame
 * @property $name
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Certificate extends Model
{
    
    static $rules = [
		'time_frame' => 'required',
		'name' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['time_frame','name','description'];



}
