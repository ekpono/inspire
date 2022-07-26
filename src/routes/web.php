<?php

use Ekpono\Inspire\Controllers;
use Ekpono\Inspire\Controllers\InspirationController;
use Illuminate\Support\Facades\Route;

Route::get('inspire', InspirationController::class);