<?php

use Illuminate\Support\Facades\Route;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

//payment form
Route::get('/payment', 'PaymentController@index')->name('payment');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('/status', 'PaymentController@getPaymentStatus')->name('status');

//Route::get('/wel', function () {
//    return view('welcome');
//});
Route::get('/shop', 'CartController@shop')->name('shop');
//Route::get('/', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
Route::get('/home1', function () {
    return view('Frontend/index');
});




Route::get('/p', function () {
    return view('home');
});
//Route::get('/contact', function () {
//    return view('Frontend/Car/car-contact');
//});
//Route::get('/index1', function () {
//    return view('Frontend/Car/index');
//});
//Route::get('/job', function () {
//    return view('Frontend/Job/form');
//});
//Route::get('/list', function () {
//    return view('Frontend/Real-state/listing');
//});


Route::get('/','IndexController@index')->name('/');
Route::resource('car_contacts','ContactController');
Route::get('car_list','CarController@index')->name('carLists');
Route::get('car/{carType}', 'CarController@carType');
Route::get('autoLists', 'AutolistController@index')->name('autoLists');
Route::get('jobLists', 'JobListController@index')->name('jobLists');//joblist
Route::post('jobByFiltering','JobListController@jobByCategory')->name('jobFiltering');//filtering//
Route::post('shopByFiltering','ProductListController@shopByCategory')->name('shopByFiltering');//filtering//

//Route::get('car_list','CarController@carList')->name('car_list');
Route::resource('jobApplicants','JobApplicantController');//job
Route::resource('reserves','ReserveController');
Route::post('carByCategory','CarController@carByCategory')->name('carByCategory');
Route::get('propertyLists', 'PropertyListController@index')->name('propertyLists');
Route::post('propertyByFiltering','PropertyListController@propertyFiltering')->name('propertyFiltering');//filtering//
Route::get('productLists', 'ProductListController@index')->name('productLists');//product
Route::resource('products','ProductController');//
Route::resource('properties','PropertyController');//real-state//
Route::resource('car_specifications','CarSpecificationController');
Route::resource('jobPosts','JobPostController');//job
Route::resource('autos','AutosController');//Auto

//Route::resource('categories','CategoryController');//for-product//
//Route::resource('brands','BrandController');//brand
//Route::resource('products','ProductController');//

//Route::resource('checkout','CheckoutController');
Auth::routes(['verify' => true]);

//Route::get('/', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']],function (){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('users', 'UserController');

    Route::resource('roles', 'RoleController');

    Route::resource('permissions', 'PermissionController');

    Route::resource('posts', 'PostController');



    Route::get('create_role_permission',function (){
        $role =Role::create(['name' => 'Administer']);
        $permission = Permission::create(['name' => 'Administer and Permission']);
        auth()->user()->assignRole('Administer');
        auth()->user()->givePermissionTo('Administer and Permission');
    });
    Route::resource('checkout','CheckoutController');
    Route::resource('categories','CategoryController');//for-product//
    Route::resource('brands','BrandController');//brand


    Route::resource('car_models','CarModelController');
    Route::resource('car_brands','CarBrandController');
    Route::resource('car_galleries','CarGalleryController');

    Route::resource('locations','LocationController');//real-state//
    Route::resource('autoCategories','AutoCategoryController');//Auto

    Route::resource('jobCategories','JobCategoryController');//job

});