<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //

    protected $table = 'news';
    protected $primaryKey = 'article_id';
    public $timestamp = 'true';
    protected $fillable = [
    	'article_date',
    	'article_title',
    	'source',
    	'comment',
    	'like',
    	'header_image',
    	'inline_image',
    	'author',
    ];
}
