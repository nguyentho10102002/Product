@extends('Admin.Share.master_page');

@section('tieu_de')
    Quản Lí Chuyên Mục
@endsection

@section('noi_dung')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Cập nhật loại sản phẩm
            </div>
            <div class="card-body">
                <form action="/admin/loai-san-pham/cap-nhat" method="POST">
                    @csrf
                    <input name="id" type="hidden" class="form-control" value="{{$loaiSanPham->id}}">
                        <div class="form-group">
                            <label> Tên Loại Sản Phẩm</label>
                            <input value="{{$loaiSanPham->ten_loai_san_pham}}" name = "ten_loai_san_pham"  type="text" class="form-control"  placeholder="Nhập vào tên Loại Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label> Slug Loại Sản Phẩm</label>
                            <input value="{{$loaiSanPham->slug_loai_san_pham}}" name = "slug_loai_san_pham" type="text" class="form-control"  placeholder="Nhập vào Slug Loại Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label>Tình trạng</label>
                            <select name = "is_open" class="form-control">
                                <option value="1" {{$loaiSanPham->is_open == 1 ? 'selected' : ''}}>Hiển thị</option>
                                <option value="0" {{$loaiSanPham->is_open == 0 ? 'selected' : ''}}>Tạm Tắt</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chuyên Mục</label>
                            <select name = "id_chuyen_muc" class="form-control">
                                @foreach ($chuyenMuc as $key=>$value )
                                @if($value->is_open==1)
                                <option value="{{$value->id}}" {{$loaiSanPham->id_chuyen_muc == $value->id ?  'selected' : ''}}>{{$value->ten_chuyen_muc}}</option>
                                @else
                                <option value="{{$value->id}}" class="bg-danger" {{$loaiSanPham->id_chuyen_muc == $value->id ?  'selected' : ''}}>{{$value->ten_chuyen_muc}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                </form>
            </div>
        </div>
    </div
@endsection
