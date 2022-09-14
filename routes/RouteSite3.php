<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site3Controller;
Route::prefix('site3')->name('site3.')->group(function ()
{
    Route::get('/',[site3Controller::class,'index'])->name('index');
    Route::get('experience',[site3Controller::class,'experience'])->name('experience');
    Route::get('education',[site3Controller::class,'education'])->name('education');
    Route::get('skills',[site3Controller::class,'skills'])->name('skills');
    Route::get('interests',[site3Controller::class,'interests'])->name('interests');
    Route::get('awards',[site3Controller::class,'awards'])->name('awards');
    Route::get('master',[site3Controller::class,'master'])->name('master');
});
