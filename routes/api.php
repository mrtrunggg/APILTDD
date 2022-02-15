<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Sanpham;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sanpham',[SanphamController::class, 'Laydanhsach']);
Route::get('sanpham/{id}',[SanphamController::class, 'Laychitiet']);
Route::post('sanpham/themmoi',[SanphamController::class, 'Themmoi']);
Route::put('sanpham/{id}/capnhat',[SanphamController::class, 'Capnhat']);
Route::delete('sanpham/{id}/xoa',[SanphamController::class, 'Xoa']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);