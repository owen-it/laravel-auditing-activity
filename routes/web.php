<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
 //    
});

// All routes
Route::get('/{view?}', 'HomeController@index')->where('view', '(.*)');

