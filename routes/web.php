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
Route :: get('/saint/show/{saint}', [MainController :: class, 'saintShow'])
    -> name('saint.show');
// --- DELETE
Route :: get('/saint/delete/{saint}', [MainController :: class, 'saintDelete'])
    -> name('saint.delete');
// --- CREATE
Route :: get('/saint/create', [MainController :: class, 'saintCreate'])
    -> name('saint.create');
    // ---- ROUTE
    Route :: post('/saint/store', [MainController :: class, 'saintStore'])
    -> name('saint.store');
// --- EDIT
route :: get ('/saint/edit/{saint}', [MainController :: class, 'saintEdit'])
    -> name('saint.edit');
    route :: post('/saint/update/{saint}' , [MainController :: class, 'saintUpdate'])
        -> name('saint.update');