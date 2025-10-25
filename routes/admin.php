<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('','App\Http\Controllers\Backend\BackendController@dashboard')->name('dashboard');

    // route to get head master index page
    Route::get('head-master','App\Http\Controllers\Backend\HeadMasterController@index')
    ->name('head-master.index');
   // route to get head master list using ajax request
    Route::get('shead-master/list',
    'App\Http\Controllers\Backend\HeadMasterController@getHeadMasters')
    ->name('head-master.list');
   //route for headmaster input form
    Route::get('head-master/create','App\Http\Controllers\Backend\HeadMasterController@create')
    ->name('head-master.create');
    //route to add headmaster
    Route::post('head-master/create','App\Http\Controllers\Backend\HeadMasterController@store')
    ->name('head-master.create');

    //route to edit head master
    Route::get('head-master/edit/{id}','App\Http\Controllers\Backend\HeadMasterController@edit')
    ->name('head-master.edit');
    //route to update headmaster
    Route::post('head-master/edit/{id}','App\Http\Controllers\Backend\HeadMasterController@update')
    ->name('head-master.update');
    //route to delete headmaster

    Route::get('head-master/delete/{id}','App\Http\Controllers\Backend\HeadMasterController@delete')
    ->name('head-master.delete');

});

