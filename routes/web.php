<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

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
// Route::get('/leads/create', [LeadController::class, 'create'])->name('leads.create');

// Route::POST('store',[LeadController::class, 'store'])->name('leads.store');
// Route::get('leads', [LeadController::class, 'index'])->name('leads.index');
// Route::get('/leads/edit/{id}', [LeadController::class, 'edit']);
// Route::post('/leads/edit/{id}', [LeadController::class, 'edit']);

// Route::get('delete/{id}', [LeadController::class, 'destroy']);


// Route::resource('leads', [LeadController::class,'create', 'index','edit']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource('leads', LeadController::class);
// Route::resource('product', ProductsController::class);

