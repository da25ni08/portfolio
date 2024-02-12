<?php

use App\Http\Controllers\ProjectController;
use App\Models\Experience;
use App\Models\PersonalData;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('proyectos', ProjectController::class);
Route::get('/', [PersonalData::class, 'index'])->name('datosPersonales');
Route::get('contacto', [PersonalData::class, 'contact'])->name('contacto');
Route::get('experiencia', [Experience::class, 'index'])->name('experiencia');
