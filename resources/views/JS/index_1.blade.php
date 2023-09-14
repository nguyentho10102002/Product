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
                <form action="/admin/test-JS" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Tạo người dùng</button>
                </form>
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
                                {{ isset($faker) ? $faker-> firstName : ''}}
                            </td>
                        </tr>
                        <tr>
                            <th>Last name</th>
                            <td> {{ isset($faker) ? $faker-> lastName : ''}}</td>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <td>{{ isset($faker) ? $faker-> address : ''}}</td>
                        </tr>
                        <tr>
                            <th>Số Card</th>
                            <td>{{ isset($faker) ? $faker-> creditCardNumber: ''}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ isset($faker) ? $faker-> email : ''}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ isset($faker) ? $faker->phoneNumber : ''}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
@section("js")

@endsection
