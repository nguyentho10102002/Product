@extends("Admin.Share.master_page")
@section("tieu_de")
    Học JS(Javs Scripts) Căn Bản
@endsection
@section("noi_dung")
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                Auto tạo ra người dùng
            </div>
            <div class="card-body">
                    <button id= "taoNguoiDung"  class="btn btn-primary">Tạo người dùng</button>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-haeder">
                Thông tin
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>First Name</th>
                            <td>
                                <span id="first_name"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Last name</th>
                            <td> <span id="last_name"></span></td>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <td><span id="dia_chi"></span></td>
                        </tr>
                        <tr>
                            <th>Số Card</th>
                            <td><span id="so_card"></span></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><span id="email"></span></td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td><span id="phone"></span></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
@section("js")
<script>
    $(document).ready(function(){
        $("#taoNguoiDung").click(function(){
            axios
                .post("/admin/test-JS-2")
                .then((res)=>{
                    $("#first_name").text(res.data.firstName);
                    $("#last_name").text(res.data.lastName);
                    $("#dia_chi").text(res.data.diaChi);
                    $("#so_card").text(res.data.soCard);
                    $("#phone").text(res.data.phone);
                    $("#email").text(res.data.email);
                });
        });
    });
</script>
@endsection
