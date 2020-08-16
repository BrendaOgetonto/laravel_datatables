<?php
use App\Models\Stock_mobile;
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
    return view('welcome');
});
Route::get ( '/data', function () {
    $data = Stock_mobile::all ();
    return view ( 'datatable1' )->withData ( $data );
} );

// Route::get('create', 'StockMobileController@create');
// Route::get('index', 'StockMobileController@index');
Route::get('stock_mobile', ['uses'=>'StockMobileController@index', 'as'=>'stock_mobile.index']);
Route::get('export', 'StockMobileController@create');
