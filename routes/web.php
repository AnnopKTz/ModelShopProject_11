<?php

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

//ORDERs
Route::get('/orders','OrderController@index');
Route::get('/orders/orderDetail/{orderNumber}','OrderController@detail');
Route::get('/orders/editType/{orderNumber},{statusType}','OrderController@editType');

//PREORDERS
Route::get('/preorders','OrderController@preOrder');


//PRODUCTS
Route::get('/products', 'ProductController@show');
Route::post('/products/storeProduct','ProductController@store');
Route::get('/products/addProduct','ProductController@addProduct');
Route::get('/products/moreProduct/{productCode}','ProductController@edit');
Route::post('/products/editProduct/{productCode}','ProductController@editProduct');
Route::get('/products/deleteProduct/{productCode}','ProductController@deleteProduct');

//CUSTOMERS
Route::get('/customers','PersonController@showCustomer');
Route::get('/customers/addCustomer','PersonController@addCustomer');
Route::get('/customers/deleteCustomer/{customerNumber}','PersonController@deleteCustomer');
Route::get('/customers/CustomerDetail/{customerNumber}','PersonController@customerDetail');
Route::post('/customers/editCustomer/{customerNumber}','PersonController@editCustomer');
Route::post('/customers/storeCustomer/{employeeNumber}','PersonController@insertCustomer');

//ADDRESSES
Route::get('/customers/deleteAddress/{addressesID}','PersonController@deleteAddress');
Route::post('/customers/addAddresses/{customerNumber}','PersonController@addAddress');
Route::post('/customers/editAddress/{addressesID}','PersonController@editAddress');

//EMPLOYEES
Route::post('/create', 'PersonController@insert');
Route::post('/employees/updateEmployee/{employeeNumber}', 'PersonController@update');
Route::get('/employees','PersonController@showEmployee');
Route::get('/registerEmp', function () {
    return view('person.register');
});

Route::get('/customers/deleteEmployee/{employeeNumber}','PersonController@deleteEmployee');
Route::get('/employees/updateEmployee/{employeeNumber}','PersonController@updateEmployee');

//CATEGORY & MAIN
// Route::get('/','ProductController@index');
Route::get('/show/productLine','ProductController@showProductline');
Route::get('/show/scale','ProductController@showScale');
Route::get('/','ProductController@showScale');
Route::get('/show/vendor','ProductController@showVendor');
Route::get('/show/pre_order','ProductController@showPreorder');
Route::get('/catalog','ProductController@showProductline');


//LOGIN
Route::get('/login', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//cart
Route::get('/products/removeItem/{productCode}','ProductController@removeItemInCart');
Route::get('/products/showCart','ProductController@showCart');
Route::get('/products/addToCart/{productCode}','ProductController@addProductToCart');
Route::get('/products/increaseItem/{productCode}','ProductController@increaseItem');
Route::get('/products/decreaseItem/{productCode}','ProductController@decreaseItem');

Route::get('/payments','OrderController@payment');

//payment
Route::get('/payments','OrderController@payment');
Route::post('/payments/addPayment','OrderController@addPayment');