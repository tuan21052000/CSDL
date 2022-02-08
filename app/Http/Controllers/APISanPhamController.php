<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
class APISanPhamController extends Controller
{
    function layDanhSach()
    {
          $danhSach = SanPham::all();
          return  json_encode([
              'success' => true,
              'data' => $danhSach,
          ]);
    }
    function chiTiet($id)
    {
        $sanPham = SanPham::find($id);
        if(empty($sanPham)) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy sản phẩm có' .$id
            ]);
        }
        return json_encode([
            'success' => true,
            'data'    => $sanPham,
        ]);
    }
    function themMoi(Request $request)
    {
        $sanPham = new SanPham();
        $sanPham->id = $request->id;
        $sanPham->masp = $request->masp;
        $sanPham->tensp = $request->tensp;
        $sanPham->hinhanh = $request->hinhanh;
        $sanPham->soluong = $request->soluong;
        $sanPham->tinhtrang = $request->tinhtrang;
        $sanPham->dongia = $request->dongia;
        $sanPham->loaispid = $request->loaispid;
        $sanPham->created_at = $request->created_at;
        $sanPham->updated_at = $request->updated_at;
        $sanPham->save();

        return json_encode([
            'success' => true,
            'message' => 'Thêm sản phẩm thành công'
        ]);
    }
    function Xoa(Request $request)
    {
        $sanPham = new SanPham();
        $sanPham->id = $request->id;
        $sanPham->masp = $request->masp;
        $sanPham->tensp = $request->tensp;
        $sanPham->hinhanh = $request->hinhanh;
        $sanPham->soluong = $request->soluong;
        $sanPham->tinhtrang = $request->tinhtrang;
        $sanPham->dongia = $request->dongia;
        $sanPham->loaispid = $request->loaispid;
        $sanPham->created_at = $request->created_at;
        $sanPham->updated_at = $request->updated_at;
        $sanPham->delete();
        
        return json_encode([
            'success' => true,
            'message' => 'Xóa sản phẩm thành công'
        ]);
    }
    function Sua(Request $request)
    {
        $sanPham = new SanPham();
        $sanPham->id = $request->id;
        $sanPham->masp = $request->masp;
        $sanPham->tensp = $request->tensp;
        $sanPham->hinhanh = $request->hinhanh;
        $sanPham->soluong = $request->soluong;
        $sanPham->tinhtrang = $request->tinhtrang;
        $sanPham->dongia = $request->dongia;
        $sanPham->loaispid = $request->loaispid;
        $sanPham->created_at = $request->created_at;
        $sanPham->updated_at = $request->updated_at;
        $sanPham->update();
        
        return json_encode([
            'success' => true,
            'message' => 'Sửa sản phẩm thành công'
        ]);
    }
    function upload(Request $request)
    {
        if(!$request->hasFile('hinhanh')) {
            //Nếu chưa có file upload thì báo lỗi
            return json_encode([
                'success' => false,
                'message' => 'Thêm ảnh thất bại'
            ]);
         }
         else {
            //Xử lý file upload
            $image = $request->file('hinhanh');
            //Lưu trữ file tại public/images
            $name = date('Y_m_d_H_i_s_').$image->getClientOriginalName();
            $imagePath = $image->move('hinhanh', $name);
            return $name;
         }
    }

}
