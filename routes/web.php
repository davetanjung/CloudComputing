<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormController::class, 'create'])->name('forms.create');

// If you still need the form submission and index routes:
Route::post('/', [FormController::class, 'store'])->name('forms.store');
Route::get('/list', [FormController::class, 'index'])->name('forms.index');

// Email sending route
Route::post('/send-email', [MailController::class, 'SendEmail'])->name('send-email');
