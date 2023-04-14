<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\FalhaController;
use App\Http\Controllers\NovoComentario;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProcurarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Models\Disciplina;
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


Route::get('/dashboard', [PostController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('markAsRead', function () {
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsRead')->middleware('auth');

/* UserController */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users/{id}', [ProfileController::class, 'show']);

/* PostController */
Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::post('/perguntas', [PostController::class, 'store'])
    ->name('post.store')
    ->middleware(['auth']);

Route::get('/perguntas/{id}', [PostController::class, 'show']);

Route::delete('/perguntas/{id}', [PostController::class, 'destroy'])->middleware('auth');

Route::get('/perguntas/editar/{id}', [PostController::class, 'edit'])->middleware('auth');
Route::put('/perguntas/actualizar/{id}', [PostController::class, 'update'])->middleware('auth');

/* DisciplinaController */
Route::get('/disciplinas/criar', [DisciplinaController::class, 'create'])
    ->name('disciplina.create')
    ->middleware(['auth']);

Route::post('/disciplinas', [DisciplinaController::class, 'store'])
    ->name('disciplina.store')
    ->middleware(['auth']);

Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);

/* ComentarioController */
Route::post('/perguntas/{id}/comentarios', [ComentarioController::class, 'store'])
    ->name('comentario.store')
    ->middleware(['auth']);

Route::delete('/comentarios/{id}', [ComentarioController::class, 'destroy'])
    ->middleware('auth');


Route::get('/perguntas/comentarios/editar/{id}', [ComentarioController::class, 'edit'])->middleware('auth');
Route::put('/perguntas/comentarios/actualizar/{id}', [ComentarioController::class, 'update'])->middleware('auth');

/* ProcurarController */
Route::get('/search', [ProcurarController::class, 'search'])->name('search');

/* FalhasController (Reportar) */
Route::get('/reportar', [FalhaController::class, 'create'])
    ->name('reportar.create')
    ->middleware(['auth']);

Route::post('/reportar', [FalhaController::class, 'store'])
    ->name('reportar.store')
    ->middleware(['auth']);

//Notificações
Route::get('/enviar-notificacao', [NovoComentario::class, 'send']);

//Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');
    
Route::get('/admin/users', [AdminController::class, 'users'])
    ->name('admin.userspage');

Route::get('/admin/posts', [AdminController::class, 'posts'])
    ->name('admin.postspage');

Route::delete('/perguntas/{id}', [AdminController::class, 'destroy'])->middleware('auth');


Route::get('/admin/falhas', [AdminController::class, 'falhas'])
    ->name('admin.falhaspage');



require __DIR__ . '/auth.php';
