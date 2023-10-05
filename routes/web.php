<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

Route::post('/portfolio/upload', [PortfolioController::class, 'uploadFile'])->name('portfolio.upload');
Route::get('/bio', [BioController::class, 'index'])->name('bio.index');
Route::get('/admin', [Admin::class, 'index'])->name('admin.index');

Route::post('/admin', [Admin::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [Admin::class, 'logout'])->name('admin.logout');
Route::group([], function () {
    Route::get('/portfolio/{id}/move-up', [PortfolioController::class, 'moveUp'])->name('portfolio.move-up');
    Route::get('/portfolio/{id}/move-down', [PortfolioController::class, 'moveDown'])->name('portfolio.move-down');
    Route::get('/portfolio/{id}/delete', [PortfolioController::class, 'delete'])->name('portfolio.delete');
    Route::post('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
});