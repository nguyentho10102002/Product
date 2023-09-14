@extends('Admin.Share.master_page')
@section('tieu_de')
    Cập Nhật Chuyên Mục
@endsection
@section('noi_dung')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Cập Nhật Chuyên Mục
                </div>
                <div class="card-body">
                    <form action="/admin/cap-nhat" method="post">
                        @csrf
                        <input name="id" type="hidden" class="form-control" value="{{$chuyenMuc->id}}">
                        <div class="form-group">
                            <label>Tên Chuyên Mục</label>
                            <input value="{{$chuyenMuc->ten_chuyen_muc}}" name="ten_chuyen_muc" type="text" class="form-control" placeholder="Nhập vào tên chuyên mục">
                        </div>
                        <div class="form-group">
                            <label>Slug Chuyên Mục</label>
                            <input value="{{$chuyenMuc->slug_chuyen_muc}}" name="slug_chuyen_muc" type="text" class="form-control" placeholder="Nhập vào slug chuyên mục">
                        </div>
                        <div class="form-group">
                            <label>Tình Trạng</label>
                            <select name="is_open" class="form-control">
                                <option value="1" {{$chuyenMuc->is_open == 1 ? 'selected' : ''}}>Hiển Thị</option>
                                <option value="0" {{$chuyenMuc->is_open == 0 ? 'selected' : ''}}>Tạm Tắt</option>
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-warning">Cập Nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
