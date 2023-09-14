<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testMaster(){
        $chuyenMuc = ChuyenMuc::where('is_open', 1)->get();
        $loaiSanPham = LoaiSanPham::where('is_open', 1)->get();
        return view('Admin.home_page', compact('chuyenMuc', 'loaiSanPham'));
    }
}
