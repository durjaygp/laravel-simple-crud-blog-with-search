<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SearchController;


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


Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/blog/{slug}', [HomeController::class,'blogDetails'])->name('blog');

Route::get('/category/{slug}', [HomeController::class,'categoryBlog'])->name('category');

Route::post('/search/{search?}', [SearchController::class,'search'])->name('search');














Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/admin',[AdminController::class,'index'])->name('admin');

    //-----------Category Routes--------------
    Route::get('/admin/category/add',[CategoryController::class, 'index'])->name('add.category');
    Route::post('/admin/category/save',[CategoryController::class, 'saveCategory'])->name('save.category');
    Route::get('/admin/category/manage',[CategoryController::class, 'manageCategory'])->name('manage.category');
    Route::get('/admin/category/edit/{id}',[CategoryController::class, 'editCategory'])->name('edit.category');
    Route::post('/admin/category/edit/save',[CategoryController::class, 'updateCategory'])->name('update.category');

    Route::get('/admin/category/delete/{id}',[CategoryController::class, 'deleteCategory'])->name('delete.category');


    //----------Blog Post Routes-------------------
    Route::get('/admin/blog/manage', [BlogController::class, 'manageBlog'])->name('manage.blog');
    Route::get('/admin/blog/add', [BlogController::class, 'addBlog'])->name('add.blog');
    Route::post('/admin/blog/add/save', [BlogController::class, 'saveBlog'])->name('save.blog');
    Route::get('/admin/blog/edit/{id}', [BlogController::class, 'editBlog'])->name('edit.blog');
    Route::post('/admin/blog/update', [BlogController::class, 'updateBlog'])->name('update.blog');

    Route::get('/admin/blog/delete/{id}', [BlogController::class, 'deleteBlog'])->name('delete.blog');











});
