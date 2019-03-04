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

Route::group([], function () {
    Route::get('/login', function () {
        return view('auth.login');
    });
    Route::get('/panel', 'UserController@get_privilege');
    Route::post('/login', 'auth\LoginController@login');

    Route::get('/logout', 'auth\LoginController@logout');

});
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@GetHome');


});
Route::get('/', 'HomeController@GetHome');
Route::post('/search', 'HomeController@search');


Route::get('/register', function () {
    return view('auth.singup');
});
Route::post('/register', 'Auth\RegisterController@postRegister');


Route::get('/register-done', function () {
    return view('auth.singup-done');
});
Route::get('/new-maneger', 'UserController@NewManeger');
Route::post('/new-maneger', 'UserController@PostNewManeger');
Route::get('/maneger-added', function () {
    return view('maneger-added');
});
Route::post('/new-cat', 'CatController@InsertCat');
Route::get('/new-cat', 'CatController@GetNewCat');
Route::get('/new-subcat', 'CatController@GetNewSubCat');
Route::post('/new-subcat', 'CatController@InsertSubCat');
Route::get('/new-product', 'ProductController@GetProduct');
Route::get('/product/{id}', 'ProductController@GetSProduct');
Route::post('/new-product', 'ProductController@InsertProduct');
Route::get('/product', 'ProductController@GetAllProduct');
Route::post('/product/dell', 'ProductController@DellProduct');
Route::get('/product/edite/{id}', 'ProductController@EditeProduct');
Route::post('/product/sub/{id}', 'ProductController@ChangProduct');
Route::post('/new-comment', 'ProductController@InsertComment');
Route::get('/comment', 'CommentController@GetComment');
Route::get('/cat', 'CatController@GetCat');
Route::get('/subcat', 'CatController@GetSub');
Route::post('/comment/submite', 'CommentController@PostSubmite');
Route::post('/comment/dell', 'CommentController@PostDell');
Route::get('/cat/{num}', 'CatController@GetChang');
Route::get('/subcat/{num}', 'CatController@GetChangSub');
Route::post('/cat/edit/{id}', 'CatController@PostChang');
Route::post('/subcat/edit/{id}', 'CatController@PostChangEdite');
Route::post('/cat/dell', 'CatController@PostDell');
Route::post('/subcat/dell', 'CatController@PostDellSub');
Route::post('/add-basket', 'ProductController@AddBasket');
Route::get('/basket', 'ProductController@Basket');
Route::get('/code', 'ProductController@GetCode');
Route::post('/code', 'ProductController@PostCode');
Route::post('/code/pro', 'ProductController@PostCodePro');
Route::get('/code/dis', 'ProductController@ProCode');
Route::post('/buy', 'ProductController@GetBuy');
Route::post('/buy', 'ProductController@GetBuy');




