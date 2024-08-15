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
//requisições do tipo get
Route::get('/', function () { return view('usuarios.cadastro'); });

//requisições recebidas de formulários
Route::post('/usuario', 'App\Http\Controllers\UsuariosController@store')->name('userRoute.store');
Route::post('/funcionario', 'App\Http\Controllers\FuncionariosController@store')->name('createFuncionario.store');
Route::post('/meiospagamento', 'App\Http\Controllers\Meios_PagamentosController@store')->name('createMeiosPagamento.store');
Route::post('/pagamento', 'App\Http\Controllers\PagamentosController@store')->name('createPagamento.store');
Route::post('/venda', 'App\Http\Controllers\VendasController@store')->name('createVenda.store');
Route::post('/produto', 'App\Http\Controllers\ProdutosController@store')->name('createProduto.store');
Route::post('/addProduto', 'App\Http\Controllers\ProdutosController@addProduto')->name('addProduto.store');
