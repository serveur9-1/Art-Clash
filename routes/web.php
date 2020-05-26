<?php

use App\Ville;
use App\Paroisse;
use App\Diocese;
use App\Article;
use App\SubCategory;
use App\Gestionnaire;
use App\Programme;
use App\ProgrammeContent;
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

//    SITES

//ACCUEIL

Route::get('/',[
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

// blog

Route::get('/blog',[
    'as' => 'blog',
    'uses' => 'BlogController@blog'
]);


Route::get('/blog/detail',[
    'as' => 'detail',
    'uses' => 'BlogController@detail'
]);


//contact

Route::get('/contact',[
    'as' => 'contact',
    'uses' => 'ContactController@contact'
]);

//discipline

Route::get('/discipline',[
    'as' => 'discipline',
    'uses' => 'DisciplineController@discipline'
]);


Route::get('/participer',[
    'as' => 'participer',
    'uses' => 'DisciplineController@participer'
]);


//presentation

Route::get('/presentation',[
    'as' => 'presentation',
    'uses' => 'AboutController@about'
]);

//programme

Route::get('/programme',[
    'as' => 'programme',
    'uses' => 'ProgrammeController@programme'
]);