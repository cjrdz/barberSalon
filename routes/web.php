<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AppointmentController;

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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/CategoryShow',[CategoryController::class, 'index']); 

});

// Categories Views
Route::get('/category/show', [CategoryController::class, 'index'] )->name('category.show');
//Ruta para Crear (FrontEnd)
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
//Ruta para Crear (BackEnd)
Route::post('/categoryStore', [CategoryController::class, 'store']);
//Ruta para Modificar (FrontEnd)
Route::get('/category/edit/{categories}', [CategoryController::class, 'edit'])->name('category.edit');
//Ruta para Modificar BackEnd)
Route::put('/category/update/{categories}', [CategoryController::class, 'update'])->name('category.update'); 
//Ruta para Eliminar (BackEnd)
Route::delete('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy'); 






// Appointments views
Route::get('/appointment/show', [AppointmentController::class, 'index'] )->name('appointment.show');

// Services views
Route::get('/service/show', [ServiceController::class,'index'])->name('service.show');

require __DIR__.'/auth.php';
