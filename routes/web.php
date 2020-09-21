<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('vouchers', [
    'as' => 'vouchers', 'uses' => 'VoucherController@show'
]);

$router->post('useVoucher', [
    'as' => 'useVoucher', 'uses' => 'VoucherController@useVoucher'
]);

//CADASTRAR OFERTAS - PARAMETROS - 
//nome - porcentagem - dt_expiracao
$router->post('cadastraOferta', [
    'as' => 'ofertas', 'uses' => 'OfertaController@store'
]);
