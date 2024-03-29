<?php

use Illuminate\Support\Facades\Auth;
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
    return view('pages.index');
})->name('index');

Auth::routes(['verify'=>true]);


//other pages
Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'create'])->name('contact-us');
Route::post('/contact-us/store', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact-us.store');
Route::get('/about-us', [App\Http\Controllers\StaticPagesController::class, 'showAboutUsPage'])->name('about-us');
Route::get('/privacy-policy', [App\Http\Controllers\StaticPagesController::class, 'showPrivacyPolicyPage'])->name('privacy-policy');
Route::get('/term-and-conditions', [App\Http\Controllers\StaticPagesController::class, 'showTermAndConditionsPage'])->name('term-conditions');
Route::get('/faqs', [App\Http\Controllers\StaticPagesController::class, 'showFAQSPage'])->name('faqs');
Route::get('/paper-weight-chart', [App\Http\Controllers\StaticPagesController::class, 'showPaperWeightPage'])->name('paper-weight');

//product
Route::prefix('product')->name('product.')->group(function () {
    Route::get('/index', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
    Route::get('/show', [App\Http\Controllers\ProductController::class, 'show'])->name('show');
});

//adminpanel
Route::get('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'show'])->name('admin.login.show');
Route::post('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'login'])->name('admin.login');
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {

    Route::post('admin/logout', [App\Http\Controllers\Adminpanel\AuthController::class, 'logout'])->name('logout');

    //dashboard
    Route::controller(App\Http\Controllers\Adminpanel\DashboardController::class)->name('dashboard')->group(function () {
        Route::get('/', 'index');
    });

    // product
    Route::controller(App\Http\Controllers\Adminpanel\ProductController::class)->prefix('products')->name('product.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{product}', 'show')->name('show');
        Route::get('/{product}/edit', 'edit')->name('edit');
        Route::put('/{product}', 'update')->name('update');
        Route::delete('/{product:id}', 'destroy')->name('destroy');

        //category
        Route::controller(App\Http\Controllers\Adminpanel\ProductCategoryController::class)
            ->prefix('category')->name('category.')->group(function () {
            Route::get('/index', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{productCategory}/show', 'show')->name('show');
            Route::get('/{productCategory}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/{productCategory:id}', 'destroy')->name('destroy');
        });

        //sub-category
        Route::controller(App\Http\Controllers\Adminpanel\ProductSubCategoryController::class)
            ->prefix('sub-category')->name('sub-category.')->group(function () {
            Route::get('/index', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{productSubCategory}/show', 'show')->name('show');
            Route::get('/{productSubCategory}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/{productSubCategory:id}', 'destroy')->name('destroy');
        });
    });

    // user
    Route::controller(App\Http\Controllers\Adminpanel\UserController::class)->prefix('users')->name('user.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{user}', 'show')->name('show');
        Route::get('/{user}/edit', 'edit')->name('edit');
        Route::put('/{user}', 'update')->name('update');
        Route::delete('/{user:id}', 'destroy')->name('destroy');
    });

    // order
    Route::controller(App\Http\Controllers\Adminpanel\OrderController::class)->prefix('orders')->name('order.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{order}', 'show')->name('show');
        Route::get('/{order}/edit', 'edit')->name('edit');
        Route::put('/{order}', 'update')->name('update');
        Route::delete('/{order:id}', 'destroy')->name('destroy');
    });

    //blog
    Route::controller(App\Http\Controllers\Adminpanel\BlogController::class)->prefix('blogs')->name('blog.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{blog}', 'show')->name('show');
        Route::get('/{blog}/edit', 'edit')->name('edit');
        Route::put('/{blog}', 'update')->name('update');
        Route::delete('/{blog:id}', 'destroy')->name('destroy');
    });

    //blog-category
    Route::controller(App\Http\Controllers\Adminpanel\BlogCategoryController::class)->prefix('blogs-category')->name('blog-category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{blogCategory}', 'show')->name('show');
        Route::get('/{blogCategory}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{blogCategory:id}', 'destroy')->name('destroy');
    });

    // admins
    Route::controller(App\Http\Controllers\Adminpanel\AdminController::class)->prefix('admin-users')->name('admin-user.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{user}', 'show')->name('show');
        Route::get('/{user}/edit', 'edit')->name('edit');
        Route::put('/{user}', 'update')->name('update');
        Route::delete('/{user:id}', 'destroy')->name('destroy');
    });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
