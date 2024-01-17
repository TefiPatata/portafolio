<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 *
 * @property $id
 * @property $name_sender
 * @property $mail_sender
 * @property $email_subject
 * @property $body_message
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Message extends Model
{
    
    static $rules = [
		'name_sender' => 'required',
		'mail_sender' => 'required',
		'email_subject' => 'required',
		'body_message' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_sender','mail_sender','email_subject','body_message'];



}
