<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

Route::get('form1',[formController::class,'form1'])->name('form1');
Route::post('form1', [formController::class,'form_data'])->name('form_data');

Route::get('form2',[formController::class , 'form2'])->name('form2');
Route::post('form2_data',[formController::class , 'form2_data'])->name('form2_data');

Route::get('form3',[formController::class ,'form3'])->name('form3');
Route::post('form3_data',[formController::class ,'form3_data'])->name('form3_data');

Route::get('form4',[formController::class ,'form4'])->name('form4');
Route::post('form4_data',[formController::class,'form4_data'])->name('form4_data');

