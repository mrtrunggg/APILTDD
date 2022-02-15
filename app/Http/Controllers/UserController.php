<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taikhoan;
class UserController extends Controller
{
    //
    
        public function register(Request $request)
        {
            #kiểm tra dữ liệu đầu vào
            if(empty($request->tentaikhoan)){
                return json_encode([
                    'success' =>false,
                    'message'=> 'Chưa nhập tên sản phẩm'
                ]);
            }
            #kiểm tra tên danh mục có tồn tại chưa
            $exitstingTaikhoan= Taikhoan::where('tentaikhoan',$request->tentaikhoan)->count();
            if($exitstingTaikhoan > 0)
            {
                return json_encode([
                    'success' =>false,
                    'message'=> 'Tên sản phẩm đã tồn tại'
                ]);
            }
            $danhSach = new Taikhoan();
            $danhSach->tentaikhoan = $request->tentaikhoan;
            $danhSach->loaisanpham_id = $request->loaisanpham_id;
            $danhSach->matkhau = $request->matkhau;
            $danhSach->loaitk = $request->loaitk;
            $danhSach->khachhang_name = $request->khachhang_name;
            $danhSach->cmnd = $request->cmnd;
            $danhSach->email = $request->email;
            $danhSach->sdt = $request->sdt;
            $danhSach->trangthai = 1;
            $danhSach->save();
            if ($danhSach == null){
                return json_encode([
                    'success' =>false,
                    'message'=> 'Thêm sản phẩm không thành công'
                ]);
            }
            return json_encode([
                'success' =>true,
                'message'=> 'Thêm sản phẩm thành công'
            ]);
        }
       
    
}
