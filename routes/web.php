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

// Route::resource('ROUTE', 'PATH_CONTROLLER'); 
Route::resource('/painel/produtos', 'Painel\ProdutoController');

/*
	Group Route Site
*/
Route::group(['namespace' => 'Site'], function () {
	//Route::get('PATH','NAMESPACE\NAME_CONTROLLER@NAME_FUNCTION');
	Route::get('/','SiteController@index');
	Route::get('/contato','SiteController@contato');
	Route::get('/categoria/{id?}','SiteController@categoria');
});

/*
	Group Route Painel Administrator
*/
Route::group(['namespace' => 'Painel'], function () {
	Route::get('/painel','PainelController@index');
	Route::resource('/painel/alunos','AlunoController');
	/* --- */
	Route::get('/painel/cadastro','ProdutoController@cadastro');
	Route::get('/painel/usuarios','PainelController@usuarios');
	Route::get('/painel/professores','PainelController@professores');
	
});


/* Routes Grupos */
//Route::group(['prefix' => '/painel', 'middleware' => 'auth'], function () {
// Route::group(['prefix' => '/painel'], function () {
// 	Route::get('/usuarios', function () {
// 		return "Usuarios";
// 	});
// 	Route::get('/financeiro', function () {
// 		return "Financeiro";
// 	});
// 	Route::get('/', function () {
// 		return "Dashboard";
// 	});
// });


/* Routes com Parametros */
// Route::get('/categoria2/{idCat?}', function ($idCat = 'sem') {
// 	return "Posts da categoria " . $idCat;
// });

// Route::get('/categoria/{idCat}', function ($idCat) {
// 	return "Posts da categoria " . $idCat;
// });

/* Routes Nomeada */

// Route::get('/nomeada', function () {
// 	return redirect()->route('route.home');
// });


/* Routes Redirect */

// Route::get('/redirect', function () {
// 	return redirect('/');
// });

/* Routes Match */

// Route::match(['GET','POST'], '/misturado', function () {
// 	return "requisicao misturada";
// });


/* Routes ANY */

// Route::any('/any', function () {
// 	return "qualquer tipo de metodo";
// });


/* Routes POST */

// Route::post('/', function () {
// 	return "foi o post";
// });

/* Routes GET */

// Route::get('/', function () {
//     return view('welcome');
// })->name('route.home');

// Route::get('/alunos', function () {
//     return view('alunos');
// });

// Route::get('/alunos/aluno', function () {
//     return view('aluno');
// });
