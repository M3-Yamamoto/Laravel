 <?php

use App\Recepie;
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

// app()->bind('test',function(){
// 	return new \App\test("some important key!");
// });

Route::get('/',function(){
	dd(app('test'));
});

Route::resource('recepie','RecepieController');
Route::get('home','HomeController@index');

// Route::get('recepie','RecepieController@index');
// Route::get('recepie/create','RecepieController@createRecepieForm');
// Route::get('recepie/{id}','RecepieController@show');
// Route::post('recepie','RecepieController@create');
// Route::get('recepie/{id}/edit','RecepieController@edit');
// Route::patch('recepie/{id}','RecepieController@update');
// Route::delete('recepie/{id}','RecepieController@delete');




Auth::routes();


