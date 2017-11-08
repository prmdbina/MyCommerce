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

Route::get('/', function () {
    
    $category_list = DB::select('select categoryName, categoryImage from categories');
    
    // for($i = 1; $i <= 10; $i++){
    //     $obj = new stdClass;
    //     $obj->category_name = "Category " . $i;

    //     array_push($category_list, $obj);
    // }

    return view('home', ["categories" => $category_list]);

});

Route::group(['prefix' => 'products'], function() {
    Route::get('/all', function () {
        return view('product.product-many');
    });
    Route::get('/detail', function () {
        return view('product.product-single');
    });
    Route::get('/bycategory', function () {
        return view('product.product-many');
    });
});

Route::group(['prefix' => 'orders'], function() {
    Route::get('/addtocart', function () {
        return view('order.cart');
    });

    Route::get('/checkout', function () {
        return view('order.checkout');
    });

    Route::post('/checkout', function () {
        return view('order.checkout');
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
