<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');

Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');

Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');

Route::put('/ideas/{idea}', [IdeaController::class, 'update'])->name('ideas.update');

Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');

Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('ideas.comments.store');

// model
// controller
// migration
// setup the routes

Route::get('/terms', function(){
    return view('terms');
});


