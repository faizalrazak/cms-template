<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    protected $table = 'user';
    protected $primaryKey = 'user_id';
    public $timestamp = 'true';
    protected $fillable = [
    	'name',
    	'first_name',
    	'last_name',
    	'locale',
    	'email',
    	'phone_number',
    	'address',
    	'birthdate',
    	'gender',
    	'race'
    ];
}
