@extends('Admin.Share.master_page');

@section('tieu_de')
    Quản Lí Loại Sản Phẩm
@endsection
@section('noi_dung')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Thêm mới loại sản phẩm
                </div>
                <div class="card-body">
                    <form action="/admin/loai-san-pham" method="POST">
                        @csrf
                            <div class="form-group">
                                <label> Tên Loại Sản Phẩm</label>
                                <input name = "ten_loai_san_pham" type="text" class="form-control"  placeholder="Nhập vào tên Loại Sản Phẩm">
                            </div>
                            <div class="form-group">
                                <label> Slug Loại Sản Phẩm</label>
                                <input name = "slug_loai_san_pham" type="text" class="form-control"  placeholder="Nhập vào Slug Loại Sản Phẩm">
                            </div>
                            <div class="form-group">
                                <label>Tình trạng</label>
                                <select name = "is_open" class="form-control">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Tạm Tắt</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Chuyên Mục</label>
                                <select name = "id_chuyen_muc" class="form-control">
                                    @foreach ($chuyenMuc as $key=>$value )
                                    @if($value->is_open==1)
                                    <option value="{{$value->id}}">{{$value->ten_chuyen_muc}}</option>
                                    @else
                                    <option value="{{$value->id}}" class="bg-danger">{{$value->ten_chuyen_muc}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Thêm mới</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Danh Sách Loại Sản Phẩm
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên Loại Sản Phẩm</th>
                                <th class="text-center">Slug Loại Sản Phẩm</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center">Chuyên Mục</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key =>$value)
                                <tr>
                                    <th class="text-center align-middle">{{$key + 1}}</th>
                                    <th class="align-middle">{{$value->ten_loai_san_pham}}</th>
                                    <th class="align-middle">{{$value->slug_loai_san_pham}}</th>

                                    <th class="align-middle text-nowrap">
                                            @if($value->is_open == 1)
                                                <button class="btn btn-primary">Hiển Thị</button>
                                            @else
                                                <button class="btn btn-warning">Tạm Tắt</button>
                                            @endif
                                    </th>
                                    <th class="align-middle">{{$value->ten_chuyen_muc}}</th>
                                    <th class="text-nowrap">
                                        <a href="/admin/loai-san-pham/cap-nhat/{{$value->id}}" class="btn btn-info">Cập nhật</a>
                                        <a href="/admin/san-pham/huy-bo/{{$value->id}}" class="btn btn-danger">Hủy Bỏ</a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
