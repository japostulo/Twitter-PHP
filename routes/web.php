<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::resource('messages', 'MessageController');
Route::resource('products', 'ProductController');

Route::resource('login', 'LoginController');

Route::post('/logon', 'LoginController@logon')->name('login.logon');

Route::get('/home', function(){
    return view('home.pages.home');
})->name('home');

Route::get('/explore', function(){
    return view('explore.pages.explore');
})->name('explore');

Route::get('/notifications', function(){
    return view('notifications.pages.notifications');
})->name('notifications');

Route::get('/messages', function(){
    return view('messages.pages.messages');
})->name('messages');

Route::get('/bookmarks', function(){
    return view('bookmarks.pages.bookmarks');
})->name('bookmarks');

Route::get('/lists', function(){
    return view('lists.pages.lists');
})->name('lists');

Route::get('/profile', function(){
    return view('profile.pages.profile');
})->name('profile');







/*
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{id}', 'PostController@delete')->name('posts.delete');
*/

// Route::get('/messages/create', 'MessageController@create')->name('messages.create');
// Route::get('/messages/{id}/edit', 'MessageController@edit')->name('messages.edit');



Route::get('/', function () {
    return view('welcome');
})->name('Welcome');

// Direcionamento de rotas

// Route::get('/params', function () {
//     return redirect('/');
// });





// Route::middleware([])->group(function () {
//     Route::prefix('admin')->group(function () {
//         Route::get('/', function () {
//             return 'Admin';
//         });
//     });
// });

Route::group([
    "middleware" => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
], function () {
    Route::get('/', function () {
        return 'Admin';
    });
});

// Aceita todos os verbos HTTP
Route::any('/any', function () {
    return redirect()->route('Welcome');
});

// 
Route::match(['get', 'post'],'/match', function () {
    return 'match get, post';
});
