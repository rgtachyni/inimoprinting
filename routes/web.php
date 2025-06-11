<?php

use App\Http\Controllers\admin\AlgoritmaGreedyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController as Auths;
use App\Http\Controllers\AuthController as Authz;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\WishlistController;
use App\Http\Controllers\PesananController;
use App\Models\AlgoritmaGreedy;
use Faker\Provider\ar_EG\Payment;


Route::post('/auth/logout', [Auths::class, 'logout'])->name('logout');
Route::get('/login', [Authz::class, 'login'])->name('login');
Route::post('/proses-login', [Authz::class, 'prosesLogin'])->name('prosesLogin');
Route::get('/register', [Authz::class, 'register'])->name('register');
Route::post('/register', [Authz::class, 'registerCreate'])->name('registercreate');

// keranjang
Route::post('/cart/add/{id}', [App\Http\Controllers\Admin\CartController::class, 'addToCart'])->name('cart.add');
// Route::post('/cart/jumlah', [App\Http\Controllers\Admin\CartController::class, 'jumlah'])->name('jumlah');
Route::get('/cart', [App\Http\Controllers\Admin\CartController::class, 'viewCart'])->name('cart.view');
Route::delete('/cart/{id}', [App\Http\Controllers\Admin\CartController::class, 'removeFromCart'])->name('removeFromCart');
Route::get('/transaction', [App\Http\Controllers\Admin\CartController::class, 'transaction'])->name('transaction.view');
Route::delete('/cart/remove/{id}', [App\Http\Controllers\Admin\CartController::class, 'removeFromCart'])->name('cart.remove');
// Route::post('/cart/update', [CartController::class, 'update'])->name('cartUpdate');
Route::post('/cart/updateQty', [CartController::class, 'qty'])->name('qty');


Route::get('/pesanan/selesai', [CartController::class, 'selesai'])->name('selesai');
Route::get('/pesanan/belumbayar', [CartController::class, 'belumBayar'])->name('belumBayar');
Route::get('/pesanan/dibatalkan', [CartController::class, 'dibatalkan'])->name('dibatalkan');
Route::get('/pesanan/proses', [CartController::class, 'sedangProses'])->name('sedangProses');
Route::get('/pesanan/detailProses', [CartController::class, 'detailProses'])->name('detailProses');
Route::get('/pesanan/detailBelumBayar/{id}', [CartController::class, 'detailBelumBayar'])->name('detailBelumBayar');
Route::post('/midtrans/notification', [PaymentController::class, 'paymentNotification'])->name('paymentNotification');

Route::post('/algoritma', [AlgoritmaGreedyController::class, 'hitungSkorPrioritas'])->name('hitungSkorPrioritas');
Route::get('/Hasilalgoritma', [AlgoritmaGreedyController::class, 'index'])->name('index');


Route::get('/checkout/success/{transaction}', [PaymentController::class, 'success'])->name("checkout-success");
Route::get('/checkout/pending/{transaction}', [PaymentController::class, 'pending'])->name("checkout-pending");
Route::post('/checkout', [PaymentController::class, 'process'])->name('process');
Route::get('/checkout/{transaction}', [PaymentController::class, 'checkout'])->name('checkout');

Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/add/{id}', [WishlistController::class, 'addWhislist'])->name('addWhislist');
    Route::post('/wishlist/cart/{id}', [WishlistController::class, 'cart'])->name('wishlist.cart');
    Route::delete('/wishlist/delete/{id}', [WishlistController::class, 'hapus'])->name('wishlist.delete');
});


// Tampilan User
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('index');
Route::get('/produk', [App\Http\Controllers\HomeController::class, 'produk'])->name('produk.view');
Route::get('/detailKategori/{id}', [App\Http\Controllers\HomeController::class, 'detailKategori'])->name('produk.detailkategori');
Route::get('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/detailproduk/{id}', [App\Http\Controllers\HomeController::class, 'detailProduk'])->name('detailProduk');
Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');
Route::get('/editprofil', [App\Http\Controllers\HomeController::class, 'Showeditprofil'])->name('Showeditprofil');
Route::post('/editprofil', [App\Http\Controllers\HomeController::class, 'editProfil'])->name('editProfil');
Route::get('/editpassword', [App\Http\Controllers\HomeController::class, 'ShowubahPassword'])->name('ShowubahPassword');
Route::post('/editpassword', [App\Http\Controllers\HomeController::class, 'ubahPassword'])->name('ubahPassword');


Route::group(['prefix' => '',  'namespace' => 'App\Http\Controllers\Admin',  'middleware' => ['auth', 'admin']], function () {
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

        Route::group(['prefix' => '/kategori-produk'], function () {
            Route::get('/', 'KategoriProdukController@index')->name('kategori-produk');
            Route::get('/data', 'KategoriProdukController@data')->name('kategori-produk.data');
            Route::post('/store', 'KategoriProdukController@store')->name('kategori-produk.store');
            Route::get('/{id}/edit', 'KategoriProdukController@show')->name('kategori-produk.edit');
            Route::post('/{id}', 'KategoriProdukController@update')->name('kategori-produk.update');
            Route::delete('/{id}', 'KategoriProdukController@destroy')->name('kategori-produk.delete');
        });

        Route::group(['prefix' => '/penjadwalan'], function () {
            Route::get('/', 'PenjadwalanController@index')->name('penjadwalan');
            Route::get('/data', 'PenjadwalanController@data')->name('penjadwalan.data');
            Route::post('/store', 'PenjadwalanController@store')->name('penjadwalan.store');
            Route::get('/{id}/edit', 'PenjadwalanController@show')->name('penjadwalan.edit');
            Route::post('/{id}', 'PenjadwalanController@update')->name('penjadwalan.update');
            Route::delete('/{id}', 'PenjadwalanController@destroy')->name('penjadwalan.delete');
        });
        Route::group(['prefix' => '/customer'], function () {
            Route::get('/', 'CustomerController@index')->name('customer');
            Route::get('/data', 'CustomerController@data')->name('customer.data');
            Route::post('/store', 'CustomerController@store')->name('customer.store');
            Route::get('/{id}/edit', 'CustomerController@show')->name('customer.edit');
            Route::post('/{id}', 'CustomerController@update')->name('customer.update');
            Route::delete('/{id}', 'CustomerController@destroy')->name('customer.delete');
        });
        Route::group(['prefix' => '/pembayaran'], function () {
            Route::get('/', 'PaymentController@index')->name('pembayaran');
            Route::get('/data', 'PaymentController@data')->name('pembayaran.data');
            Route::post('/store', 'PaymentController@store')->name('pembayaran.store');
            Route::get('/{id}/edit', 'PaymentController@show')->name('pembayaran.edit');
            Route::post('/{id}', 'PaymentController@update')->name('pembayaran.update');
            Route::delete('/{id}', 'PaymentController@destroy')->name('pembayaran.delete');
        });
        Route::group(['prefix' => '/history'], function () {
            Route::get('/', 'HistoryController@index')->name('history');
            Route::get('/data', 'HistoryController@data')->name('History.data');
            Route::post('/store', 'HistoryControllerstory@store')->name('History.store');
            Route::get('/{id}/edit', 'HistoryController@show')->name('History.edit');
            Route::post('/{id}', 'HistoryController@update')->name('History.update');
            Route::delete('/{id}', 'HistoryController@destroy')->name('History.delete');
            Route::post('/selesai/{id}', 'HistoryController@selesai')->name('pesanan.selesai');
        });
        Route::group(['prefix' => '/pesanan'], function () {
            Route::get('/', 'PesananController@index')->name('pesanan');
            Route::get('/data', 'PesananController@data')->name('pesanan.data');
            Route::post('/store', 'PesananController@store')->name('pesanan.store');
            Route::get('/{order_id}/show', 'PesananController@show')->name('pesanan.show');
            Route::post('/{id}', 'PesananController@update')->name('pesanan.update');
            Route::delete('/{id}', 'PesananController@destroy')->name('pesanan.delete');
            // Route::post('/selesai/{id}', 'PesananController@selesai')->name('pesanan.selesai');
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
