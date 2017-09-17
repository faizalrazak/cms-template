<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/user', ['as' =>'createUser', 'uses'=>'UserController@createUser']);
Route::get('/users', ['as' => 'users', 'uses'=> 'UserController@getUser']);
Route::get('/editUser/{user_id}', ['as' => 'editUser', 'uses' => 'UserController@editUser']);
Route::post('/updateUser', ['as' => 'updateUser', 'uses' => 'UserController@updateUser']);


Route::post('/campaign', ['as' => 'createCampaign', 'uses' => 'CampaignController@createCampaign']);
Route::get('/campaigns', ['as'=>'campaigns', 'uses'=>'CampaignController@getCampaign']);
Route::get('/editCampaign/{campaign_id}', ['as' => 'editCampaign', 'uses' => 'CampaignController@editCampaign']);
Route::post('/updateCampaign', ['as' => 'updateCampaign', 'uses' => 'CampaignController@updateCampaign']);

Route::post('/news', ['as' => 'createNews', 'uses' => 'NewsController@createNews']);
Route::get('/news', ['as'=>'news', 'uses'=> 'NewsController@getNews']);
Route::get('/editNews/{article_id}', ['as' => 'editNews', 'uses' => 'NewsController@editNews']);
Route::post('/updateNews', ['as' => 'updateNews', 'uses' => 'NewsController@updateNews']);

