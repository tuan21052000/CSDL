<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIKhachHangController extends Controller
{
    function layKhachHang()
    {
        $khachhang = KhachHang::all();
        return  json_encode([
            'success' => true,
            'data' => $khachhang,
        ]);
    }
    function chiTiet($id)
    {
        $khacHang = KhachHang::find($id);
        if(empty($khacHang)) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy hóa đơn' .$id
            ]);
        }
        return json_encode([
            'success' => true,
            'data'    => $khacHang,
        ]);
    }
    function themMoi(Request $request)
    {
        $khacHang = new KhachHang();
        $khacHang->id = $request->id;
        $khacHang->tenkh = $request->tenkh;
        $khacHang->diachi = $request->diachi;
        $khacHang->sdt = $request->sdt;
        $khacHang->makh = $request->makh;
        $khacHang->email = $request->email;
        $khacHang->matkhau = $request->matkhau;
        $khacHang->created_at = $request->created_at;
        $khacHang->updated_at = $request->updated_at;
        $khacHang->save();

        return json_encode([
            'success' => true,
            'message' => 'Thêm khách hàng thành công'
        ]);
    }

    public function login(Request $request)
    {
        $khacHang = khachhang::where('email',$request->email)
        ->where('password', $request->password)->get();
        if($khachhang == null) {
            return reponse()->json(401);
        }else {
            return reponse()->json(402);
        }
        return reponse()->json(200);
    }
}
