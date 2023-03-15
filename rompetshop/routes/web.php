<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;


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

Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth'])->name('dashboard');



Route::post('/paypal', [PaymentController::class, 'pay'])->name('paypal');
Route::get('/success', [PaymentController::class, 'success'])->name('pay_success');
Route::post('/momo', [PaymentController::class, 'momo_payment'])->name('momo');
require __DIR__ . '/auth.php';

// Front End
Route::group(['as' => 'front.'], function () {
    //Home
    Route::group(['controller' => HomeController::class, 'as' => '.home.'], function () {
        Route::get('/', 'index')->name('index');
        Route::post('/tim-kiem', 'search')->name('search');
        Route::get('/error', 'error_404')->name('error');
        Route::get('/logout-homepage', 'logout')->name('logout');
        
    });

    // Admin
    Route::group(['controller' => AdminController::class, 'as' => '.admin.'], function () {
        Route::get('/admin',  'index')->name('index');
        Route::get('/dashboard', 'show_dashboard_user')->name('dashboard_user');
        Route::get('/dashboard/orderchart', 'show_dashboard_order')->name('dashboard_order');
        Route::get('/logout', 'logout')->name('logout');
        Route::post('/admin-dashboard', 'dashboard')->name('dashboard');
        
    });

    // Category
    Route::group(['controller' => CategoryController::class, 'as' => '.category.'], function () {
        Route::get('/category-products/{category_id}', 'show_category_home')->name('show_prod');
        Route::get('/add-category-product',  'add_category_product')->name('add');
        Route::get('/edit-category-product/{category_product_id}', 'edit_category_product')->name('edit');
        Route::get('/delete-category-product/{category_product_id}', 'delete_category_product')->name('delete');
        Route::post('/update-category-product/{category_product_id}', 'update_category_product')->name('update');
        Route::get('/all-category-product', 'all_category_product')->name('show_all');
        Route::post('/save-category-product', 'save_category_product')->name('save');
        Route::get('/unactive-category-product/{category_product_id}', 'unactive_category_product')->name('unactive');
        Route::get('/active-category-product/{category_product_id}', 'active_category_product')->name('active');
    });

    // Brand Product
    Route::group(['controller' => BrandController::class, 'as' => '.brand.'], function () {
        Route::get('/product-brands/{brand_id}',  'show_brand_home')->name('show_brand');
        Route::get('/add-brand-product', 'add_brand_product')->name('add');
        Route::get('/edit-brand-product/{brand_product_id}', 'edit_brand_product')->name('edit');
        Route::get('/delete-brand-product/{brand_product_id}', 'delete_brand_product')->name('delete');
        Route::post('/update-brand-product/{brand_product_id}', 'update_brand_product')->name('update');
        Route::get('/all-brand-product', 'all_brand_product')->name('all');
        Route::post('/save-brand-product', 'save_brand_product')->name('save');
        Route::get('/unactive-brand-product/{brand_product_id}', 'unactive_brand_product')->name('unactive');
        Route::get('/active-brand-product/{brand_product_id}', 'active_brand_product')->name('active');
    });

    // Product
    Route::group(['controller' => ProductController::class, 'as' => '.product.'], function () {
        //Danh muc san pham trang chu
        Route::get('/product-details/{product_id}', 'details_product')->name('prod_detail');
        Route::get('/add-product', 'add_product')->name('add');
        Route::get('/edit-product/{product_id}', 'edit_product')->name('edit');
        Route::get('/delete-product/{product_id}', 'delete_product')->name('delete');
        Route::post('/update-product/{product_id}', 'update_product')->name('update');
        Route::get('/all-product', 'all_product')->name('all_prod');
        Route::post('/save-product', 'save_product')->name('save_prod');
        Route::get('/unactive-product/{product_id}', 'unactive_product')->name('unactive');
        Route::get('/active-product/{product_id}', 'active_product')->name('active');
    });

    // Cart
    Route::group(['controller' => CartController::class, 'as' => '.cart.'], function () {
        Route::post('/update-cart-quantity', 'update_cart_quantity')->name('update');
        Route::post('/save-cart', 'save_cart')->name('save');
        Route::post('/add-cart-ajax', 'add_cart_ajax')->name('add_cart');
        Route::get('/gio-hang', 'gio_hang')->name('gio_hang');
        Route::get('/show-cart', 'show_cart')->name('show_cart');
        Route::get('/delete-to-cart/{rowId}', 'delete_to_cart')->name('delete_cart');
        Route::get('/bill', 'bill')->name('bill');

    });

    // Check Out
    Route::group(['controller' => CheckoutController::class, 'as' => '.checkout.'], function () {
        Route::get('/login-checkout', 'login_checkout')->name('login_checkout');
        Route::get('/logout-checkout', 'logout_checkout')->name('logout_checkout');
        Route::post('/add-customer', 'add_customer')->name('add');
        Route::post('/order-place', 'order_place')->name('order');
        Route::post('/login-customer', 'login_customer')->name('login_customer');
        Route::get('/checkout', 'checkout')->name('checkout');
        Route::get('/payment', 'payment')->name('payment');
        Route::post('/save-checkout-customer', 'save_checkout_customer')->name('save_check_customer');
        // Order
        Route::get('/delete-order/{id}', 'order_delete')->name('order_delete');
        Route::get('/manage-order', 'manage_order')->name('manage_order');
        Route::get('/view-order/{orderId}', 'view_order')->name('view_order');
        Route::get('/delete-order/{orderId}', 'delete_order')->name('delete_order');
        // Rom Information
        Route::get('/rom-information', 'rom_information')->name('rom_information');
    });
});

Route::middleware('web')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
