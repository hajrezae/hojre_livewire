<?php

use App\Http\Controllers\Admin\Product\Attribute\AttributeController;
use App\Http\Controllers\Admin\Product\Attribute\AttributeValueController;
use App\Http\Controllers\Admin\Product\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\TagController;
use App\Http\Controllers\Admin\User\AddressController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Livewire\Admin\Product\Product\Create;
use App\Http\Livewire\Admin\Product\Product\Edit;
use App\Http\Livewire\Admin\Product\Product\Index;
use App\Http\Livewire\Admin\Shop\Coupon\CouponIndex;
use App\Http\Livewire\Admin\Shop\Discount\DiscountIndex;
use App\Http\Livewire\Admin\Shop\Supplier\SupplierIndex;
use App\Http\Livewire\Admin\Shop\Tax\TaxIndex;
use App\Http\Livewire\Admin\User\Role\RoleIndex;
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

//Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
	//User Routes
	Route::resource('user', UserController::class);
	Route::get('role', RoleIndex::class)->name('role.index');
	Route::resource('user.address', AddressController::class);

	//Product Routes
	Route::get('product', Index::class)->name('product.index');
	Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
	Route::get('product/{product}/edit', Edit::class)->name('product.edit');

	Route::resource('category', CategoryController::class);
	Route::resource('attribute', AttributeController::class);
	Route::resource('attribute.attributeValue', AttributeValueController::class);
	Route::resource('tag', TagController::class);

	//Shop Routes
	Route::get('supplier', SupplierIndex::class)->name('supplier.index');
	Route::get('discount', DiscountIndex::class)->name('discount.index');
	Route::get('coupon', CouponIndex::class)->name('coupon.index');
	Route::get('tax', TaxIndex::class)->name('tax.index');
});

Route::post('qq', function () {

})->name('quick-search');

//Store Routes