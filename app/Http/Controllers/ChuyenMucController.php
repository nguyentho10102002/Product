<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use Illuminate\Http\Request;

class ChuyenMucController extends Controller
{

    public function testChuyenMuc()
    {
        $data = ChuyenMuc::get();

        foreach($data as $key => $value);
        {

        }
        return view('Admin.page.ChuyenMuc.index', compact('data'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        ChuyenMuc::create([
            'ten_chuyen_muc' => $request->ten_chuyen_muc,
            'slug_chuyen_muc'=> $request->slug_chuyen_muc,
            'is_open'        => $request->is_open,
        ]);
        return redirect('/admin');
    }
    public function test()
    {
        $chuyenMuc = ChuyenMuc::where('is_open',1)->get();
        return view('Admin.Share.tu_vi',compact('chuyenMuc'));
    }
    public function edit($id){
            $chuyenMuc = ChuyenMuc::where('id' , $id)->first();

            if($chuyenMuc){
                toastr()->error('Đang load dữ liệu...!!!');
                return view('Admin.page.ChuyenMuc.edit',compact('chuyenMuc'));
            }else{
                toastr()->error('Ê cu , không có chuyên mục !!!');
                return redirect('/admin');
        }
    }
    public function update(Request $request){
        $chuyenMuc = ChuyenMuc::where('id',$request->id)->first();
        if($chuyenMuc){
            $chuyenMuc->ten_chuyen_muc = $request->ten_chuyen_muc;
            $chuyenMuc->slug_chuyen_muc = $request->slug_chuyen_muc;
            $chuyenMuc->is_open = $request->is_open;
            $chuyenMuc->save();

            toastr()->success('Đã cập nhật chuyên mục thành công !!!');
                return redirect('/admin');
        }else{
            toastr()->error('Chưa cập nhật thành công  !!!');
                return redirect('/admin');
        }
    }
}
