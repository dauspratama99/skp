<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'UserLoginController@index')->name('login.index');
Route::post('userLogin', 'UserLoginController@postLogin')->name('user.postlogin');
Route::get('logout', 'UserLoginController@logout')->name('login.logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('kelolauser', 'UserController');
    // Route::resource('targettahunan', 'TargetController');
    // Route::resource('realisasitahunan', 'RealiationController');

    Route::group(['middleware' => ['checkrole:Admin']], function () {
        Route::resource('unitkerja', 'UnitController');
        Route::resource('daftarjabatan', 'PositionController');
        Route::resource('daftarpangkat', 'RankGroupController');
        Route::resource('kelolaperiode', 'PeriodeController');
        // Route::resource('kelolaoutput', 'OutputController');
        // Ouput
        Route::get('output', 'OutputController@index')->name('output');
        Route::get('output/create', 'OutputController@create')->name('output.create');
        Route::post('output', 'OutputController@store')->name('output.store');
        Route::get('output/{output}', 'OutputController@edit')->name('output.edit');
        Route::put('output/{output}', 'OutputController@update')->name('output.update');
        Route::delete('output/{output}', 'OutputController@destroy')->name('output.destroy');
    });

    Route::group(['middleware' => ['checkrole:Pegawai,Pejabat']], function () {

        // SKPS
        Route::get('skps', 'SkpsController@index')->name('skps');
        Route::get('skps/create', 'SkpsController@create')->name('skps.create');
        Route::get('skps/cetak', 'SkpsController@cetak')->name('skps.cetak');
        Route::get('skps/cetak_nilai', 'SkpsController@CetakNilai')->name('skps.cetak_nilai');
        Route::get('skps/cetak_nilai_akhir', 'SkpsController@CetakNilaiAkhir')->name('skps.cetak_nilai_akhir');
        Route::post('skps', 'SkpsController@store')->name('skps.store');
        Route::get('skps/{skps}', 'SkpsController@edit')->name('skps.edit');
        Route::put('skps/{skps}', 'SkpsController@update')->name('skps.update');
        Route::delete('skps/{skps}', 'SkpsController@destroy')->name('skps.destroy');

      


        // Target
        Route::get('target', 'TargetController@index')->name('target');
        Route::get('target/create', 'TargetController@create')->name('target.create');
        Route::post('target', 'TargetController@store')->name('target.store');
        Route::get('target/{target}', 'TargetController@edit')->name('target.edit');
        Route::put('target/{target}', 'TargetController@update')->name('target.update');
        Route::delete('target/{target}', 'TargetController@destroy')->name('target.destroy');

        // Realisasi
        Route::get('realiation', 'RealiationController@index')->name('realiation');
        Route::get('realiation/create', 'RealiationController@create')->name('realiation.create');
        Route::post('realiation', 'RealiationController@store')->name('realiation.store');
        Route::get('realiation/{realiation}', 'RealiationController@edit')->name('realiation.edit');
        Route::put('realiation/{realiation}', 'RealiationController@update')->name('realiation.update');
        Route::delete('realiation/{realiation}', 'RealiationController@destroy')->name('realiation.destroy');
    });

    // Route::group(['middleware' => ['checkrole:Pejabat']], function () {

    //     // SKPS
    //     Route::get('skps', 'SkpsController@index')->name('skps');
    //     Route::get('skps/create', 'SkpsController@create')->name('skps.create');
    //     Route::get('skps/cetak', 'SkpsController@cetak')->name('skps.cetak');
    //     Route::post('skps', 'SkpsController@store')->name('skps.store');
    //     Route::get('skps/{skps}', 'SkpsController@edit')->name('skps.edit');
    //     Route::put('skps/{skps}', 'SkpsController@update')->name('skps.update');
    //     Route::delete('skps/{skps}', 'SkpsController@destroy')->name('skps.destroy');


    //     // Target
    //     Route::get('target', 'TargetController@index')->name('target');
    //     Route::get('target/create', 'TargetController@create')->name('target.create');
    //     Route::post('target', 'TargetController@store')->name('target.store');
    //     Route::get('target/{target}', 'TargetController@edit')->name('target.edit');
    //     Route::put('target/{target}', 'TargetController@update')->name('target.update');
    //     Route::delete('target/{target}', 'TargetController@destroy')->name('target.destroy');



    //     // Realisasi
    //     Route::get('realiation', 'RealiationController@index')->name('realiation');
    //     Route::get('realiation/create', 'RealiationController@create')->name('realiation.create');
    //     Route::post('realiation', 'RealiationController@store')->name('realiation.store');
    //     Route::get('realiation/{realiation}', 'RealiationController@edit')->name('realiation.edit');
    //     Route::put('realiation/{realiation}', 'RealiationController@update')->name('realiation.update');
    //     Route::delete('realiation/{realiation}', 'RealiationController@destroy')->name('realiation.destroy');
    // });

});
