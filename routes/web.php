<?php

use Illuminate\Support\Facades\Route;
/* 
    
Verb        URI	                    Action	Route Name
GET	        /photos	                index	photos.index
GET	        /photos/create	        create	photos.create
POST        /photos	                store	photos.store
GET	        /photos/{photo}	        show	photos.show
GET	        /photos/{photo}/edit	edit	photos.edit
PUT/PATCH	/photos/{photo}	        update	photos.update
DELETE	    /photos/{photo}	        destroy	photos.destroy


*/
Route::get('/', function () { return view('usuarios.cadastro'); });
Route::post('/usuario', 'App\Http\Controllers\UsuariosController@store')->name('userRoute.store');
Route::post('/funcionario', 'App\Http\Controllers\FuncionariosController@store')->name('addFuncionario.store');