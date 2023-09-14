<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
    public function testLoaiSanPham()
    {
        $chuyenMuc=ChuyenMuc::get();
        $data = LoaiSanPham::join('chuyen_mucs','loai_san_phams.id_chuyen_muc','chuyen_mucs.id')
        ->select('loai_san_phams.*','chuyen_mucs.ten_chuyen_muc')
        ->get();


        return view('Admin.page.LoaiSanPham.index', compact('chuyenMuc','data'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        LoaiSanPham::create([
            'ten_loai_san_pham' => $request->ten_loai_san_pham,
            'slug_loai_san_pham'=> $request->slug_loai_san_pham,
            'is_open'        => $request->is_open,
            'id_chuyen_muc'=> $request->id_chuyen_muc,
        ]);
        return redirect('/admin/loai-san-pham');
    }
    public function destroy($id)
    {
        $loaiSanPham = LoaiSanPham::where("id",$id)->first();
        if($loaiSanPham)
        {
            $loaiSanPham->delete();
            toastr()->success('Đã xóa loại sản phẩm thành công !!!');
            return redirect("/admin/loai-san-pham");

        }else{
            toastr()->error('loại sản phẩm không tồn tại !!!');
            return redirect("/admin/loai-san-pham");
        }

    }
    public function edit($id){
        $loaiSanPham = LoaiSanPham::where('id' , $id)->first();
        if($loaiSanPham){
            $chuyenMuc=ChuyenMuc::get();
            toastr()->success('Đang load dữ liệu...!!!');
            return view('Admin.page.LoaiSanPham.edit',compact('loaiSanPham','chuyenMuc'));
        }else{
            toastr()->error('Ê cu , không có loai san pham !!!');
            return redirect('/admin/loai-san-pham/cap-nhat');
    }
}
    public function update(Request $request){
        $loaiSanPham = LoaiSanPham::where('id',$request->id)->first();
        if($loaiSanPham){
            $loaiSanPham->ten_loai_san_pham = $request->ten_loai_san_pham;
            $loaiSanPham->slug_loai_san_pham = $request->slug_loai_san_pham;
            $loaiSanPham->is_open = $request->is_open;
            $loaiSanPham->id_chuyen_muc = $request->id_chuyen_muc;
            $loaiSanPham->save();

            toastr()->success('Đã cập nhật chuyên mục thành công !!!');
                return redirect('/admin/loai-san-pham');
        }else{
            toastr()->error('Chưa cập nhật thành công  !!!');
                return redirect('/admin/loai-san-pham');
        }
    }
}
