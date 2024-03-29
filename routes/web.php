<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Livewire\DonutChart;

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
Route::get('/counter', Counter::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/donut-chart', function () {
    return view('layouts.app', [
        'content' => Livewire::mount('donut-chart')->html(),
    ]);
})->name('donut-chart');
