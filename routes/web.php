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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workgroups-mngr/import', [App\Http\Controllers\WorkgroupsMngrController::class, 'showImportForm'])->name('workgroups-mngr.import-form');
Route::post('/workgroups-mngr/import', [App\Http\Controllers\WorkgroupsMngrController::class, 'importFromCsv'])->name('workgroups-mngr.import');
