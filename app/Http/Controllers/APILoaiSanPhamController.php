<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiSanPham;
class APILoaiSanPhamController extends Controller
{
    function layLoaiSanPham()
    {
        $danhSach = LoaiSanPham::all();
        return  json_encode([
            'success' => true,
            'data' => $danhSach,
        ]);
    }
    function chiTiet($id)
    {
        $loaiSanPham = LoaiSanPham::find($id);
        if(empty($loaiSanPham)) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy hóa đơn' .$id
            ]);
        }
        return json_encode([
            'success' => true,
            'data'    => $loaiSanPham,
        ]);
    }
    function themMoi(Request $request)
    {
        $loaiSanPham = new LoaiSanPham();
        $loaiSanPham->id = $request->id;
        $loaiSanPham->tenloai = $request->tenloai;
        $loaiSanPham->created_at = $request->created_at;
        $loaiSanPham->updated_at = $request->updated_at;
        $loaiSanPham->save();

        return json_encode([
            'success' => true,
            'message' => 'Thêm hóa loại thành công'
        ]);
    }
}
