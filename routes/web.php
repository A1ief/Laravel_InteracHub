<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Route::get('/', function () {
//     return view('layouts.dashboard');
// });

Route::get('/',[CustomerController::class,'viewCustomer'])->name('dashboard');

Route::get('/customers/download-pdf', [CustomerController::class, 'downloadPDF'])->name('download_pdf');

Route::resource('customers', CustomerController::class);
