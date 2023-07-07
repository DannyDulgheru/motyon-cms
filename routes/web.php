<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoController;




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


Route::get('/work', [MainController::class, 'index'])->name('main.index');
Route::get('/work/{id}', [MainController::class, 'show'])->name('main.work.show');
// Add other routes as needed


Auth::routes();

Route::middleware(['restricted'])->group(function () {
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/works', [WorkController::class, 'index'])->name('works.index');
Route::get('/admin/works/create', [WorkController::class, 'create'])->name('works.create');
Route::post('/admin/works', [WorkController::class, 'store'])->name('works.store');
Route::get('/admin/works/{work}', [WorkController::class, 'show'])->name('works.show');
Route::get('/admin/works/{work}/edit', [WorkController::class, 'edit'])->name('works.edit');
Route::put('/admin/works/{work}', [WorkController::class, 'update'])->name('works.update');
Route::delete('admin/works/{work}', [WorkController::class, 'destroy'])->name('works.destroy');

Route::delete('admin/photos/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');


});