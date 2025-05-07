<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController as Auths;
use App\Http\Controllers\AuthController as Authz;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\PesananController;
use Faker\Provider\ar_EG\Payment;

// Route::get('/footer', function () {
//     return view('app._layouts.footer');
// });

// Auth::routes();

// Route::get('/auth/login', [Auths::class, 'index']);
// Route::post('/auth/login', [Auths::class, 'login'])->name('login');

Route::get('/auth/logout', [Auths::class, 'logout'])->name('logout');
Route::get('/login', [Authz::class, 'login'])->name('login');
Route::post('/proses-login', [Authz::class, 'prosesLogin'])->name('prosesLogin');
Route::get('/register', [Authz::class, 'register'])->name('register');
Route::post('/register', [Authz::class, 'registerCreate'])->name('registercreate');

// keranjang
Route::post('/cart/add/{id}', [App\Http\Controllers\Admin\CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [App\Http\Controllers\Admin\CartController::class, 'viewCart'])->name('cart.view');
Route::get('/transaction', [App\Http\Controllers\Admin\CartController::class, 'transaction'])->name('transaction.view');
Route::delete('/cart/remove/{id}', [App\Http\Controllers\Admin\CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cartUpdate');
Route::get('/pesanan', [CartController::class, 'riwayatPesanan'])->name('riwayatPesanan');
Route::get('/pesanan/belumbayar', [CartController::class, 'belumBayar'])->name('belumBayar');

Route::post('/prosescheckout', [PaymentController::class, 'createCharge'])->name('prosescheckout');
Route::get('/checkout/success/{transaction}', [CartController::class, 'success'])->name("checkout-success");
Route::get('/checkout/{id}', [PaymentController::class, 'checkout'])->name('checkout');

// Tampilan User
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('index');
Route::get('/produk', [App\Http\Controllers\HomeController::class, 'produk'])->name('produk');
Route::get('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/detailproduk/{id}', [App\Http\Controllers\HomeController::class, 'detailProduk'])->name('detailProduk');



Route::group(['prefix' => '',  'namespace' => 'App\Http\Controllers\Admin',  'middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin'], function () {

        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::group(['prefix' => '/produk'], function () {
            Route::get('/', 'ProdukController@index')->name('produk');
            Route::get('/data', 'ProdukController@data')->name('produk.data');
            Route::post('/store', 'ProdukController@store')->name('produk.store');
            Route::get('/{id}/edit', 'ProdukController@show')->name('produk.edit');
            Route::post('/{id}', 'ProdukController@update')->name('produk.update');
            Route::delete('/{id}', 'ProdukController@destroy')->name('produk.delete');
        });

        Route::group(['prefix' => '/transaksi'], function () {
            Route::get('/', 'TransaksiController@index')->name('transaksi');
            Route::get('/data', 'TransaksiController@data')->name('transaksi.data');
            Route::post('/store', 'TransaksiController@store')->name('transaksi.store');
            Route::get('/{id}/edit', 'TransaksiController@show')->name('transaksi.edit');
            Route::post('/{id}', 'TransaksiController@update')->name('transaksi.update');
            Route::delete('/{id}', 'TransaksiController@destroy')->name('transaksi.delete');
        });
        Route::group(['prefix' => '/pembayaran'], function () {
            Route::get('/', 'PaymentController@index')->name('pembayaran');
            Route::get('/data', 'PaymentController@data')->name('pembayaran.data');
            Route::post('/store', 'PaymentController@store')->name('pembayaran.store');
            Route::get('/{id}/edit', 'PaymentController@show')->name('pembayaran.edit');
            Route::post('/{id}', 'PaymentController@update')->name('pembayaran.update');
            Route::delete('/{id}', 'PaymentController@destroy')->name('pembayaran.delete');
        });
        Route::group(['prefix' => '/pesanan'], function () {
            Route::get('/', 'PesananController@index')->name('pesanan');
            Route::get('/data', 'PesananController@data')->name('pesanan.data');
            Route::post('/store', 'PesananController@store')->name('pesanan.store');
            Route::get('/{id}/edit', 'PesananController@show')->name('pesanan.edit');
            Route::post('/{id}', 'PesananController@update')->name('pesanan.update');
            Route::delete('/{id}', 'PesananController@destroy')->name('pesanan.delete');
        });
        Route::group(['prefix' => '/laporan'], function () {
            Route::get('/', 'LaporanController@index')->name('laporan');
            Route::get('/data', 'LaporanController@data')->name('laporan.data');
            Route::post('/store', 'LaporanController@store')->name('laporan.store');
            Route::get('/{id}/edit', 'LaporanController@show')->name('laporan.edit');
            Route::post('/{id}', 'LaporanController@update')->name('laporan.update');
            Route::delete('/{id}', 'LaporanController@destroy')->name('laporan.delete');
        });
        Route::group(['prefix' => '/users'], function () {
            Route::get('/', 'UserController@index')->name('users');
            Route::get('/data', 'UserController@data')->name('users.data');
            Route::post('/store', 'UserController@store')->name('users.store');
            Route::get('/{id}/edit', 'UserController@show')->name('users.edit');
            Route::post('/{id}', 'UserController@update')->name('users.update');
            Route::delete('/{id}', 'UserController@destroy')->name('users.delete');
        });
        // Route::group(['prefix' => '/user-menus'], function () {
        //     Route::get('/', 'UserMenuController@index')->name('user-menus');
        //     Route::get('/data', 'UserMenuController@data')->name('user-menus.data');
        //     Route::post('/store', 'UserMenuController@store')->name('user-menus.store');
        //     Route::get('/{id}/edit', 'UserMenuController@show')->name('user-menus.edit');
        //     Route::post('/{id}', 'UserMenuController@update')->name('user-menus.update');
        //     Route::delete('/{id}', 'UserMenuController@destroy')->name('user-menus.delete');
        // });
    });
});



// Route::get('/cc', function () {
//     // Artisan::call('migrate');
//     // Artisan::call('migrate:fresh');
//     // Artisan::call('db:seed');
//     Artisan::call('optimize:clear');
//     Artisan::call('config:cache');
//     Artisan::call('view:clear');
//     Artisan::call('route:clear');
// });
