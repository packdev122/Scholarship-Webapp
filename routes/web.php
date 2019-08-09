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
Route::get('/', [
    'uses' => 'HomeController@index', 
    'as' => 'home'
]);
// Route::get('/', [
//     'uses' => 'Auth\LoginController@login', 
//     'as' => 'dashboard'
// ]);

Route::get('/terms_conditions', 'HomeController@terms_conditions')->name('terms _conditions');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/jury', 'HomeController@jury')->name('jury');
Route::get('/collective', 'HomeController@collective')->name('collective');
Route::get('/anusha', 'HomeController@anusha')->name('anusha');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/application', 'HomeController@application')->name('application');
Route::get('/faqs', 'HomeController@faqs')->name('faqs');
Route::get('/readings', 'HomeController@readings')->name('readings');
Route::get('/nutshell', 'HomeController@nutshell')->name('nutshell');
Route::get('/dashboard', 'HomeController@index');
Route::get('/video', 'HomeController@video')->name("video");
Route::get('/blog', 'HomeController@blog')->name("video");
Route::get('/news', 'HomeController@news')->name("news");
Auth::routes();
//Route::get('/home', 'MainController@dashboard');
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', 'Auth\LoginController@doLogin');

// for Jury
Route::get("/jury/dashboard" , 'JuryController@dashboard')->name("jury/dashboard");
Route::get("/jury/applicants" , 'JuryController@index')->name("jury/applicants");
Route::get("/jury/applications" , 'JuryController@applications')->name("jury/applications");
Route::get("/jury/scores" , 'JuryController@scores')->name("jury/scores");

Route::get('/jury/application/{id}' , 'JuryController@application');
Route::get('/jury/score/{id}' , 'JuryController@score');

Route::post('/application', 'ApplicationController@save_application')->name('application');
Route::post('/application_store', 'ApplicationController@store_application')->name('application');
Route::post('/save_score', 'ApplicationController@save_score')->name('save_score');

Route::get('/download/{filename}' , 'ApplicationController@download');

///Administrator
Route::get("/admin/dashboard" , 'AdminController@dashboard')->name("admin/dashboard");
Route::get("/admin/applications" , 'AdminController@applications')->name("admin/applications");
Route::get("/admin/application/{id}" , 'AdminController@application')->name("admin/application");
Route::get("/admin/selector/{id}" , 'AdminController@selector')->name("admin/selector");
Route::post("/admin/select_jury/{id}" , 'AdminController@select_jury');
Route::get("/admin/weightage" , 'AdminController@weightage');
Route::post("/admin/set_weightage" , 'AdminController@set_weightage');
Route::get("/admin/users" , 'AdminController@users');
Route::get("/admin/juries" , 'AdminController@juries');
Route::get("/admin/administrator" , 'AdminController@administrator');
Route::get("/admin/create_user/{type}" , 'AdminController@create_user');
Route::post("/admin/create_user/{type}" , 'AdminController@create_user');
Route::get("/admin/delete_user/{id}" , 'AdminController@delete_user');
Route::get("/admin/changepassword/{id}" , 'AdminController@changepassword');
Route::get("/admin/email_juries" , 'AdminController@email_juries');
Route::get("/admin/email_applicants" , 'AdminController@email_applicants');
Route::get("/admin/scores" , 'AdminController@scores')->name("admin/scores");
Route::get("/admin/email_templates/{type}" , 'AdminController@email_templates')->name("admin/email_templates");
Route::post("/admin/save_template" , 'AdminController@save_template');
//Application
Route::get('/application/accept/{id}' , 'ApplicationController@accept');
Route::post('/application/declined' , 'ApplicationController@declined');
