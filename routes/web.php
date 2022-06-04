<?php

use App\Http\Livewire\User\HomeComponent;
use App\Http\Livewire\User\ProductComponent;
use App\Http\Livewire\User\CartComponent;
use App\Http\Livewire\User\StoreComponent;
use App\Http\Livewire\User\CheckoutComponent;
use App\Http\Livewire\User\RegisterComponent;

use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\SigninComponent;
use App\Http\Livewire\Admin\SignupComponent;
use App\Http\Livewire\Admin\ForgotpasswordComponent;
use App\Http\Livewire\Admin\ListComponent;

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

Route::get('/', HomeComponent::class);

Route::get('/product', ProductComponent::class);

Route::get('/cart', CartComponent::class);

Route::get('/store', StoreComponent::class);

Route::get('/checkout', CheckoutComponent::class);

Route::get('/register', RegisterComponent::class);

Route::get('/admin', DashboardComponent::class);

Route::get('/admin/list', ListComponent::class);

Route::get('/admin/sign-in', SigninComponent::class);

Route::get('/admin/sign-up', SignupComponent::class);

Route::get('/admin/forgot-pw', ForgotpasswordComponent::class);