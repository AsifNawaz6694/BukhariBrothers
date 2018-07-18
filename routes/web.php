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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'Front\FrontController@dashboard')->name('dashboard');
Route::get('/login', 'AuthenticationController@login_index')->name('login_index');
Route::post('/login_post', 'AuthenticationController@login_post')->name('login_post');
Route::post('/contact_post', 'Front\FrontController@contact_form')->name('contact_post');

/*Admin Routes Started*/
Route::group(['prefix' => 'admin' ,  'middleware' => 'is-admin'], function () {
	Route::get('/', 'Admin\AdminController@index')->name('admin_index');
	Route::get('admin_logout', 'Admin\AdminController@admin_logout')->name('admin_logout');		
	Route::post('user/password_update/{id}', 'Admin\AdminController@update_password')->name('update_password');
//Statistics Routes Started
	Route::get('/chart', 'Admin\AdminController@chart')->name('chart');
//Statistics Routes Ended

//Orders Routes Started
	Route::get('/orders','Admin\OrdersController@index')->name('orders');
	Route::get('/order_view/{id}','Admin\OrdersController@order_view')->name('order_view');
	Route::get('/confirm_order/{id}/', ["as" => "confirm-order", "uses" => "Admin\OrdersController@confirm_order"]);
	Route::get('/reject_order/{id}/', ["as" => "reject-order", "uses" => "Admin\OrdersController@reject_order"]);
//Orders Routes Ended

//Projects CRUD Routes Started
	Route::get('/project','Admin\ProjectsController@index')->name('projects');
	Route::post('project/store', 'Admin\ProjectsController@store')->name('store_project');
	Route::get('project/create', 'Admin\ProjectsController@create')->name('create_project');
	Route::get('project/delete/{id}', 'Admin\ProjectsController@destroy')->name('delete_project');
	Route::get('project/{id}', 'Admin\ProjectsController@project_view')->name('project_view');
	Route::get('project/{id}/edit', 'Admin\ProjectsController@edit')->name('project_edit');
	Route::post('update_project/{id}',['as'=>'update_project','uses'=>'Admin\ProjectsController@update']);
	Route::get('/remove_picture_project/{project_id}','Admin\ProjectsController@remove_picture_project')->name('remove_picture_project');
	Route::post('ImageUploadProject',['as'=>'ImageUploadProject','uses'=>'Admin\ProjectsController@ImageUploadProject']);
//Projects CRUD Routes Ended

//Resources CRUD Routes Started
	Route::get('/resource','Admin\ResourcesController@index')->name('resources');
	Route::post('resource/store', 'Admin\ResourcesController@store')->name('store_resource');
	Route::get('resource/create', 'Admin\ResourcesController@create')->name('create_resource');
	Route::get('resource/delete/{id}', 'Admin\ResourcesController@destroy')->name('delete_resource');
	Route::get('resource/{id}', 'Admin\ResourcesController@resource_view')->name('resource_view');
	Route::get('resource/{id}/edit', 'Admin\ResourcesController@edit')->name('resource_edit');
	Route::post('update_resource/{id}',['as'=>'update_resource','uses'=>'Admin\ResourcesController@update']);
	Route::get('/remove_picture_resource/{resource_id}','Admin\ResourcesController@remove_picture_resource')->name('remove_picture_resource');
	Route::post('ImageUploadResource',['as'=>'ImageUploadResource','uses'=>'Admin\ResourcesController@ImageUploadResource']);
//Resources CRUD Routes Ended

//Services CRUD Routes Started
	Route::get('/services','Admin\ServiceController@index')->name('services');
	Route::post('service/store', 'Admin\ServiceController@store')->name('store_service');
	Route::get('service/create', 'Admin\ServiceController@create')->name('create_service');
	Route::get('service/delete/{id}', 'Admin\ServiceController@destroy')->name('delete_service');
	Route::get('service/{id}', 'Admin\ServiceController@service_view')->name('service_view');
	Route::get('service/{id}/edit', 'Admin\ServiceController@edit')->name('service_edit');
	Route::post('update_service/{id}',['as'=>'update_service','uses'=>'Admin\ServiceController@update']);
	Route::post('ImageUploadService',['as'=>'ImageUploadService','uses'=>'Admin\ServiceController@ImageUploadService']);
	Route::post('ImageUploadProduct',['as'=>'ImageUploadProduct','uses'=>'Admin\ServiceController@ImageUploadProduct']);
//Categories CRUD Routes Ended

//Users CRUD Routes Started
	Route::get('users', 'Admin\AdminController@users')->name('users');
	Route::post('user/store', 'Admin\AdminController@store')->name('store_user');
	Route::get('user/create', 'Admin\AdminController@create')->name('create_user');
	Route::get('user/{id}/edit', 'Admin\AdminController@user_edit')->name('user_edit');
	Route::post('update_user/{id}',['as'=>'update_user','uses'=>'Admin\AdminController@update']);
	Route::post('user/password_update/{id}', 'Admin\AdminController@update_password')->name('update_password');	
	Route::get('user/{id}', 'Admin\AdminController@user_view')->name('user');
//Users CRUD Routes Ended

	//Admin activate/deactivate Users
	Route::get('/activate_user/{id}/', ["as" => "activate-user","uses" => "Admin\AdminController@activate_user"]);
	Route::get('/deactivate_user/{id}/', ["as" => "deactivate-user", "uses" => "Admin\AdminController@deactivate_user"]);
	//Admin activate/deactivate Users

	//Admin Uploading ProfilePicture
	Route::post('ImageUpload',['as'=>'ImageUpload','uses'=>'Admin\AdminController@ImageUpload']);
	
	//Admin Uploading ProfilePicture

	//Admin Removing ProfilePicture
	Route::get('/remove_picture_admin/{user_id}','Admin\AdminController@remove_picture_admin')->name('remove_picture_admin');
	//Admin Removing ProfilePicture	

	//About Us Routes Started
	Route::get('/aboutus','Admin\PagesController@index')->name('aboutus');
	Route::get('about/{id}/edit', 'Admin\PagesController@edit')->name('about_edit');
	Route::post('update_about/{id}',['as'=>'update_about','uses'=>'Admin\PagesController@update']);
	//About Us Routes Ended

	//Contact us Routes Started
	Route::get('/contact_emails','Admin\PagesController@contacts')->name('contacts');
	Route::get('reply_email/{id}/edit', 'Admin\PagesController@reply_email')->name('reply_email');
	Route::post('reply_email_post/{id}',['as'=>'reply_email_post','uses'=>'Admin\PagesController@reply_email_post']);
	//Contact us Routes Ended
});
/*Admin Routes Ended*/