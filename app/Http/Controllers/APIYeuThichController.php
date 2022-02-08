<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YeuThich;
class APIYeuThichController extends Controller
{
    function layYeuThich()
    {
        $yeuthich = YeuThich::all();
        return  json_encode([
            'success' => true,
            'data' => $yeuthich,
        ]);
    }
    function chiTiet($id)
    {
        $yeuThich = YeuThich::find($id);
        if(empty($yeuThich)) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy hóa đơn' .$id
            ]);
        }
        return json_encode([
            'success' => true,
            'data'    => $yeuThich,
        ]);
    }
    function themMoi(Request $request)
    {
        $yeuThich = new YeuThich();
        $yeuThich->id = $request->id;
        $yeuThich->sanphamid = $request->sanphamid;
        $yeuThich->dongiaid = $request->dongiaid;
        $yeuThich->created_at = $request->created_at;
        $yeuThich->updated_at = $request->updated_at;
        $yeuThich->save();

        return json_encode([
            'success' => true,
            'message' => 'Thêm yêu thích thành công'
        ]);
    }
}
