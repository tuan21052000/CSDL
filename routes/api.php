<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APISanPhamController;
use App\Http\Controllers\APILoaiSanPhamController;
use App\Http\Controllers\APIKhachHangController;

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
//sản phẩm
Route::get('san-pham/danh-sach',[APISanPhamController::class, 'layDanhSach']);
Route::get('sanpham-bun/danh-sach',[APISanPhamController::class, 'layDanhSachBun']);
Route::get('sanpham-com/danh-sach',[APISanPhamController::class, 'layDanhSachCom']);
Route::get('sanpham-fastfood/danh-sach',[APISanPhamController::class, 'layDanhSachFastFood']);
Route::get('sanpham-nuoc/danh-sach',[APISanPhamController::class, 'layDanhSachNuoc']);

Route::get('san-pham/{id}',[APISanPhamController::class,'chiTiet']);
Route::post('san-pham/them-moi',[APISanPhamController::class,'themMoi']);
Route::post('san-pham/xoa',[APISanPhamController::class,'Xoa']);
Route::post('san-pham/sua',[APISanPhamController::class,'Sua']);
//giỏ hàng
Route::get('gio-hang/danh-sach',[APIGioHangController::class, 'layGioHang']);
//uplpad file
Route::post('upload',[APISanPhamController::class, 'upload']);
//loại sản phẩm
Route::get('loai-sanpham/danh-sach',[APILoaiSanPhamController::class, 'layLoaiSanPham']);

//Login
Route::post('khach-hang/login',[APIKhachHangController::class, 'login']);
