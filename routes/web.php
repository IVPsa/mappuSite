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
	return view('carrusel');
})->name('home');

Route::get('contacto', function () {
	return view('contacto');
})->name('contacto');

Route::get('escritorio', function () {
	return view('escritorio-page');
})->name('escritorio');

Route::get('aplicaciones-mappu', function () {
	return view('apps-mappu-page');
})->name('apps.mappu');

Route::get('servicios-mappu', function () {
	return view('servicios-mappu');
})->name('asesoria.smart');

Route::get('sitios-web', function () {
	return view('vermas-sitiosweb');
})->name('vermas.web');

Route::get('tiendas-virtuales', function () {
	return view('tiendas-virtuales');
})->name('tiendas.virtuales');

Route::get('desarrollo-de-aplicaciones', function () {
	return view('apps-medida-page');
})->name('apps.medida');

Route::get('somos-mappu', function () {
	return view('somos-mappu');
})->name('somos.mappu');

Route::post('contacto/enviarPersona','ContactoController@enviarMailPersona')->name('enviar.contacto.persona');

Route::post('contacto/enviarEmpresa','ContactoController@enviarMailEmpresa')->name('enviar.contacto.empresa');

Route::post('contacto/beautifulMail','ContactoController@beautifulMail')->name('beautifulMail');

Route::get('/test', function()
{
	$beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
	$beautymail->send('emails.welcome', [], function($message)
	{
		$message			
		->from('hola@mappu.cl')
		->to('riquelme.nan@gmail.com')
		->to('hola@mappu.cl')
		->subject('Contacto mAppu');
	});
});
