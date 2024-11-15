<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;
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
});

Route::get('/flights', [FlightController::class, 'index']);

Route::get('/flights/ticket/{flight:id}', [TicketController::class, 'index']);

Route::get('/flights/book/{flight:id}', [TicketController::class, 'create'])->name('ticket.book');

Route::post('/ticket/submit', [TicketController::class, 'insert'])->name('ticket.insert');

Route::put('/ticket/board/{ticket:id}', [TicketController::class, 'update'])->name('ticket.board');

Route::delete('/ticket/delete/{ticket:id}', [TicketController::class, 'delete'])->name('ticket.delete');

