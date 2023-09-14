@extends('Admin.Share.master_page');

@section('tieu_de')
    Học JS Căn Bản
@endsection
@section('noi_dung')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <div id="link">

                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên Loại Sản Phẩm</label>
                        <input id="ten_loai_san_pham" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Slug Loại Sản Phẩm</label>
                        <input id="slug_loai_san_pham" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên Chuyên Mục</label>
                        <input id="ten_chuyen_muc" type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <b>Danh Sách Loại Sản Phẩm</b>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered">
                        <thead>
                            <tr class="text-center align-middle">
                                <th>#</th>
                                <th>Tên Loại Sản Phẩm</th>
                                <th>Slug Loại Sản Phẩm</th>
                                <th>Tên Chuyên Mục</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            var check = false;
            var time = 5;
            setInterval(() => {
                $("#link").text('Bạn cần chờ ' + time + ' giây')
                time-- ;
                if(time < 0){
                    $("#link").html('<a class="btn btn-primary " href="https://google.com">Download</a>');
                }
            }, 1000);


            // var chuyenmuc = [];
            // var chuyenmuc_1 = {
            //     'ten_loai_san_pham': 'Điện Thoại',
            //     'Slug_loai_san_pham': 'Iphone',
            //     'ten_chuyen_muc': 'Phone',
            // };

            // var chuyenmuc_2 = {
            //     'ten_loai_san_pham': 'LapTop',
            //     'Slug_loai_san_pham': 'Acer',
            //     'ten_chuyen_muc': 'laptop',
            // };

            // var chuyenmuc_3 = {
            //     'ten_loai_san_pham': 'Tivi',
            //     'Slug_loai_san_pham': 'Sony',
            //     'ten_chuyen_muc': 'Tv',
            // };

            // var chuyenmuc_4 = {
            //     'ten_loai_san_pham': 'Tủ lạnh',
            //     'Slug_loai_san_pham': 'Toshiba',
            //     'ten_chuyen_muc': 'fridge',
            // };
            // var chuyenmuc_5 = {
            //     'ten_loai_san_pham': 'Máy Giặt',
            //     'Slug_loai_san_pham': 'SamSum',
            //     'ten_chuyen_muc': 'fridgewashing_machine',
            // };
            // chuyenmuc.push(chuyenmuc_1);
            // chuyenmuc.push(chuyenmuc_2);
            // chuyenmuc.push(chuyenmuc_3);
            // chuyenmuc.push(chuyenmuc_4);
            // chuyenmuc.push(chuyenmuc_5);

            // var noi_dung = '';

            // // foreach($chuyenmuc as $key => $value){}
            // $.each(chuyenmuc,function(key,value){
            //     noi_dung += '<tr>';
            //     noi_dung += '<th class="text-center">'+(key+1)+'</th>';
            //     noi_dung += '<td>' + value.ten_loai_san_pham + '</td>';
            //     noi_dung += '<td>' + value.Slug_loai_san_pham + '</td>';
            //     noi_dung += '<td>' + value.ten_chuyen_muc + '</td>';
            //     noi_dung += '<td class="text-center text-nowrap">';
            //     noi_dung += '<button class="btn btn-danger mr-1">Xóa Bỏ</button>';
            //     noi_dung += '<button class="edit btn btn-primary" data-index="'+ key  +'">Cập Nhật</button>';
            //     noi_dung += '</tr>';
            // });
            // $("#table tbody").html(noi_dung);

            // $('body').on('click','.edit' ,function(){
            //     var line = $(this).data('index');
            //     toastr.success('Loading...... ');
            //     //alert ('Em vừa bị click!!!');

            //     $("#ten_loai_san_pham").val(chuyenmuc[line].ten_loai_san_pham);
            //     $("#slug_loai_san_pham").val(chuyenmuc[line].Slug_loai_san_pham);
            //     $("#ten_chuyen_muc").val(chuyenmuc[line].ten_chuyen_muc);
            // });
        });
    </script>
@endsection
