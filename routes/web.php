<?php

use App\Http\Livewire\Action;
use App\Http\Livewire\AllUser;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Form;
use App\Http\Livewire\Home;
use App\Http\Livewire\Post;
use App\Http\Livewire\Product;
use App\Http\Livewire\Students;
use App\Http\Livewire\Uploads;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;


Route::get('/',Users::class);
Route::get('/post',Post::class);
Route::get('/home/{name?}',Home::class);
Route::get('/form',Form::class);
Route::get('/action',Action::class);
Route::get('/product',Product::class);
Route::get('/contact',Contact::class);
Route::get('/user',Users::class);
Route::get('/all-user',AllUser::class);
Route::get('/students',Students::class);
Route::get('/upload',Uploads::class);
