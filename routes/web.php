<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home/category',[HomeController::class,'showCategory'])->name('category');
Route::get('/home/allpost/{cId}',[HomeController::class,'showAllPost'])->name('post.all');
Route::get('/post/detail/{pId}',[HomeController::class,'postDetail'])->name('post.detail');

Route::post('/post/comment/{pId}',[CommentController::class,'comment'])->name('post.comment');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/category',[CategoryController::class,'index'])->name('category.home');
    Route::post('/category/add',[CategoryController::class,'addCategory'])->name('category.add');
    Route::get('/category/show',[CategoryController::class,'showCategory'])->name('category.show');
    Route::get('/category/edit/{cId}',[CategoryController::class,'editCategory'])->name('category.edit');
    Route::get('/category/delete/{cId}',[CategoryController::class,'deleteCategory'])->name('category.delete');
    Route::post('/category/update/{cId}',[CategoryController::class,'updateCategory'])->name('category.update');

    Route::get('/post',[PostController::class,'index'])->name('post.home');
    Route::post('/post/add',[PostController::class,'addPost'])->name('post.add');
    Route::get('/post/show',[PostController::class,'showPost'])->name('post.show');
    Route::get('/post/edit/{pId}',[PostController::class,'editPost'])->name('post.edit');
    Route::get('/post/delete/{pId}',[PostController::class,'deletePost'])->name('post.delete');
    Route::post('/post/update/{pId}/{cId}',[PostController::class,'updatePost'])->name('post.update');

    Route::get('/user',[UserController::class,'createUser'])->name('user.create');
    Route::post('/user/add',[UserController::class,'addUser'])->name('user.add');
    Route::get('/user/show',[UserController::class,'showPost'])->name('user.show');
    Route::get('/user/edit/{uId}',[UserController::class,'editUser'])->name('user.edit');
    Route::get('/user/delete/{uId}',[UserController::class,'deleteUser'])->name('user.delete');
    Route::post('/user/update/{uId}',[UserController::class,'updateUser'])->name('user.update');
    Route::get('/user/reset/{uId}',[UserController::class,'resetPass'])->name('user.reset');
    Route::post('/user/changePass/{uId}',[UserController::class,'changePass'])->name('user.changePass');
  
    
});
