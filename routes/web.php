<?php

use App\Http\Controllers\EnquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');
