<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

// --- INDEX
Route :: get('/', [MainController :: class, 'home'])
    -> name('home');
// --- SHOW
Route :: get('/saint/show/{id}', [MainController :: class, 'saintShow'])
    -> name('saint.show');
// --- DELETE
Route :: get('/saint/delete/{id}', [MainController :: class, 'saintDelete'])
    -> name('saint.delete');
// --- CREATE
Route :: get('/saint/create', [MainController :: class, 'saintCreate'])
    -> name('saint.create');
    Route :: post('/saint/store', [MainController :: class, 'saintStore'])
    -> name('saint.store');
