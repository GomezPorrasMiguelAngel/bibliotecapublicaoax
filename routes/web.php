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

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');

Route::get('/error', 'ExceptionController@index');

Route::get('vertabla','UsuarioController@ver_tabla')->middleware('verified');
Route::put('eliminar_datos/{id}', 'UsuarioController@eliminar_datos');
Route::put('actualizarp/{id}','UsuarioController@actualizar');
Route::get('actualizar/{id}', 'UsuarioController@edit_datos')->middleware('verified');
Route::get('logout', 'Auth\LoginController@logout');



Route::get('/', function () {     return view('home'); })->name('home')->middleware('verified');

//test register book
Route::get('/registro_libro', function () {    return view('registro_libro');})->middleware('verified')/*->name('registro_libro')->middleware('verified')*/;
//registrar libro
Route::post('/registrar_libro', 'RegistroLibroController@register_book');
Route::get('/listar_estantes', 'RegistroLibroController@listado_estantes');
Route::get('/listar_libros', 'RegistroPrestamoController@listado_libros');
Route::get('/listar_usuarios', 'RegistroPrestamoController@usuarios');

//TODO busqueda de libros

//regresa la vista del buscador de libros
Route::get('/buscarlibro', 'BuscadorControlador@buscar_view')->middleware('verified');
//ruta usado internamente para buscar live
Route::post('/observador', 'BuscadorControlador@buscar');


//CRUD UsuarioLibro
Route::get('/registro_ulibro', function () {    return view('registro_ulibro');})->middleware('verified')/*->name('registro_libro')->middleware('verified')*/;
//registrar libro
Route::post('/registrar_ulibro', 'UsuarioLibroController@register_ubook');
Route::get('vertablaL','UsuarioLibroController@ver_tablaL')->middleware('verified');
Route::put('eliminar_datosL/{id}', 'UsuarioLibroController@eliminar_datosL');
Route::put('actualizarpL/{id}','UsuarioLibroController@actualizarL');
Route::get('actualizarL/{id}', 'UsuarioLibroController@edit_datosL')->middleware('verified');

// Prestamo libros
Route::get('/registro_plibro', function () {    return view('registro_plibro');})->middleware('verified')/*->name('registro_libro')->middleware('verified')*/;
Route::put('actualizarpP/{id}','RegistroPrestamoController@actualizarP');
Route::get('actualizarP/{id}', 'RegistroPrestamoController@edit_datosP')->middleware('verified');
//registrar libro
Route::post('/registrar_plibro', 'RegistroPrestamoController@register_pbook');
Route::get('vertablaP','RegistroPrestamoController@ver_tablaP')->middleware('verified');




Route::get('/activity', 'TelegramController@updatedActivity');