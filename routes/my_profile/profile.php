<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile.profile');
});

Route::post('/clint_datas',[App\Http\Controllers\ClintDataController::class, 'create_clint']);
