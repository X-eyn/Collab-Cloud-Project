<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\RecycleBinController;
use App\Http\Controllers\ContactController;

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('files', [FileController::class, 'index'])->name('files');
Route::get('files/{file}', [FileController::class, 'download'])->name('file.download');
Route::get('/activity-log', [ActivityLogController::class, 'index'])->name('activity-log');

Route::get('/recycle-bin', [RecycleBinController::class, 'index'])->name('recycle-bin.index');
Route::get('/recycle-bin/restore/{id}', [RecycleBinController::class, 'restore'])->name('recycle-bin.restore');
Route::get('/recycle-bin/destroy/{id}', [RecycleBinController::class, 'destroy'])->name('recycle-bin.destroy');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
