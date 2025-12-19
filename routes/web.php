<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RootController;




Route::get('/', 'RootController@root')->name('root');

Auth::routes();





