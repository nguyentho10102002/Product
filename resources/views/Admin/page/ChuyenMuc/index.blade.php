@extends('Admin.Share.master_page');

@section('tieu_de')
    Quản Lí Chuyên Mục
@endsection

@section('noi_dung')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Thêm mới chuyên mục
            </div>
            <div class="card-body">
                <form action="/admin" method="POST">
                    @csrf
                        <div class="form-group">
                            <label> Tên chuyên mục</label>
                            <input name = "ten_chuyen_muc" type="text" class="form-control"  placeholder="Nhập vào tên chuyên mục">
                        </div>
                        <div class="form-group">
                            <label> Slug chuyên mục</label>
                            <input name = "slug_chuyen_muc" type="text" class="form-control"  placeholder="Nhập vào Slug chuyên mục">
                        </div>
                        <div class="form-group">
                            <label>Tình trạng</label>
                            <select name = "is_open" class="form-control">
                                <option value="1">Hiển thị</option>
                                <option value="0">Tạm Tắt</option>
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
                Danh Sách Chuyên Mục
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Tên Chuyên Mục</th>
                            <th class="text-center">Slug Chuyên Mục</th>
                            <th class="text-center">Tình Trạng</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key =>$value)
                            <tr>
                                <th class="text-center align-middle">{{$key + 1}}</th>
                                <th class="align-middle">{{$value->ten_chuyen_muc}}</th>
                                <th class="align-middle">{{$value->slug_chuyen_muc}}</th>
                                <th class="align-middle">
                                    @if($value->is_open == 1)
                                    <button class="btn btn-primary">Hiển Thị</button>
                                    @else
                                    <button class="btn btn-warning">Tạm Tắt</button>
                                    @endif
                                </th>
                                <th class="text-nowrap">
                                    <a href="/admin/cap-nhat/{{$value->id}}"><button class="btn btn-info">Cập Nhật</button></a>
                                    <button class="btn btn-danger">Hủy Bỏ</button>
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
