<?php

use Illuminate\Support\Facades\Route;


Route::get('login', [App\Http\Controllers\User\LoginController::class, 'index'])->name('user.login');
Route::post('login', [App\Http\Controllers\User\LoginController::class, 'authenticate'])->name('user.authenticate');
Route::get('logout', [App\Http\Controllers\User\LoginController::class, 'logout'])->name('user.logout');
Route::get('signin', [App\Http\Controllers\User\LoginController::class, 'redirect_to'])->name('user.signin');
Route::get('register', [App\Http\Controllers\User\LoginController::class, 'register'])->name('user.register');
Route::post('create', [App\Http\Controllers\User\LoginController::class, 'create'])->name('user.create');

Route::middleware('auth:web')->group(function () {
    Route::get('/', [App\Http\Controllers\User\UserController::class, 'dashboard'])->name('user');
    Route::get('tests/taken', [App\Http\Controllers\User\UserController::class, 'taken_tests'])->name('user.takentests');
    Route::get('tests/available', [App\Http\Controllers\User\UserController::class, 'available_tests'])->name('user.availabletests');
    Route::get('take/test/{test_id}', [App\Http\Controllers\User\UserController::class, 'take_test'])->name('user.test.take');
    
    /** Test Routes */
    // Route::get('interface', [App\Http\Controllers\Admin\TestController::class, 'interface'])->name('admin.interface');
    // Route::get('interface/add', [App\Http\Controllers\Admin\TestController::class, 'interface_add'])->name('admin.interface.add');
    // Route::post('interface/store', [\App\Http\Controllers\Admin\TestController::class, 'interface_store'])->name('admin.interface.store');
    // Route::post('interface/save', [\App\Http\Controllers\Admin\TestController::class, 'interface_save'])->name('admin.interface.save');
    // Route::get('interface/edit/{id}', [\App\Http\Controllers\Admin\TestController::class, 'interface_edit'])->name('admin.interface.edit');

    Route::get("profile",[\App\Http\Controllers\User\UserController::class, 'profile'])->name("user.profile");
    Route::get("profile/edit",[\App\Http\Controllers\User\UserController::class, 'edit_profile'])->name("user.profile.edit");
    Route::post("profile/update",[\App\Http\Controllers\User\UserController::class, 'update_profile'])->name("user.profile.update");

    Route::post("profile/password/update",[\App\Http\Controllers\User\UserController::class, 'update_password'])->name("user.password.change");
    
    Route::get("course/buy/{id}",[\App\Http\Controllers\User\CourseController::class,"buy_course"])->name("user.course.buy");
    Route::post("course/buy",[\App\Http\Controllers\User\CourseController::class,"purchase_course"])->name("user.course.purchase");
    Route::get("course/request/list",[\App\Http\Controllers\User\CourseController::class,"purchase_req_list"])->name('user.course.request.list');
    Route::post("course/request/list/filter",[\App\Http\Controllers\User\CourseController::class,"purchase_req_list_filter"])->name('user.course.request.list.filter');
});
