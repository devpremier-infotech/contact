<?php

use Illuminate\Support\Facades\Route;
use Devpremier\Contact\Http\Controllers\ContactController;

Route::get('/contact', [ ContactController::class, 'index' ]);

Route::post('/contact', [ ContactController::class, 'send' ])

?>