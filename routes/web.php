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

namespace OmniaDigital\Catalyst\CrmModule\Http\Livewire;

Route::name('catalyst-crm-module.')->prefix('catalyst-crm-module')->group(function () {
    Route::get('/catalyst-crm-module/{form}', Home::class)->name('form');
});
