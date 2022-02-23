<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\RoleController as AdminRole;
use App\Http\Controllers\Admin\UserController as AdminUser;
use App\Http\Controllers\Admin\SettingController as AdminSetting;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsOfServiceController;
use App\Jatayu;
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

Route::middleware(['web'])->group(function () {

    // web 
    Route::get('/', function () {
        return view('welcome');
    });

    if (Jatayu::hasTermsAndPrivacyPolicyFeature()) {
        Route::get('/terms-of-service', [TermsOfServiceController::class, 'show'])->name('terms.show');
        Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('policy.show');
    }

    // Auth 
    Route::middleware(['auth'])->group(function () {
        // App
        Route::get('home', function () {
            return view('home');
        })->name('home');

        // Admin Area
        Route::prefix('admin')->group(function () {
            // Admin Overview
            Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');

            // Permission 
            Route::get('roles/reload-permissions/{id}', [AdminRole::class, 'reloadPermissions'])->name('roles.update');
            Route::get('roles/reload-permissions', [AdminRole::class, 'reloadPermissions'])->name('roles.update');
            Route::resource('roles', AdminRole::class);

            // User 
            Route::resource('users', AdminUser::class);

            // Settings 
            Route::get('settings/remove/{id}', [AdminSetting::class, 'remove'])->name('settings.update');
            Route::get('settings', [AdminSetting::class, 'index'])->name('settings.update');
            Route::post('settings', [AdminSetting::class, 'update'])->name('settings.update');
        });
    });
});
