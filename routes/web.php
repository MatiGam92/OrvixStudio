<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\LeadController;

/*
|--------------------------------------------------------------------------
| PUBLICO
|--------------------------------------------------------------------------
*/
Route::get('/equipo', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', [LandingController::class,'index'])->name('landing');

Route::post('/leads', [LandingController::class,'storeLead'])
    ->name('leads.store');


/*
|--------------------------------------------------------------------------
| USUARIOS LOGUEADOS
|--------------------------------------------------------------------------
*/
Route::view('/nosotros', 'nosotros')->name('nosotros');

Route::middleware(['auth','verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});


/*
|--------------------------------------------------------------------------
| SOLO ADMIN (CRM)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth','admin'])->group(function () {

    Route::get('/admin/leads',
        [LeadController::class,'index']
    )->name('admin.leads');

    Route::patch('/admin/leads/{lead}/estado',
        [LeadController::class,'updateEstado']
    );

    Route::delete('/admin/leads/{lead}',
    [LeadController::class,'destroy']
    )->name('admin.leads.destroy');

});


require __DIR__.'/auth.php';