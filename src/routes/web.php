<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Kodestudio\Contact\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'send'])->name('contact.send');
