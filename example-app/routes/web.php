<?php

use Illuminate\Support\Facades\Route;

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

/**
 * Home
 */
Route::get('/',[\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

/**
 * About
 */

Route::get('/about',[\App\Http\Controllers\AboutController::class, 'index'])
    ->name('about');

/**
 * User
 */

Route::get('/users',[\App\Http\Controllers\UserController::class, 'index'])
    ->name('user')
    ->middleware([\App\Http\Middleware\CheckUserMiddleware::class]);

Route::get('/users/create',[\App\Http\Controllers\UserController::class, 'create'])
    ->name('user.create');

Route::get('/users/edit{id}',[\App\Http\Controllers\UserController::class, 'edit'])
    ->name('user.edit')
    ->middleware([\App\Http\Middleware\CheckUserMiddleware::class]);

Route::get('/users/{id}',[\App\Http\Controllers\UserController::class, 'show'])
    ->name('user.show')
    ->middleware([\App\Http\Middleware\CheckUserMiddleware::class]);

Route::post('/users/save',[\App\Http\Controllers\UserController::class, 'store'])
    ->name('user.store');

Route::delete('/users/delete/{id}',[\App\Http\Controllers\UserController::class, 'delete'])
    ->name('user.delete')
    ->middleware([\App\Http\Middleware\CheckUserMiddleware::class]);

/**
 * Login
 */

Route::get('/login',[\App\Http\Controllers\LoginController::class, 'index'])
    ->name('login');

Route::post('/logout',[\App\Http\Controllers\LoginController::class, 'logout'])
    ->name('logout');

Route::post('/login',[\App\Http\Controllers\LoginController::class, 'login'])
    ->name('login.post');

/**
 * Page
 */
Route::get('/page',[\App\Http\Controllers\PageController::class, 'index'])
    ->name('page')
    ->middleware([\App\Http\Middleware\CheckUserMiddleware::class]);

Route::get('/page/edit{id}',[\App\Http\Controllers\PageController::class, 'edit'])
    ->name('page.edit')
    ->middleware([\App\Http\Middleware\CheckUserMiddleware::class]);

Route::get('/page/create',[\App\Http\Controllers\PageController::class, 'create'])
    ->name('page.create')
    ->middleware([\App\Http\Middleware\CheckUserMiddleware::class]);

Route::get('/page/{id}',[\App\Http\Controllers\PageController::class, 'show'])
    ->name('page.show')
    ->middleware([\App\Http\Middleware\CheckUserMiddleware::class]);

Route::post('/page/save',[\App\Http\Controllers\PageController::class, 'store'])
    ->name('page.store')
    ->middleware([\App\Http\Middleware\CheckUserMiddleware::class]);
