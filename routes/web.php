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
Route::get('/','FrontEndController@index')->name('index');
Route::get('/about-us','FrontEndController@about')->name('about');
Route::get('/services','FrontEndController@services')->name('services');
Route::get('/contact-us','FrontEndController@contact')->name('contact');
Route::get('/blog','FrontEndController@blog')->name('blog');
// Route::get('/all-listings','FrontEndController@listings')->name('listings');
Route::get('/single-art/{id}','FrontEndController@singleListing')->name('single-listing');

//download pdf
Route::get('/downloads', 'FrontEndController@downloadBrochure')->name('download_pdf');
//send mail
Route::post('/sendemail/send', 'FrontEndController@SendMail')->name('sendmail');



Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

// listings controller

Route::group(['middleware' => ['auth']], function() {

Route::get('/my-property','ListingController@index')->name('all_properties');
Route::post('/property-store','ListingController@store')->name('listing.store');
Route::post('/property-update{property_id}','ListingController@update')->name('listing.update');

Route::get('/property/edit/{id}','ListingController@edit')->name('listing.edit');
Route::get('/property/destroy/{id}','ListingController@destroy')->name('listing.destroy');
Route::get('/galleryImage/destroy/{id}','ListingController@destroyGalleryImage')->name('gallery.destroy');


// Category Controller

Route::get('/categories/list','CategoryController@index')->name('category.index');
Route::get('/categories-edit/{id}','CategoryController@edit')->name('category.edit');
Route::get('/categories-destroy/{id}','CategoryController@destroy')->name('category.destroy');
Route::post('/categories/update','CategoryController@update')->name('category.update');
Route::post('/category-store','CategoryController@store')->name('category.store');



//blog controller
Route::namespace('Blog')->prefix('blog')->name('blog.')->group(function (){
    Route::get('/all/posts', 'BlogController@index')->name('all_posts');
    Route::get('/create/post', 'BlogController@create')->name('create_post');
    Route::post('/store/post', 'BlogController@store')->name('store_post');
    Route::get('/edit/post/{post_id}', 'BlogController@edit')->name('edit_post');
    Route::post('/update/post/{post_id}', 'BlogController@update')->name('update_post');
    Route::get('/delete/post/{post_id}', 'BlogController@destroy')->name('delete_post');
});

//homeslider controller

Route::get('slider/images', 'HomeSliderController@index')->name('slider_images');
Route::get('slider/create/image', 'HomeSliderController@create')->name('create_post');
Route::post('slider/store/image', 'HomeSliderController@store')->name('store_image');
Route::get('slider/delete/image/{image_id}', 'HomeSliderController@destroy')->name('delete_image');

//features controller

Route::get('/all/features', 'FeatureController@index')->name('all_features');
Route::post('/store/post', 'FeatureController@store')->name('store_feature');
Route::get('/delete/feature/{feature_id}', 'FeatureController@destroy')->name('delete_feature');

//$users
Route::get('/all/members', 'UserController@index')->name('all_users');
Route::get('/create/member', 'UserController@create')->name('create_user');
Route::post('/add/member', 'UserController@store')->name('store_user');
Route::get('/delete/member/{user_id}', 'UserController@destroy')->name('delete_user');

//comtact form manage messages
Route::get('/all/customer-messages', 'ContactFormController@index')->name('customer_messages');

//olark Controller
Route::post('/store/olark-messo', 'OlarkEndPoint@store')->name('olark_store_messo');


// Search a Listing

Route::get('/search/results', 'FrontEndController@searchlisting')->name('listing.search');
Route::get('/search/results/{cat_type}','FrontEndController@menuSearch')->name('menu-search');

// RBAC routes


Route::resource('roles','RoleController');
Route::resource('users','UserController');

Route::get('/permissions/create','PermissionController@index')->name('create.permission');
Route::post('/permissions/store','PermissionController@store')->name('store.permission');
});