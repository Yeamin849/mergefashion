<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SellsHistoryController;
use App\Http\Controllers\Admin\ServerImageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\ClientAccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\Admin\TrustedClient;
use App\Http\Controllers\WelcomeController;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/session', function () {

    $session = session()->all();

    echo "<pre>";
    print_r($session);
    echo "</pre>";

});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/product/{id}', [WelcomeController::class, 'productView'])->name('public.productView');

Route::get('/category/{pro_cat}', [WelcomeController::class, 'categoryView'])->name('public.categoryView');

Route::get('/news', [WelcomeController::class, 'blogView'])->name('public.blogView');

Route::get('/news/{id}', [WelcomeController::class, 'blog'])->name('public.blog');

Route::get('/contact', [WelcomeController::class, 'contactView'])->name('public.contactView');

Route::post('/buy-now/{id}', [WelcomeController::class, 'buyNow'])->name('public.buyNow');

Route::post('/buy-now-confirm', [WelcomeController::class, 'buyNowConfirm'])->name('public.buyNowConfirm');


// Route::get('/cart', [WelcomeController::class, 'cart'])->name('cart');

// Route::post('/add-to-cart/{id}', [WelcomeController::class, 'addToCartData'])->name('add.to.cart.data');

// Route::patch('/update-cart', [WelcomeController::class, 'update'])->name('update.cart');

// Route::delete('/remove-from-cart', [WelcomeController::class, 'remove'])->name('remove.from.cart');

// Route::get('/check-out', [WelcomeController::class, 'check_outPage'])->name('public.check_outPage');


// Route::controller(StripePaymentController::class)->group(function () {

//     Route::get('/payment', 'stripe')->name('payment');

//     Route::post('/payment', 'stripePost')->name('stripe.post');

//     Route::post('/confirm-order', 'confirmOrder')->name('confirm.order');


// });


// Route::middleware('auth')->group(function () {

//     Route::prefix('account/')->group(function () {

//         Route::get('/', [ClientAccountController::class, 'account'])->name('client.account');

//         Route::get('address_save', [ClientAccountController::class, 'address_save'])->name('client.address_save');

//         Route::get('profile', [ClientAccountController::class, 'profileView'])->name('client.profileView');

//         Route::patch('profile', [ClientAccountController::class, 'update'])->name('client.profile.update');

//         Route::delete('/profile', [ClientAccountController::class, 'destroy'])->name('client.profile.destroy');

//         Route::get('address-edit', [ClientAccountController::class, 'addressEdit'])->name('client.addressEdit');

//         Route::get('address_update', [ClientAccountController::class, 'address_update'])->name('client.address_update');

//     });
// });

// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'role:admin'])->name('admin.index');


$date = now()->format('Y');


// Only access for super_admin and admin

Route::prefix("osl-e-v-1/admin")->group(function () {    // osl-e-v-1/{$date}/admin
 
    Route::middleware(['auth', 'role:super_admin|admin|manager'])->group(function () {

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



        Route::get('/', [HomeController::class, 'index'])->name('admin.index');

        // Server All Images in 1080/720 px

        Route::get('/server_image/image-upload', [ServerImageController::class, 'index'])->name('admin.server_img.image_add');

        Route::post('/server_image/image-upload', [ServerImageController::class, 'store'])->name('image.server_img.store');

        Route::get('/server_image/images_all', [ServerImageController::class, 'images_all'])->name('admin.server_img.images_all');

        Route::delete('/server_image/delete-image/{folder}/{image}', [ServerImageController::class, 'deleteImage'])->name('server_img.deleteImage');

        Route::delete('/server_image/delete-folder/{folderName}', [ServerImageController::class, 'deleteFolder'])->name('server_img.deleteFolder');


        // Slider

        Route::get('/slider_all', [SliderController::class, 'slider_all'])->name('admin.slider_all');

        Route::get('/slider_add', [SliderController::class, 'slider_addPage'])->name('admin.slider_addPage');

        Route::post('/slider_add', [SliderController::class, 'slider_add'])->name('admin.slider_add');

        Route::get('slider_edit/{id}', [SliderController::class, 'slider_edit'])->name('admin.slider_edit');

        Route::post('slider_update/{id}', [SliderController::class, 'slider_update'])->name('admin.slider_update');

        Route::delete('slider_delete/{id}', [SliderController::class, 'slider_delete'])->name('admin.slider_delete');


        // Categories

        Route::get('categories_all', [ProductController::class, 'categories_allPage'])->name('admin.categories_allPage');

        Route::get('categories_add', [ProductController::class, 'categories_addPage'])->name('admin.categories_addPage');

        Route::post('categories_add', [ProductController::class, 'categories_add'])->name('admin.categories_add');

        Route::get('category_edit/{id}', [ProductController::class, 'category_edit'])->name('admin.category_edit');

        Route::post('category_update/{id}', [ProductController::class, 'category_update'])->name('admin.category_update');

        Route::delete('category_delete/{id}', [ProductController::class, 'category_delete'])->name('admin.category_delete');



        // Product

        Route::get('product_all', [ProductController::class, 'product_allPage'])->name('admin.product_allPage');

        Route::get('product_add', [ProductController::class, 'product_addPage'])->name('admin.product_addPage');

        Route::post('product_add', [ProductController::class, 'product_add'])->name('admin.product_add');

        Route::get('product_edit/{id}', [ProductController::class, 'product_edit'])->name('admin.product_edit');

        Route::post('product_update/{id}', [ProductController::class, 'product_update'])->name('admin.product_update');

        Route::delete('product_delete/{id}', [ProductController::class, 'product_delete'])->name('admin.product_delete');

        Route::get('product_feature/{id}/{status}', [ProductController::class, 'product_feature'])->name('admin.product_feature');

        Route::get('product_status/{id}/{status}', [ProductController::class, 'product_status'])->name('admin.product_status');


        Route::prefix('product/')->group(function () {

            Route::get('stock_all/{pro_id}', [ProductController::class, 'pro_stockPage'])->name('admin.pro_stockPage');

            Route::get('stock_add/{pro_id}', [ProductController::class, 'pro_stock_addPage'])->name('admin.pro_stock_addPage');

            Route::post('stock_add/{pro_id}', [ProductController::class, 'pro_stock_add'])->name('admin.pro_stock_add');

            Route::get('stock_edit/{id}', [ProductController::class, 'pro_stock_edit'])->name('admin.pro_stock_edit');

            Route::post('stock_update/{id}', [ProductController::class, 'pro_stock_update'])->name('admin.pro_stock_update');

            Route::delete('stock_delete/{id}', [ProductController::class, 'pro_stock_delete'])->name('admin.pro_stock_delete');


            // Product Images in 300/200 px

            Route::get('image-upload', [ImageController::class, 'index'])->name('admin.image_add');

            Route::post('image-upload', [ImageController::class, 'store'])->name('image.store');

            Route::get('images_all', [ImageController::class, 'images_all'])->name('admin.images_all');

            Route::delete('delete-image/{folder}/{image}', [ImageController::class, 'deleteImage'])->name('deleteImage');

            Route::delete('delete-folder/{folderName}', [ImageController::class, 'deleteFolder'])->name('deleteFolder');

        });


        // Blog section

        Route::get('blog_all', [BlogController::class, 'blog_allPage'])->name('admin.blog_allPage');

        Route::get('blog_add', [BlogController::class, 'blog_addPage'])->name('admin.blog_addPage');

        Route::post('blog_add', [BlogController::class, 'blog_add'])->name('admin.blog_add');

        Route::get('blog_edit/{id}', [BlogController::class, 'blog_edit'])->name('admin.blog_edit');

        Route::post('blog_update/{id}', [BlogController::class, 'blog_update'])->name('admin.blog_update');

        Route::delete('blog_delete/{id}', [BlogController::class, 'blog_delete'])->name('admin.blog_delete');

        Route::get('blog_status/{id}/{status}', [BlogController::class, 'blog_status'])->name('admin.blog_status');




        // Sells section

        Route::get('sells_history', [SellsHistoryController::class, 'sells_history'])->name('admin.sells_history');

        Route::get('invoice/{id}', [SellsHistoryController::class, 'invoice'])->name('admin.invoice');

        Route::get('sells_history/status/{id}/{delivery_status}', [SellsHistoryController::class, 'delivery_status'])->name('admin.delivery_status');

        Route::delete('sells_history/{id}', [SellsHistoryController::class, 'delete_order'])->name('admin.delete_order');

        // Route::get('client_list', [SellsHistoryController::class, 'client_list'])->name('admin.client_list');

        Route::get('trusted_client', [TrustedClient::class, 'trusted_client'])->name('admin.trusted_client');

        Route::get('trusted_client_add', [TrustedClient::class, 'trusted_client_addPage'])->name('admin.trusted_client_addPage');

        Route::post('trusted_client_add', [TrustedClient::class, 'trusted_client_add'])->name('admin.trusted_client_add');

        Route::get('trusted_client_edit/{id}', [TrustedClient::class, 'trusted_client_edit'])->name('admin.trusted_client_edit');

        Route::post('trusted_client_update/{id}', [TrustedClient::class, 'trusted_client_update'])->name('admin.trusted_client_update');

        Route::delete('trusted_client_delete/{id}', [TrustedClient::class, 'trusted_client_delete'])->name('admin.trusted_client_delete');

    });


    // Only access for super_admin


    Route::middleware(['auth', 'role:super_admin'])->group(function () {


        Route::get('/role', [RoleController::class, 'role'])->name('admin.role');

        Route::get('/role/create', [RoleController::class, 'roleCreatePage'])->name('admin.role.createPage');

        Route::post('/role/create', [RoleController::class, 'create'])->name('admin.role.create');

        Route::get('/role/edit/{id}', [RoleController::class, 'roleEditPage'])->name('admin.role.edit');

        Route::put('/role/update/{id}', [RoleController::class, 'roleUpdate'])->name('admin.role.update');

        Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('admin.role.permissions');

        Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('admin.role.permissions.revoke');



        // Permissions

        Route::get('/permission', [PermissionController::class, 'permission'])->name('admin.permission');

        Route::get('/permission/create', [PermissionController::class, 'permissionCreatePage'])->name('admin.permission.createPage');

        Route::post('/permission/create', [PermissionController::class, 'permissionCreate'])->name('admin.permission.create');

        Route::get('/permission/edit/{id}', [PermissionController::class, 'permissionEditPage'])->name('admin.permission.edit');

        Route::put('/permission/update/{id}', [PermissionController::class, 'permissionUpdate'])->name('admin.permission.update');

        Route::post('/permissions/{permission}/roles', [PermissionController::class, 'givePermission'])->name('admin.permissions.role');

        Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('admin.permissions.roles.revoke');


        // Users

        Route::get('/users', [UserController::class, 'user'])->name('admin.user');

        Route::get('/users/{user}', [UserController::class, 'show'])->name('admin.users.show');

        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

        Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('admin.users.roles');

        Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('admin.users.roles.remove');

        Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('admin.users.permissions');

        Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('admin.users.permissions.revoke');

        Route::get('/check-permissions', [PermissionController::class, 'checkPer']);

    });


    require __DIR__ . '/auth.php';

});









