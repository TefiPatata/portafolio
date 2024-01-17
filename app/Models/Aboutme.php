<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aboutme
 *
 * @property $id
 * @property $title
 * @property $subtitle
 * @property $description
 * @property $photo_desc
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aboutme extends Model
{
    
    static $rules = [
		'title' => 'required',
		'subtitle' => 'required',
		'description' => 'required',
		'photo_desc' => 'required',
    ];

    protected $perPage = 20;

    protected $table = 'aboutme';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','subtitle','description','photo_desc'];



}
