<?php

use Illuminate\Support\Facades\App;
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
Route::get('/','App\Http\Controllers\UsuariosController@index');

//requisições recebidas de formulários
Route::post('/usuario', 'App\Http\Controllers\UsuariosController@store')->name('userRoute.store');
Route::post('/funcionario', 'App\Http\Controllers\FuncionariosController@store')->name('createFuncionario.store');
Route::post('/meiospagamento', 'App\Http\Controllers\Meios_PagamentosController@store')->name('createMeiosPagamento.store');
Route::post('/pagamento', 'App\Http\Controllers\PagamentosController@store')->name('createPagamento.store');
Route::post('/venda', 'App\Http\Controllers\VendasController@store')->name('createVenda.store');
Route::post('/produto', 'App\Http\Controllers\ProdutosController@store')->name('createProduto.store');
Route::post('/addProduto', 'App\Http\Controllers\ProdutosController@addProduto')->name('addProduto.store');
Route::post('/caixa', 'App\Http\Controllers\CaixaController@store')->name('createCaixa.store');
Route::post('/fecharCaixa', 'App\Http\Controllers\CaixaController@update')->name('caixa.update');
Route::post('/permissoes', 'App\Http\Controllers\PermissoesController@store')->name('createPermissao.store');
Route::post('/access', 'App\Http\Controllers\AccessController@auth')->name('createAccess.store');