<?php

Route::get('/', function () {
    return redirect()->route('empresa.index');
});


Route::resource('empresa','EmpresaController');

Route::resource('puesto','PuestoController');

Route::resource('cargo','CargoController');

Route::get('/puestosEmpresa/{empresa}', 'PuestoController@listado')->name('puesto.listado');

Auth::routes();
