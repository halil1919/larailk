<?php

use Illuminate\Support\Facades\Route;

/* Backend Route */

include base_path('routes/backend/web.php');

Route::get('/', function () {
    return view('welcome');
});

