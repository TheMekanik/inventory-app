<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', function() {
    return Redirect::route('index_inventory');
});

Route::get('/inventory', [InventoryController::class, 'index_inventory'])->name('index_inventory');

Route::get('/inventory/create', [InventoryController::class, 'create'])->name('create');

Route::post('/inventory/create', [InventoryController::class, 'store'])->name('store');

Route::get('/inventory/{inventory}', [InventoryController::class, 'show_inventory'])->name('show_inventory');

Route::get('/inventory/{inventory}/edit', [InventoryController::class, 'edit'])->name('edit');

Route::patch('/inventory/{inventory}/update', [InventoryController::class, 'update_inventory'])->name('update_inventory');

Route::delete('/inventory/{inventory}', [InventoryController::class, 'delete_inventory'])->name('delete_inventory');