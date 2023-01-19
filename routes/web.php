<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use App\Http\Livewire\HomeComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// 12. add new route is HomeComponent in web.php
Route::get('/', HomeComponent::class)->name('home');

// 40. create route middleware for Customer
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/customer/dashborad', CustomerDashboardComponent::class)->name('customer.dashboard');
});

// 41. create route middleware for Service Provider
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'authsprovider'])->group(function () {
    Route::get('/sprovider/dashborad', SproviderDashboardComponent::class)->name('sprovider.dashboard');
});

// 42. create route middleware for Admin
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashborad', AdminDashboardComponent::class)->name('admin.dashboard');
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
