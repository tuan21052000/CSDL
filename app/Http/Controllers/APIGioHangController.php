<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GioHang;
class APIGioHangController extends Controller
{
    function layGioHang()
    {
        $danhSach = GioHang::all();
        return  json_encode([
            'success' => true,
            'data' => $danhSach,
        ]);
    }
    function chiTiet($id)
    {
        $gioHang = GioHang::find($id);
        if(empty($gioHang)) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy sản phẩm có' .$id
            ]);
        }
        return json_encode([
            'success' => true,
            'data'    => $gioHang,
        ]);
    }
    function themMoi(Request $request)
    {
        $gioHang = new GioHang();
        $gioHang->id = $request->id;
        $gioHang->khachhangid = $request->khachhangid;
        $gioHang->sanphamid = $request->sanphamid;
        $gioHang->soluong = $request->soluong;
        $gioHang->hinhanh = $request->hinhanh;
        $gioHang->dongia = $request->dongia;
        $gioHang->created_at = $request->created_at;
        $gioHang->updated_at = $request->updated_at;
        $gioHang->save();

        return json_encode([
            'success' => true,
            'message' => 'Thêm giỏ hàng thành công'
        ]);
    }
}
