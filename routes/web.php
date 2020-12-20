<?php

use App\Http\Livewire\Action;
use App\Http\Livewire\Form;
use App\Http\Livewire\Home;
use App\Http\Livewire\Post;
use App\Http\Livewire\Product;
use App\Http\Livewire\User;
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

Route::get('/', function () {
    return view('welcome');
});

route::get('/post',Post::class);
route::get('/user',User::class);

route::get('/home/{name?}',Home::class);
//form
route::Get('/form',Form::class);
//action
route::Get('/action', Action::class);
//product
route::Get('/product',Product::class);
