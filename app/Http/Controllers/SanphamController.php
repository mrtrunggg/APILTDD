<?php

namespace App\Http\Controllers;
use App\Models\Sanpham;
use Illuminate\Http\Request;

class SanphamController extends Controller
{
<<<<<<< HEAD
    public function showall(){       
        $dsSP = Sanpham::all();
        return json_encode(
            $dsSP     
        );             
=======
    //Lay danh sach sản phẩm
    public function Laydanhsach(){
        $danhSach = Sanpham::all();
        return json_encode([
            'success' =>true,
            'data'=> $danhSach
        ]);
>>>>>>> 4c29620a4bacb663ec6f32e8f8d1125be967983b
    }
    //Lay chi tiết 1 sản phẩm
    public function Laychitiet($id){
        $danhSach = Sanpham::find($id);
        if(empty($danhSach)){
            return json_encode([
                'success' =>false,
                'message'=> 'Sản phẩm không tồn tại'
            ]);
    }
        return json_encode([
            'success' =>false,
            'message'=> $danhSach
        ]);
    }
    //Them moi
    public function Themmoi(Request $request)
    {
        #kiểm tra dữ liệu đầu vào
        if(empty($request->sanpham_name)){
            return json_encode([
                'success' =>false,
                'message'=> 'Chưa nhập tên sản phẩm'
            ]);
        }
        #kiểm tra tên danh mục có tồn tại chưa
        $exitstingSanpham = Sanpham::where('sanpham_name',$request->sanpham_name)->count();
        if($exitstingSanpham > 0)
        {
            return json_encode([
                'success' =>false,
                'message'=> 'Tên sản phẩm đã tồn tại'
            ]);
        }
        $danhSach = new Sanpham();
        $danhSach->sanpham_name = $request->sanpham_name;
        $danhSach->loaisanpham_id = $request->loaisanpham_id;
        $danhSach->thuonghieu = $request->thuonghieu;
        $danhSach->dongia = $request->dongia;
        $danhSach->soluong = $request->soluong;
        $danhSach->mota = $request->mota;
        $danhSach->kichthuoc = $request->kichthuoc;
        $danhSach->hinhanh = $request->hinhanh;
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
    //Cập nhật
    public function Capnhat($id, Request $request){
        $danhSach = Sanpham::find($id);
        if(empty($danhSach)){
            return json_encode([
                'success' =>false,
                'message'=> 'Không tìm thấy sản phẩm'
            ]);
        }
        #kiểm tra dữ liệu đầu vào
        if(empty($request->sanpham_name)){
            return json_encode([
                'success' =>false,
                'message'=> 'Chưa nhập tên sản phẩm'
            ]);
        }
        #kiểm tra tên danh mục có tồn tại chưa
        $exitstingSanpham = Sanpham::where('id','<>',$id)->where('sanpham_name',$request->sanpham_name)->count();
        if($exitstingSanpham > 0)
        {
            return json_encode([
                'success' =>false,
                'message'=> 'Tên sản phẩm đã tồn tại'
            ]);
        }
        #cập nhật sách
        $danhSach->sanpham_name = $request->sanpham_name;
        $danhSach->loaisanpham_id = $request->loaisanpham_id;
        $danhSach->thuonghieu = $request->thuonghieu;
        $danhSach->dongia = $request->dongia;
        $danhSach->soluong = $request->soluong;
        $danhSach->mota = $request->mota;
        $danhSach->kichthuoc = $request->kichthuoc;
        $danhSach->hinhanh = $request->hinhanh;
        $danhSach->trangthai = $request->trangthai;
        $danhSach->save();
        return json_encode([
            'success' =>true,
            'message'=> 'Cập nhật sản phẩm thành công'
        ]);
    }
    //Xoa
    public function Xoa($id){
        $danhSach = Sanpham::find($id);
        if(empty($danhSach)){
            return json_encode([
                'success' =>false,
                'message'=> 'Không tìm thấy sản phẩm'
            ]);
        }
        $danhSach->delete();
        return json_encode([
            'success' =>true,
            'message'=> 'Xoá sản phẩm thành công'
        ]);
    }

}
