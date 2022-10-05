<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\Theme\ColorSchemeController;
use App\Http\Controllers\Dashboard\Theme\DarkModeController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\LocalServiceProviderController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\VendorServiceController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CheckAdmin;

use App\Models\LocalServiceProvider;
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

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::group([], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

});


Route::group(['prefix' => 'dashboard'], function () {
    Route::group(['middleware' => AdminMiddleware::class], function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard.index');
        Route::get('logout', [AdminController::class, 'logout'])->name('dashboard.logout');
        Route::resource('role', RoleController::class, ['names' => 'dashboard.role']);
        Route::resource('admin', AdminController::class, ['names' => 'dashboard.admin']);
        Route::get('roles/list', [RoleController::class, 'list'])->name('dashboard.roles.list');
        Route::get('admins/list', [AdminController::class, 'list'])->name('dashboard.admins.list');

    });
    Route::group(['middleware' => CheckAdmin::class], function () {
        Route::get('login', [AdminController::class, 'showLoginForm'])->name('dashboard.login');
        Route::post('login', [AdminController::class, 'login'])->name('dashboard.loginPost');

    });
});

