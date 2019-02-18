<?php
use Illuminate\Support\Facades\Input;
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
Route::group(['middleware' => 'auth'], function(){
	Route::get('catalog', 'CatalogController@getIndex');
	Route::get('catalog/show/{id}', 'CatalogController@getShow');
	Route::get('catalog/create', 'CatalogController@getCreate');
	Route::get('catalog/edit/{id}', 'CatalogController@getEdit');

	Route::post('catalog/create', 'CatalogController@postCreate');
	Route::put('catalog/edit/{id}', 'CatalogController@putEdit');

	//Route::get('/user', 'UserController@getIndex');
	//Route::get('/user/show/{id}', 'UserController@getShow');
	//Route::get('/user/create', 'UserController@getCreate');
	//Route::get('/user/edit/{id}', 'UserController@getEdit');

	//Route::post('/user/create', 'UserController@postCreate');
	//Route::put('/user/edit/{id}', 'UserController@putEdit');

//	Route::get('searchForm/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
 //   if (empty(Input::get('search'))) return redirect()->back();
    
 //   $search = urlencode(e(Input::get('search')));
//    $route = "searchForm/search/$search";
//    return redirect($route);
//	});
//	Route::get("searchForm/search/{search}", "HomeController@search");
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index');
//Route::get('/', 'HomeController@getHome');
//Route::get('/home', 'HomeController@getHome')->name('home');








