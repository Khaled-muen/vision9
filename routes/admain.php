<?php
use Illuminate\Support\Facades\Route;

Route::prefix("admain")->group(function(){
    Route::get("users",function(){return "Admin Users";})->name('user');
    Route::get("posts",function(){return "Admin posts";})->name('posts');
    Route::get("comments",function(){return "Admin comments";})->name('comments');
    Route::get("categories",function(){return "Admin categories";})->name('categories');
    Route::get("product",function(){return "Admin product";})->name('product');
    Route::get("orders",function(){return "Admin orders";})->name('orders');
    Route::get("payments",function(){return "Admin payments";})->name('payments');
});
