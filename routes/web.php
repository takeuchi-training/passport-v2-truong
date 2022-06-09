<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    $clients = DB::table('oauth_clients')->where('user_id', auth()->user_id)->get();

    return view('dashboard', [
        'clients' => $clients
    ]);
});

Route::controller(UserController::class)->group(function() {
    Route::middleware('guest')->group(function() {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('authenticate');
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'store')->name('store');
    });

    Route::middleware('auth')->group(function() {
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::prefix('/products')->controller(ProductController::class)->middleware('auth:api')->group(function() {
    Route::get('/products', 'products');
});

Route::get('/test-create-client', function (Request $request) {
    $response = Http::post($url = 'http://localhost:8000/oauth/clients', $data = [
        '_token' => csrf_token(),
        'name' => 'asdsad',
        'redirect' => 'iqwopueiowqueopi'
    ]);

    return $response;
});