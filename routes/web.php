<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\amadController;
use App\Http\Controllers\rawangiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\DaftrFilesController;

// Route::get('/', function () {
//     return view('index');
// });
// amad
Route::view("add_amad",'add_amad');
Route::post('add_amad', [amadController::class,'andh_amad']);
Route::get('/view_amad', [amadController::class, 'andh_view_amad']);

// rawangi
Route::view("add_rawangi",'add_rawangi');
Route::post('add_rawangi', [rawangiController::class,'andh_rawangi']);
Route::get('/view_rawangi', [rawangiController::class, 'andh_view_rawangi']);

// amad update
Route::get('delete_amad/{id}',[amadController::class,'amad_delete']); 
Route::get('edit_amad/{id}',[amadController::class,'show_amad']); 
Route::post('edit_amad',[amadController::class,'update_amad']); 


// rwangi update
Route::get('edit_rawangi/{id}',[rawangiController::class,'show_rawangi']); 
Route::post('edit_rawangi',[rawangiController::class,'update_rawangi']); 
Route::get('delete_rawangi/{id}',[rawangiController::class,'rawangi_delete']); 


// daftr file add
Route::view("add_file",'add_file');
Route::post('add_file', [DaftrFilesController::class,'andh_file']);
Route::get('/view_file', [DaftrFilesController::class, 'andh_view_file']);
// update file
Route::get('delete_file/{id}',[DaftrFilesController::class,'file_delete']); 
Route::get('edit_file/{id}',[DaftrFilesController::class,'show_file']); 
Route::post('edit_file',[DaftrFilesController::class,'update_file']); 


// register
Route::view("register",'register');
Route::post('register', [userController::class,'signup']);

// profile
// Route::view("edit_pro",'edit_pro');
Route::get('view_settings',[UserController::class,'settings']); 
Route::get('edit_pro/{id}',[userController::class,'show_pro']); 
Route::post('edit_pro',[userController::class,'update_pro']); 
Route::get('delete/{id}',[userController::class,'user_delete']); 

// login
Route::get('/signin', [userController::class, 'showLoginForm']);
Route::post('signin', [userController::class,'signin']);

Route::get('/', function () {
   return view('index');
})->middleware('auth.session');
Route::get('/logout', [userController::class, 'logout']);

// Route::view("view_forgot_password",'view_forgot_password');


// Route::get('/view_forgot_password', [userController::class, 'forgot_password']);
// Route::get("search/{name}", [userController::class,'search']);
Route::get('/view_forgot_password', [userController::class, 'search'])->name('search');
