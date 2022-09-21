<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

Route::get('form1',[formController::class,'form1'])->name('form1');
Route::post('form1', [formController::class,'form_data'])->name('form_data');

Route::get('form2',[formController::class , 'form2'])->name('form2');
Route::post('form2_data',[formController::class , 'form2_data'])->name('form2_data');

Route::get('form3',[formController::class ,'form3'])->name('form3');
Route::post('form3-data',[formController::class ,'form3-data'])->name('form3-data');

Route::get('full_form',[formController::class,'full_form'])->name('full_form');
Route::post('full_form_data',[formController::class,'full_form_data'])->name('full_form_data');

