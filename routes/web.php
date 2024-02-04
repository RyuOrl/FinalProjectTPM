<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UniqueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;

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

Route::get('/', [AuthenticatedSessionController::class, 'redirect']);

Route::get('/home', function(){
    return view('home');
});

Route::get('/user/dashboard',[UserController::class, 'read'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/user/timeline',[UserController::class, 'timeline'])->middleware(['auth', 'verified'])->name('timeline');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/panel', [AdminController::class, 'adminPanel'])
->middleware(['auth', 'role:admin'])->name('admin.panel');

Route::post('/send/mail', [MailController::class, 'sendMail'])->name('send.mail');

Route::post('/update/data', [AdminController::class, 'updateData'])->name('update.data');

Route::get('/search', [AdminController::class, 'search']);


Route::get('/admin/panel/sort', [AdminController::class, 'adminSort'])->name('admin.sort');

Route::get('/update/{id}', [AdminController::class, 'updatePage']);

Route::post('/update/post/{id}', [AdminController::class, 'update']);

Route::get('/delete/{id}', [AdminController::class, 'delete']);

require __DIR__.'/auth.php';





