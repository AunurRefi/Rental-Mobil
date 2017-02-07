<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);


Route::get('/',['as'=>'home','uses'=>'WelcomeController@index']);
Route::get('pinjaman',['as'=>'pinjaman','uses'=>'MobilController@index']);
Route::get('tambah',['as'=>'tambah','uses'=>'MobilController@create']);
Route::get('ambil',['as'=>'ambil','uses'=>'MobilController@ambil']);
Route::get('pengembalian',['as'=>'pengembalian','uses'=>'MobilController@pengembalian']);
Route::get('laporan',['as'=>'laporan','uses'=>'MobilController@laporan']);
Route::get('merek',['as'=>'merek','uses'=>'MasterController@merek']);
Route::get('inmerek',['as'=>'inmerek','uses'=>'MasterController@inmerek']);
Route::get('mobil',['as'=>'mobil','uses'=>'MasterController@mobil']);
Route::get('inmobil',['as'=>'inmobil','uses'=>'MasterController@inmobil']);
Route::get('/dash-board',['as'=>'dash-board','uses'=>"DashBoardController@index"]);
Route::get('merek/delete/{id}', 'MasterController@destroy');
Route::get('mobil/delete/{id}', 'MasterController@delete');
Route::get('pinjaman/delete/{id}', 'MasterController@deletee');
Route::get('ambil/delete/{id}', 'MasterController@deleteee');
Route::get('pengembalian/delete/{id}', 'MasterController@delet');
Route::get('edmerek/{id}', 'MasterController@edit');
Route::get('edmobil/{id}', 'MasterController@editmobil');
Route::get('edpinjaman/{id}', 'MasterController@editpinjaman');
Route::get('edambil/{id}', 'MasterController@editambil');
Route::get('edpengembalian/{id}', 'MasterController@editpengembalian');

Route::post('/getdatamobil','MobilController@ajaxdatamobil');
Route::any('/gethargamobil','MobilController@ajaxhargamobil');

Route::post('merkinput','CrudController@create');
Route::post('mobilinput','CrudController@store');
Route::post('pinjaminput','CrudController@createe');
Route::post('edmerek/{id}','CrudController@update');
Route::post('edmobil/{id}','CrudController@updatemobil');
Route::post('edpinjaman/{id}','CrudController@updatepinjaman');
Route::post('edambil/{id}','CrudController@updateambil');
Route::post('edpengembalian/{id}','CrudController@updatepengembalian');

// Route::controller('/','Auth\AuthController');

Route::get('login','Auth\AuthController@getLogin');
Route::post('login','Auth\AuthController@postLogin');

Route::get('logout','Auth\AuthController@getLogout');

Route::any('/pdf/{id}','WelcomeController@showpdf');
Route::any('/pdfambil/{id}','WelcomeController@pdfambil');
Route::any('/pdfkembali/{id}','WelcomeController@pdfkembali');
Route::any('/pdflapor/{id}','WelcomeController@pdflapor');
Route::any('pdflaporan','WelcomeController@pdflaporan');
Route::get('/{slug}','WelcomeController@show');

Route::get('checkpdf/{value?}',function($value='Hello')
{
	$pdf = App::make('dompdf.wrapper');
	$pdf->loadHTML('<h1>'.$value.'<h1>');
	return $pdf->stream();

	});
