<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\TestController;

// Route::get('url',Action)
// Route::post('url',Action)
// Route::put('url',Action)
// Route::patch('url',Action)
// Route::delete('url',Action)
//anunomas function
// Route::get('new',function(){
//     return "new";
// });

// Route::get('/',function(){
//     return 'Home Page';
// });
//this is not supported
// Route::delete('/',function(){
//     return 'Home Page';
// });

// Route::patch('/',function(){
//     return 'Home Page';
// });

// Route::put('/',function(){
//     return 'Home Page';
// });

// Route::get('user/profile',function(){
//     return 'user profile';
// });

// Route::match(['get','post'],'user/profile',function(){
//     return 'user profile';
// });
// Route::any('/',function(){
//     return "home page-any";
// });

// Route::get('/welcome',function(){
//     return "welcome - welcome-page";
// });

// Route::get('news{id}',function($id){
//     return "news$id";
// });

// Route::get('new{vjbkdsckj}',function($id){
//     return "news$id";
// });
// Route::get("welcome/{name}/{age}/{username}",function($name,$age,$username){
// if(str_conatins()){

// }
//     if(!preg_match('[0-9]',$name)){
//     return "welcome $name your age is $age , username is: $username";
//     }
// })->WhereAlpha('name')->WhereNumber('age')->WhereAlphaNumeric('username');
// :: ==== to call the fun from class and its static
// =>  ====== array assicative
// .  ====== con
// $ ===== var
// -> ===== to call fun from another fun
// as  ===== for each

// Route::get("news/{id?}",function($id=null){
//     return "news $id";
// });

// Route::get('user/{user}/comments/{comments}',function($user,$comments){
//     return "$user has $comments";
// });

// Route::get("welcome/{name}/{age}/{username}",[TestController::class,'print'])
// ->WhereAlpha('name')
// ->WhereNumber('age')
// ->WhereAlphaNumeric('username')
// ->name('khaled');
// Route::get("/",[TestController::class,'welcome'])->name('welcome');
// // the formla is Route::get("url",[class ,'fun'])->name();
// Route::get("about-us",[TestController::class, 'about'])->name('about');
// Route::get('/',[NewController::class,'index'])->name('index');
// Route::get('/about-us',[NewController::class,'about'])->name('about');
// Route::get('/contact',[NewController::class,'contact'])->name('contact');
// Route::get('post/{id?}',[NewController::class,'post'])->name('post');
// Route::get("/contact",[NewController::class,'contact'])->name('contact');
// Route::post("/contact",[NewController::class,'contact_data'])->name('contact_data');
Route::prefix('site1')->group(function ()
{
Route::get("/",[NewController::class,'index'])->name('index');
});
// Route::prefix('site1')->group('/',)
