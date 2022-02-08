<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
* HOME
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
* NEWS
*/
Route::get('noticias', [NewsController::class, 'index'])
    ->name('news.index');

Route::get('noticias/crear', [NewsController::class, 'form'])
    ->name('news.form')
    ->middleware(['auth', 'check_admin']);

Route::post('noticias/crear', [NewsController::class, 'create'])
    ->name('news.create')
    ->middleware(['auth', 'check_admin']);

Route::get('noticias/{id}', [NewsController::class, 'news_id'])
    ->name('news.news')
    ->whereNumber('id');

Route::get('noticias/{id}/editar', [NewsController::class, 'formEdit'])
    ->name('news.formEdit')
    ->whereNumber('id')
    ->middleware(['auth', 'check_admin']);

Route::put('noticias/{id}/editar', [NewsController::class, 'edit'])
    ->name('news.edit')
    ->whereNumber('id')
    ->middleware(['auth', 'check_admin']);

Route::delete('noticias/{id}/eliminar', [NewsController::class, 'delete'])
    ->name('news.delete')
    ->whereNumber('id')
    ->middleware(['auth', 'check_admin']);

/*
* CHARACTERS
*/
Route::get('agentes', [CharactersController::class, 'index'])
    ->name('characters.index');

Route::get('agentes/{id}', [CharactersController::class, 'character'])
    ->name('characters.character')
    ->whereNumber('id');

Route::get('agentes/crear', [CharactersController::class, 'form'])
    ->name('characters.form')
    ->middleware(['auth', 'check_admin']);

Route::post('agentes/crear', [CharactersController::class, 'create'])
    ->name('characters.create')
    ->middleware(['auth', 'check_admin']);

Route::get('agentes/{id}/editar', [CharactersController::class, 'formEdit'])
    ->name('characters.formEdit')
    ->whereNumber('id')
    ->middleware(['auth', 'check_admin']);

Route::put('agentes/{id}/editar', [CharactersController::class, 'edit'])
    ->name('characters.edit')
    ->whereNumber('id')
    ->middleware(['auth', 'check_admin']);

Route::delete('agentes/{id}/eliminar', [CharactersController::class, 'delete'])
    ->name('characters.delete')
    ->whereNumber('id')
    ->middleware(['auth', 'check_admin']);

/*
* PROFILE
*/
Route::get('perfil', [UserController::class, 'index'])
    ->name('user.index')
    ->middleware(['auth']);

Route::get('perfil/editar-contraseña', [UserController::class, 'formPassword'])
    ->name('user.formPassword')
    ->middleware(['auth']);

Route::put('perfil/editar', [UserController::class, 'edit'])
    ->name('user.edit')
    ->middleware(['auth']);

Route::put('perfil/editar-contraseña', [UserController::class, 'editPassword'])
    ->name('user.editPassword')
    ->middleware(['auth']);

/*
* NEWSLETTER
*/
Route::post('newsletter-suscribirse', [NewsletterController::class, 'create'])
    ->name('newsletter.create')
    ->middleware(['auth']);
Route::delete('newsletter-cancelar', [NewsletterController::class, 'delete'])
    ->name('newsletter.delete')
    ->middleware(['auth']);


/*
* AUTH
*/
Route::get('/registrarse', [AuthController::class, 'formRegister'])->name('auth.formRegister');
Route::post('/registrarse', [AuthController::class, 'register'])->name('auth.register');

Route::get('/iniciar-sesion', [AuthController::class, 'formLogin'])->name('auth.formLogin');
Route::post('/iniciar-sesion', [AuthController::class, 'login'])->name('auth.login');
Route::post('/cerrar-sesion', [AuthController::class, 'logout'])->name('auth.logout');


/*
* ADMIN
*/
Route::get('/usuarios', [AdminController::class, 'index'])
    ->name('admin.users')
    ->middleware(['auth', 'check_admin']);

