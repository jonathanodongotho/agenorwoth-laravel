<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Index;
use App\Http\Controllers\indexformController;
use App\Http\Controllers\Others;
use App\Http\Controllers\Projects;
use App\Http\Controllers\Services;
use Illuminate\Support\Facades\Route;

Route::get('/', [Index::class,'index'])->name('index');

Route::get('subscribe', [indexformController::class,'formview'])->name('indexform');
Route::post('subscribe', [indexformController::class,'formsubmit'])->name('indexform.submit');

Route::get('about', [About::class,'About'])->name('about');

Route::get('contact', [Contact::class,'Contact'])->name('contact');
Route::post('contact', [Contact::class,'ContactForm'])->name('contactform.submit');

Route::get('others', [Others::class,'Others'])->name('others');

Route::get('projects', [Projects::class,'Projects'])->name('projects');

Route::get('services', [Services::class,'Services'])->name('services');