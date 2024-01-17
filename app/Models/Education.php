<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Education
 *
 * @property $id
 * @property $time_frame
 * @property $degree
 * @property $institute
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Education extends Model
{
    
    static $rules = [
		'time_frame' => 'required',
		'degree' => 'required',
		'institute' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['time_frame','degree','institute'];



}
