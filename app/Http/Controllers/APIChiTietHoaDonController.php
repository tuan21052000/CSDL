<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChiTietHoaDon;
class APIChiTietHoaDonController extends Controller
{
    function layChiTietDonHang()
    {
        $danhSach = ChiTietDonHang::all();
        return  json_encode([
            'success' => true,
            'data' => $danhSach,
        ]);
    }
    function chiTiet($id)
    {
        $chiTietHoaDon = ChiTietHoaDon::find($id);
        if(empty($chiTietHoaDon)) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy sản phẩm có' .$id
            ]);
        }
        return json_encode([
            'success' => true,
            'data'    => $chiTietHoaDon,
        ]);
    }
    function themMoi(Request $request)
    {
        $chiTietHoaDon = new ChiTietHoaDon();
        $chiTietHoaDon->id = $request->id;
        $chiTietHoaDon->mahdid = $request->mahdid;
        $chiTietHoaDon->sanphamid = $request->sanphamid;
        $chiTietHoaDon->soluong = $request->soluong;
        $chiTietHoaDon->dongia = $request->dongia;
        $chiTietHoaDon->created_at = $request->created_at;
        $chiTietHoaDon->updated_at = $request->updated_at;
        if( $chiTietHoaDon->save())
        return json_encode([
            'success' => true,
            'message' => 'Thêm giỏ hàng thành công'
        ]);
        return json_encode([
            'success' => false,
            'message' => 'Thêm giỏ hàng thất bại'
        ]);
    }
}
