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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', array(
	'as'  	=> 'home',
	'uses' 	=> 'HomeController@home'
));

Route::get('/admin', array(
	'as'  	=> 'admin',
	'uses' 	=> 'AdminController@admin'
));

Route::get('/admin/profile', array(
	'as'  	=> 'profile',
	'uses' 	=> 'AdminController@profile'
));

Route::post('/admin/profile', array(
	'as'  	=> 'post-profile',
	'uses' 	=> 'AdminController@postPprofile'
));

Route::get('/admin/bio', array(
	'as'  	=> 'bio',
	'uses' 	=> 'AdminController@bio'
));

Route::post('/admin/bio', array(
	'as'  	=> 'pos-tbio',
	'uses' 	=> 'AdminController@postBio'
));

Route::get('/admin/skills', array(
	'as'  	=> 'skills',
	'uses' 	=> 'AdminController@skills'
));

Route::get('/admin/skill/add', array(
	'as'  	=> 'add-skill',
	'uses' 	=> 'AdminController@addSkill'
));

Route::post('/admin/skill/add', array(
	'as'  	=> 'post-skill',
	'uses' 	=> 'AdminController@postSkill'
));

Route::get('/admin/skill/edit/{id}', array(
	'as'  	=> 'edit-skill',
	'uses' 	=> 'AdminController@editSkill'
));

Route::post('/admin/skill/edit/{id}', array(
	'as'  	=> 'update-skill',
	'uses' 	=> 'AdminController@updateSkill'
));

Route::get('/admin/skill/delete/{id}', array(
	'as'  	=> 'delete-skill',
	'uses' 	=> 'AdminController@deleteSkill'
));

Route::get('/admin/experiences', array(
	'as'  	=> 'experiences',
	'uses' 	=> 'AdminController@experiences'
));

Route::get('/admin/experience/add', array(
	'as'  	=> 'add-experience',
	'uses' 	=> 'AdminController@addExperience'
));

Route::post('/admin/experience/post', array(
	'as'  	=> 'post-experience',
	'uses' 	=> 'AdminController@postExperience'
));

Route::get('/admin/experience/edit/{id}', array(
	'as'  	=> 'edit-experience',
	'uses' 	=> 'AdminController@editExperience'
));

Route::post('/admin/experience/edit/{id}', array(
	'as'  	=> 'update-experience',
	'uses' 	=> 'AdminController@updateExperience'
));

Route::get('/admin/experience/delete/{id}', array(
	'as'  	=> 'delete-experience',
	'uses' 	=> 'AdminController@deleteExperience'
));