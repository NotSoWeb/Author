<?php

use Illuminate\Support\Facades\Route;
use Notsoweb\Author\Http\Controllers\AuthorController;

Route::prefix('notsoweb')->name('notsoweb')->group(function(){
    Route::get('author', [AuthorController::class, 'index']);
});