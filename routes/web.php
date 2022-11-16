<?php

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AjaxTestController;
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

Route::get('/', function () {
    return view('frontend.pages.home');
});


Route::get('/admin',function(){
	return  view('backend.pages.home');
})->middleware(['auth','role:Admin'])->name('admin.index');



Route::middleware(['auth','role:Admin'])->name('admin.')->prefix('admin')->group(function(){
	Route::get('/dashboard', [AdminController::class,'index'])->name('index');
	Route::resource('/roles',RoleController::class);
	Route::get('/roles/showpermissions/{role}',[RoleController::class,'showAssign'])->name('roles.showAssign');
	Route::post('/roles/{role}/permissions',[RoleController::class,'givePermission'])->name('roles.permissions');
	Route::delete('/roles/{role}/permissions/{permission}',[RoleController::class,'revokePermission'])->name('roles.permissions.revoke');
	Route::resource('/permissions',PermissionController::class);
	Route::get('/permissions/showroles/{permission}',[PermissionController::class,'showAssign'])->name('permissions.showAssign');
	Route::post('/permissions/{permission}/roles',[PermissionController::class,'assignRole'])->name('permissions.roles');
	Route::delete('/permissions/{permission}/roles/{role}',[PermissionController::class,'removeRole'])->name('permissions.roles.remove');
	Route::get('/users',[UserController::class,'index'])->name('users.index');
	Route::post('/users',[UserController::class,'store'])->name('users.store');
	Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
	Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
	Route::post('/users/{user}/roles',[UserController::class,'assignRole'])->name('users.roles');
	Route::delete('/users/{user}/roles/{role}',[UserController::class,'removeRole'])->name('users.roles.remove');
	Route::post('/users/{user}/permissions',[UserController::class,'givePermission'])->name('users.permissions');
	Route::delete('/users/{user}/permissions/{permission}',[UserController::class,'revokePermission'])->name('users.permissions.revoke');
});



Route::view('about-us','frontend.pages.about-us')->name('about-us');
Route::view('gallery','frontend.pages.gallery')->name('gallery');
Route::view('rooms','frontend.pages.rooms')->name('rooms');
Route::view('services','frontend.pages.services')->name('services');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
