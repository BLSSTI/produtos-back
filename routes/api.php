<?php
//Route::apiResource('produtos','ProdutosController');

Route::prefix('produtos')->group(function () {
    Route::post('/', 'ProdutoController@store');
    Route::get('/', 'ProdutoController@index');
    Route::get('/{id}', 'ProdutoController@show');
    Route::put('/{id}', 'ProdutoController@update');
    Route::delete('/{id}', 'ProdutoController@destroy');
});