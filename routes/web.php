<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SiteController@home')->name('index');
Route::get('/about', 'SiteController@about')->name('about');
// Route::get('/servicos', 'SiteController@servicos')->name('servicos');
Route::get('/login', 'SiteController@login');

Route::get('/loginCliente', 'SiteController@loginCliente')->name('loginCliente');
Route::get('/descricaoServico', 'SiteController@descricaoServico')->name('descricaoServico');
Route::get('/cadastrarServicos', 'SiteController@cadastrarServicos')->name('cadastrarServicos');
Route::get('/home', 'SiteController@homeCadastrarServicos')->name('home');
Route::get('/servicosCadastrados', 'SiteController@servicosCadastrados')->name('servicosCadastrados');
Route::get('/logout', 'SiteController@logout')->name('logout');
Route::get('/cadastro', 'SiteController@cadastro')->name('cadastro');
Route::get('/cadastroFornecedor', 'SiteController@cadastroFornecedor')->name('cadastroFornecedor');

Route::post('/servicos', 'CadastroServicoController@store');
Route::get('/servicos', 'ServicoSolicitadoController@servicos')->name('servicos');
Route::post('/cadastro', 'ClienteController@cadastrarCliente');
Route::post('/cadastroFornecedor', 'FornecedorController@cadastrarFornecedor');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

