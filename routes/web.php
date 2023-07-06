<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

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

Route::get('/main', function () {
    $works = App\Models\Work::all();
    return view('main.index', compact('works'));
})->name('main.index');

Route::get('/', function () {
    $works = App\Models\Work::all();
    return view('main.index', compact('works'));
})->name('main.index');

Route::get('/main/work', function () {
    $works = App\Models\Work::all();
    return view('main.work', compact('works'));
})->name('main.work');



Auth::routes();


Route::middleware(['restricted'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/works', [WorkController::class, 'index'])->name('works.index');
Route::get('/home/works/create', [WorkController::class, 'create'])->name('works.create');
Route::post('/home/works', [WorkController::class, 'store'])->name('works.store');
Route::get('/home/works/{work}', [WorkController::class, 'show'])->name('works.show');
Route::get('/home/works/{work}/edit', [WorkController::class, 'edit'])->name('works.edit');
Route::put('/home/works/{work}', [WorkController::class, 'update'])->name('works.update');

});