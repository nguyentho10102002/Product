@extends('Admin.Share.master_page')
@section('tieu_de')
   JS buổi 2
@endsection
@section('noi_dung')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Thông tin đầu vào
            </div>
            <div class="card-body">
                <label>Năm sinh</label>
                <input id="year" type="number" min="1900" max="2050 " class="form-control">
            </div>
            <div class="card-footer">
                <button id="xem_tuoi" class="btn btn-primary">Xem tuổi</button>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                Thông tin tuổi
            </div>

            <div class="car-body">
                <table id= "table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <td>Họ và tên</td>
                            <td>Năm sinh</td>
                            <td>Người yêu</td>
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
        $(document).ready(function(){
        //    var arr_can = ['Canh', 'Tân' , 'Nhâm ', 'Quý', 'Giáp' , 'Ất' , 'Bính','Đinh', 'Dậu','Kỉ'];
        //    var arr_chi = ['Thân','Dậu','Tuất','Hợi','Tý','Sửu','Dần','Mão','Thìn','Tỵ','Ngọ','Mùi'];
        //     $("#xem_tuoi").click(function(){

        //         //var nam_sinh = lấy dữ liệu từ input có id là year
        //         var nam_sinh =$("#year").val() * 1 ;
        //         var con_giap = arr_can[nam_sinh % 10]+ ' ' + arr_chi[nam_sinh % 12];
        //         var tuoi =  2022 - nam_sinh;
        //         var tuoi_them_4 = nam_sinh + 4 ;
        //         var tuoi_them_8 = nam_sinh + 8 ;
        //         var tuoi_hop_1 = arr_chi[nam_sinh_4%12];
        //         var tuoi_hop_2 = arr_chi[nam_sinh_8%12];
        //         var tuoi_hop = 'Bạn hợp tuổi ' + tuoi_hop_1 + ' và tuổi ' + tuoi_hop_2;

        //         $('#a').text(tuoi);
        //         $('#b').text(con_giap);
        //         $('#c').text(tuoi_hop);
        //     });
        var list_student = [] ;// 1 mảng chứa toàn bộ sinh viên



        var student_1 = {
            'ho_va_ten' : 'Nguyễn Văn Thọ' ,
            'nam_sinh' : '2002',
            'nguoi_yeu' : 'Nguyễn Thị ',

        };//{} là 1 object hay 1 đối tượng


        var student_2 = {
            'ho_va_ten' : 'Nguyễn Thị ' ,
            'nam_sinh' : '2002',
            'nguoi_yeu' : 'Nguyễn Văn Thọ ',

        };
        var noi_dung = '<tr>';
        noi_dung += '<th>1</th>';
        noi_dung += '<td>' + student_1.ho_va_ten   + '</td>';
        noi_dung += '<td>'+student_1.nam_sinh+'</td>';
        noi_dung += '<td>'+student_1.nguoi_yeu+'</td>';
        noi_dung += '</tr>';

        noi_dung += '<tr>';
        noi_dung += '<th>1</th>';
        noi_dung += '<td>'+student_2.ho_va_ten+'</td>';
        noi_dung += '<td>'+student_2.nam_sinh+'</td>';
        noi_dung += '<td>'+student_2.nguoi_yeu+'</td>';
        noi_dung += '</tr>';

        $("#table tbody").html(noi_dung);

        });
    </script>
@endsection
