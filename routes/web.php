<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CategoriapController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PaginasEstaticasController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RedesSocialesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/todas-las-noticias', [IndexController::class, 'noticiasweb']);
Route::get('/noticias/{id}/articulo', [IndexController::class, 'articulo']);
Route::get('/politicas-de-privacidad', [IndexController::class, 'politicasPrivacidad']);
Route::get('/politicas-de-reembolso', [IndexController::class, 'politicasReembolso']);

// Route::get('/noticias', [IndexController::class, 'noticias']);
// Route::get('/noticias', [IndexController::class, 'noticias']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

# Rutas web

Route::get('panel-administrativo/configuraciones/roles', [RolesController::class, 'index'])->name('roles.index');
Route::get('panel-administrativo/configuraciones/roles/nuevo-rol', [RolesController::class, 'create'])->name('roles.create');
Route::post('panel-administrativo/configuraciones/roles/guardar-rol', [RolesController::class, 'store'])->name('roles.store');
Route::get('panel-administrativo/configuraciones/roles/{id}/editar-rol', [RolesController::class, 'edit'])->name('roles.edit');
Route::put('panel-administrativo/configuraciones/roles/{id}/actualizar-rol', [RolesController::class, 'update'])->name('roles.update');
Route::delete('panel-administrativo/configuraciones/roles/{id}/eliminar-rol', [RolesController::class, 'destroy'])->name('roles.destroy');


Route::get('panel-administrativo/configuraciones/redes-sociales', [RedesSocialesController::class, 'index'])->name('redes-sociales.index');
Route::get('panel-administrativo/configuraciones/redes-sociales/nueva-red-social', [RedesSocialesController::class, 'create'])->name('redes-sociales.create');
Route::post('panel-administrativo/configuraciones/redes-sociales/guardar-red-social', [RedesSocialesController::class, 'store'])->name('redes-sociales.store');
Route::get('panel-administrativo/configuraciones/redes-sociales/{id}/editar-red-social', [RedesSocialesController::class, 'edit'])->name('redes-sociales.edit');
Route::put('panel-administrativo/configuraciones/redes-sociales/{id}/actualizar-red-social', [RedesSocialesController::class, 'update'])->name('redes-sociales.update');
Route::delete('panel-administrativo/configuraciones/redes-sociales/{id}/eliminar-red-social', [RedesSocialesController::class, 'destroy'])->name('redes-sociales.destroy');


Route::get('panel-administrativo/configuraciones/categorias-de-noticias', [CategoriaController::class, 'index'])->name('categorias-de-noticias.index');
Route::get('panel-administrativo/configuraciones/categorias-de-noticias/nueva-categoria', [CategoriaController::class, 'create'])->name('categorias-de-noticias.create');
Route::post('panel-administrativo/configuraciones/categorias-de-noticias/guardar-categoria', [CategoriaController::class, 'store'])->name('categorias-de-noticias.store');
Route::get('panel-administrativo/configuraciones/categorias-de-noticias/{id}/editar-categoria', [CategoriaController::class, 'edit'])->name('categorias-de-noticias.edit');
Route::put('panel-administrativo/configuraciones/categorias-de-noticias/{id}/actualizar-categoria', [CategoriaController::class, 'update'])->name('categorias-de-noticias.update');
Route::delete('panel-administrativo/configuraciones/categorias-de-noticias/{id}/eliminar-categoria', [CategoriaController::class, 'destroy'])->name('categorias-de-noticias.destroy');


Route::get('panel-administrativo/configuraciones/categorias-de-productos', [CategoriapController::class, 'index'])->name('categorias-de-productos.index');
Route::get('panel-administrativo/configuraciones/categorias-de-productos/nueva-categoria', [CategoriapController::class, 'create'])->name('categorias-de-productos.create');
Route::post('panel-administrativo/configuraciones/categorias-de-productos/guardar-categoria', [CategoriapController::class, 'store'])->name('categorias-de-productos.store');
Route::get('panel-administrativo/configuraciones/categorias-de-productos/{id}/editar-categoria', [CategoriapController::class, 'edit'])->name('categorias-de-productos.edit');
Route::put('panel-administrativo/configuraciones/categorias-de-productos/{id}/actualizar-categoria', [CategoriapController::class, 'update'])->name('categorias-de-productos.update');
Route::delete('panel-administrativo/configuraciones/categorias-de-productos/{id}/eliminar-categoria', [CategoriapController::class, 'destroy'])->name('categorias-de-productos.destroy');


Route::get('panel-administrativo/configuraciones/preguntas-y-respuestas', [FaqsController::class, 'index'])->name('preguntas-y-respuestas.index');
Route::get('panel-administrativo/configuraciones/preguntas-y-respuestas/nueva-pregunta', [FaqsController::class, 'create'])->name('preguntas-y-respuestas.create');
Route::post('panel-administrativo/configuraciones/preguntas-y-respuestas/guardar-pregunta', [FaqsController::class, 'store'])->name('preguntas-y-respuestas.store');
Route::get('panel-administrativo/configuraciones/preguntas-y-respuestas/{id}/editar-pregunta', [FaqsController::class, 'edit'])->name('preguntas-y-respuestas.edit');
Route::put('panel-administrativo/configuraciones/preguntas-y-respuestas/{id}/actualizar-pregunta', [FaqsController::class, 'update'])->name('preguntas-y-respuestas.update');
Route::delete('panel-administrativo/configuraciones/preguntas-y-respuestas/{id}/eliminar-pregunta', [FaqsController::class, 'destroy'])->name('preguntas-y-respuestas.destroy');


Route::get('panel-administrativo/configuraciones/paginas-estaticas', [PaginasEstaticasController::class, 'index'])->name('paginas-estaticas.index');
Route::get('panel-administrativo/configuraciones/paginas-estaticas/nueva-pagina', [PaginasEstaticasController::class, 'create'])->name('paginas-estaticas.create');
Route::post('panel-administrativo/configuraciones/paginas-estaticas/guardar-pagina', [PaginasEstaticasController::class, 'store'])->name('paginas-estaticas.store');
Route::get('panel-administrativo/configuraciones/paginas-estaticas/{id}/editar-pagina', [PaginasEstaticasController::class, 'edit'])->name('paginas-estaticas.edit');
Route::put('panel-administrativo/configuraciones/paginas-estaticas/{id}/actualizar-pagina', [PaginasEstaticasController::class, 'update'])->name('paginas-estaticas.update');
Route::delete('panel-administrativo/configuraciones/paginas-estaticas/{id}/eliminar-pagina', [PaginasEstaticasController::class, 'destroy'])->name('paginas-estaticas.destroy');


Route::get('panel-administrativo/configuraciones/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('panel-administrativo/configuraciones/usuarios/nuevo-usuario', [UsuariosController::class, 'create'])->name('usuarios.create');
Route::post('panel-administrativo/configuraciones/usuarios/guardar-usuario', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('panel-administrativo/configuraciones/usuarios/{id}/editar-usuario', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::put('panel-administrativo/configuraciones/usuarios/{id}/actualizar-usuario', [UsuariosController::class, 'update'])->name('usuarios.update');
Route::delete('panel-administrativo/configuraciones/usuarios/{id}/eliminar-usuario', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');


Route::get('panel-administrativo/noticias', [PostController::class, 'index'])->name('paneladmin.noticias.index');
Route::get('panel-administrativo/noticias/nueva-noticia', [PostController::class, 'create'])->name('paneladmin.noticias.create');
Route::post('panel-administrativo/noticias/guardar-noticia', [PostController::class, 'store'])->name('paneladmin.noticias.store');
Route::get('panel-administrativo/noticias/{id}/editar-noticia', [PostController::class, 'edit'])->name('paneladmin.noticias.edit');
Route::put('panel-administrativo/noticias/{id}/actualizar-noticia', [PostController::class, 'update'])->name('paneladmin.noticias.update');
Route::delete('panel-administrativo/noticias/{id}/eliminar-noticia', [PostController::class, 'destroy'])->name('paneladmin.noticias.destroy');


Route::get('panel-administrativo/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('panel-administrativo/productos/nuevo-producto', [ProductoController::class, 'create'])->name('productos.create');
Route::post('panel-administrativo/productos/guardar-producto', [ProductoController::class, 'store'])->name('productos.store');
Route::get('panel-administrativo/productos/{id}/editar-producto', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('panel-administrativo/productos/{id}/actualizar-producto', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('panel-administrativo/productos/{id}/eliminar-producto', [ProductoController::class, 'destroy'])->name('productos.destroy');
