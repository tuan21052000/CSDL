<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APISanPhamController;

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
Route::get('san-pham/danh-sach',[APISanPhamController::class, 'layDanhSach']);
Route::get('san-pham/{id}',[APISanPhamController::class,'chiTiet']);
Route::post('san-pham/them-moi',[APISanPhamController::class,'themMoi']);
Route::post('san-pham/xoa',[APISanPhamController::class,'Xoa']);
Route::post('san-pham/sua',[APISanPhamController::class,'Sua']);
// 
Route::get('gio-hang/danh-sach',[APIGioHangController::class, 'layGioHang']);
Route::post('upload',[APISanPhamController::class, 'upload']);