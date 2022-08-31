<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;

use Illuminate\Support\Facades\Route;


//Um usuário, inicialmente tem um endereço
Route::get('/users', [UserController::class, 'index']);
//Buscar um usuário pelo ID
Route::get('/users/{id}', [UserController::class, 'findOne']);

//Incluir um novo usuário
Route::post('/users', [UserController::class, 'insert']);

Route::get('/addresses', [AddressController::class, 'index']);

// Buscar um endereço pelo ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

//Incluir um novo endereço
Route::post('/addresses', [AddressController::class, 'insert']);

//Invoices
Route::get('/invoices', [InvoiceController::class, 'index']);
Route::post('/invoices', [InvoiceController::class, 'createInvoice']);
Route::get('/invoices/{id}', [InvoiceController::class, 'findOne']);
