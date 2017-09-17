<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //

    protected $table = 'campaign';
    protected $primaryKey = 'campaign_id';
    public $timestamp = 'true';
    protected $fillable = [
    	'campaign_image',
    	'description',
    	'campaign_date',
    	'organiser',
    	'location',
    	'fund_amount',
    	'like',
    	'comment',	
    ];
}
