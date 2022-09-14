<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site2Controller;
Route::prefix('site2')->name('site2.')->group(function(){
    Route::get("/",[site2Controller::class,'index'])->name('index');
    Route::get("about",[site2Controller::class,'about'])->name('about');
    Route::get("post",[site2Controller::class,'post'])->name('post');
    Route::get("contact_us",[site2Controller::class,'contact_us'])->name('contact');
    Route::get("master",[site2Controller::class,'master'])->name('master');
});

