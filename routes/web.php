<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

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
})->name('welcome');

Route::get('/itemgroup', [ItemsController::class, 'getItemGroup'])->name('itemgroup');
Route::post('/saveItemGroup', [ItemsController::class, 'saveItemGroup'])->name('saveItemGroup');
Route::get('/deleteItemGroup/{id}', [ItemsController::class, 'deleteItemGroup'])->name('deleteItemGroup');
Route::get('/editItemGroup/{id}', [ItemsController::class, 'editItemGroup'])->name('editItemGroup');
Route::post('/updateItemGroup',[ItemsController::class,"updateItemGroup"])->name('updateItemGroup');

Route::get('/items', [ItemsController::class, 'getItems'])->name('items');
Route::post('saveItem', [ItemsController::class, 'saveItem'])->name('saveItem');
Route::get('deleteItem/{id}', [ItemsController::class, 'deleteItem'])->name('deleteItem');
Route::get('/editItem/{id}', [ItemsController::class, 'editItem'])->name('editItem');
Route::post('/updateItem',[ItemsController::class,"updateItem"])->name('updateItem');
