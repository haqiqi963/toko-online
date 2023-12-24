<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::get('/', [TransactionController::class, 'index'])->name('home');
    Route::get('/home', [TransactionController::class, 'index'])->name('home');
    Route::post('/addToCart/{id}', [TransactionController::class, 'addToCart'])->name('addToCart');

    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/transaction', [HomeController::class, 'transaction'])->name('transaction');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

    Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

    Route::post('/registerCust', [UserController::class, 'registerCustomer'])->name('registerCust');
    Route::post('/loginCust', [UserController::class, 'authentication'])->name('loginCust');
    Route::get('/logoutCust', [UserController::class, 'logoutCust'])->name('logoutCust');


    Route::prefix('/secret/admin')->group(function (){
        Route::middleware('guest')->group(function () {
            Route::get('/', [AdminController::class, 'login'])->name('login');
            Route::post('/loginProcess', [AdminController::class, 'authentication'])->name('loginProcess');
        });

        Route::middleware(['auth', 'onlyAdmin'])->group(function (){
                Route::get('/logoutAdmin', [AdminController::class, 'logout'])->name('logoutAdmin');
                Route::get('/dashboard', [DashboardController::class,'index']);

                Route::get('/users-management', [UserController::class,'index']);
                Route::get('/report', [ReportController::class,'index']);

                Route::get('/product', [ProductController::class,'index']);
                Route::get('/addModal', [ProductController::class, 'addModal'])->name('addModal');
                Route::post('/addData', [ProductController::class, 'store'])->name('addData');
                Route::get('/admin/editModal/{id}', [ProductController::class, 'show'])->name('editModal');
                Route::post('/admin/updateData/{id}', [ProductController::class, 'update'])->name('updateData');
                Route::delete('/admin/deleteData/{id}', [ProductController::class, 'destroy'])->name('deleteData');
        });
    });


