<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDon;
class APIHoaDonController extends Controller
{
    function layHoaDon()
    {
        $danhSach = GioHang::all();
        return  json_encode([
            'success' => true,
            'data' => $danhSach,
        ]);
    }
    function chiTiet($id)
    {
        $hoaDon = HoaDon::find($id);
        if(empty($hoaDon)) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy hóa đơn' .$id
            ]);
        }
        return json_encode([
            'success' => true,
            'data'    => $hoaDon,
        ]);
    }
    function themMoi(Request $request)
    {
        $hoadon = new HoaDon();
        $hoadon->id = $request->id;
        $hoadon->mahd = $request->mahd;
        $hoadon->khachhangid = $request->khachhangid;
        $hoadon->diachi = $request->diachi;
        $hoadon->phivanchuyen = $request->phivanchuyen;
        $hoadon->tongtien = $request->tongtien;
        $hoadon->ngaylap = $request->ngaylap;
        $hoadon->sdt = $request->sdt;
        $hoadon->created_at = $request->created_at;
        $hoadon->updated_at = $request->updated_at;
        $hoadon->save();

        return json_encode([
            'success' => true,
            'message' => 'Thêm hóa đơn thành công'
        ]);
    }
}
