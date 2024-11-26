<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserRegisterController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin/login',[AdminController::class,'adminlogin'])->name('adminlogin');
Route::post('/admin-login-post',[AdminController::class,'loginadmin'])->name('admin-login-post');





Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('/dashboard',[AdminController::class,"dashboard"])->name('admin.dashboard');
        Route::get('/logout',[AdminController::class,'logout']);
        Route::get('/authordetails',[AuthorController::class,'authordetails'])->name('admin.book-details');
        Route::get('/addbook',[AuthorController::class,'addbook']); // add book form
        Route::get('/addauthor',[AuthorController::class,'addauthor'])->name('admin.add-author'); // add Author form
        Route::get('/delete/{id}',[AuthorController::class,'delete']);
        Route::get('/update/{id}',[AuthorController::class,'update'])->name('admin.book-edit');// admin Delete to author
         // admin Delete to author


         Route::post('/authorupdate/{id}',[AuthorController::class,'updateauthor'])->name('admin.update-book');// update books and author
        Route::post('/addbook-post', [AuthorController::class,'bookadd'])->name('admin.add-book-post'); // add Book
        Route::post('/author', [AuthorController::class,'authoradd'])->name('admin.author');//add Author 
       Route::get('/authdata', [AuthorController::class,'authdata'])->name('admin.author-details');
       Route::get('edit-author/{id}', [AuthorController::class,'editAuthor'])->name('admin.edit-author');
       Route::post('/edit-author-post/{id}', [AuthorController::class,'editAuthorPost'])->name('admin.edit-author-post');
       Route::get('/edit-author-delete/{id}', [AuthorController::class,'editAuthorDelete'])->name('admin.author-delete');
      Route::get('feedback-details',[AuthorController::class,'feedback'])->name('admin.feedback'); 
    });
});
 

    Route::get('/',[UserRegisterController::class,'userRegister'])->name('user-register');
    Route::post('/user-post',[UserRegisterController::class,'userRegisterPost'])->name('user-post');
    Route::get('/user-login',[UserRegisterController::class,'userLogin'])->name('user-login');
    Route::post('/user-login-post',[UserRegisterController::class,'userLoginPost'])->name('user-login-post');

    Route::group(['prefix' => 'user', 'namespace' => 'user'], function () {
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/user-dashboard',[UserRegisterController::class,'userDashboard'])->name('user-dashboard');
            Route::post('/submit-feedback', [FeedbackController::class, 'store'])->name('submit.feedback');

            
        });
    });


