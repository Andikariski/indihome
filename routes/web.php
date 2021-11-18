<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin;
// use App\Http\Controllers\Auth;

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
    // return view('login');
    return view('auth.login');
});

Auth::routes(['register' => true]);

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
Route::get('/forecastError', [App\Http\Controllers\Admin\ForecastErrorController::class, 'index'])->name('forecast');
Route::get('/trendPlot', [App\Http\Controllers\Admin\TrendPlotController::class, 'index'])->name('trendPlot');
Route::get('/trendAnalysis', [App\Http\Controllers\Admin\TrendAnalysisController::class, 'index'])->name('trendAnalysis');

// detail Trend Plot
Route::get('detailSimple', [App\Http\Controllers\Admin\TrendPlotController::class, 'detailTrendPlotSimple'])->name('dataSimple');
Route::get('detailMultiple', [App\Http\Controllers\Admin\TrendPlotController::class, 'detailTrendPlotMultiple'])->name('dataMultiple');

Route::post('tambahDataPelanggan', [App\Http\Controllers\Admin\TrendPlotController::class, 'tambahDataPelanggan'])->name('addDataPelanggan');
Route::get('hapusDataPelanggan{id}', [App\Http\Controllers\Admin\TrendPlotController::class, 'hapusDataPelanggan'])->name('hapusDataPelanggan');

// data grafik Json
Route::get('ApiDataSimple', [Admin\TrendPlotController::class, 'dataSimpleApi']);

Route::get('dataSimpleApibyTahun', [Admin\TrendPlotController::class, 'dataSimpleApibyTahun']);

// Route Test
Route::get('testApiData', [Admin\TrendPlotController::class, 'testApiData']);
