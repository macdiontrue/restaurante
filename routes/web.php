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
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::resource('categorias','CategoriaController');
Route::resource('cidades','CidadeController');
Route::resource('clientes','ClienteController');
Route::resource('enderecos','Endereco_clienteController');
Route::resource('fpagamentos','Forma_pagamentoController');
Route::resource('fpedidos','Forma_pedidoController');
Route::resource('lclientes','Login_clienteController');
Route::resource('lrestaurantes','Login_restauranteController');
Route::resource('pedidos','PedidoController');
Route::resource('pratos','PratoController');
Route::resource('proprietarios','ProprietarioController');
Route::resource('restaurantes','RestauranteController');
Route::resource('cozinhas','Tipo_cozinhaController');