<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CursosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/estudiante', [EstudianteController::class, 'create']);

Route::post('/cursos', [CursosController::class, 'create']);

Route::get('/estQuinto',[EstudianteController::class, 'estudiantesEnQuintoGrado']);

Route::get('/todosGrados',[EstudianteController::class, 'todosGrados']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
