<?php

use Illuminate\Support\Facades\Route;


// Route::view('/', 'home', ['nombre' => 'Felipe'])->name('home');
Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('projects', 'ProjectController')
->names('projects')
->parameters(['portafolio' => 'project']);

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

Auth::routes(['register' => false]);

// Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
// route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
// route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
// route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
// route::post('/portafolio', 'ProjectController@store')->name('projects.store');
// route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
// route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

//Route::resource('proyectos', 'ProjectController');

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// //traspaso de parametros

// Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
//     return "Saludos " .$nombre;
// });

// //nombres de rutas

// Route::get('contactos', function () {
//     return "seccion contacto";
// })->name('nombreruta');

// Route::get('/', function () {
//     echo "<a href='" . route('nombreruta') ."'>contacto 1</a><br>";
//     echo "<a href='" . route('nombreruta') ."'>contacto 2</a><br>";
//     echo "<a href='" . route('nombreruta') ."'>contacto 3</a><br>";
//     echo "<a href='" . route('nombreruta') ."'>contacto 4</a><br>";
//     echo "<a href='" . route('nombreruta') ."'>contacto 5</a><br>";
// });





