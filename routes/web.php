<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


/* RUTAS PARA INGRESO Y REGISTRO DE USUARIO Y CLIENTE */


Route::get('/', 'UserController@home')->name('user.home');

Route::get('/login', 'UserController@verLogin')->name('user.verLogin'); //para desplegar la vista del Login
Route::post('/ingresar', 'UserController@logearse')->name('user.logearse'); //post

Route::get('/cerrarSesion','UserController@cerrarSesion')->name('user.cerrarSesion');




Route::get('/Usuarios/Listar','UsuarioController@Listar')->name('Usuarios.Listar');

Route::get('/Usuarios/Crear','UsuarioController@Crear')->name('Usuarios.Crear');
Route::get('/Usuarios/Editar','UsuarioController@listar')->name('Usuarios.Editar');

Route::post('/Usuarios/Guardar','UsuarioController@Guardar')->name('Usuarios.Guardar');