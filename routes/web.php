<?php
use App\Http\Middleware\CheckAuth;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use App\Product;
use App\Category;


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
    $products=Product::simplePaginate(20);
    $categories=Category::all();
    return view('homepage',['products'=>$products,'categories'=>$categories]);
});

Auth::routes();
Route::get('/Page', function () {
    return view('Page');
});

Route::get('/home', 'HomeController@index')->name('home');



Route::get('Product/create', 'ProductController@create')->middleware(CheckAuth::class);
Route::get('/Product/{id}/edit','ProductController@edit')->middleware(CheckAuth::class);
Route::resource('Product', 'ProductController');

Route::resource('Category', 'CategoryController')->middleware(CheckAdmin::class);
Route::resource('Subcategory', 'SubcategoryController')->middleware(CheckAdmin::class);

Route::get('/subcategory/{id}','ProductController@getsubcategory');


