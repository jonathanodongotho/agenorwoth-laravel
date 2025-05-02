<?php

use App\Http\Controllers\index;
use Illuminate\Support\Facades\Route;

Route::get('/', [index::class,'index'])->name('index');
