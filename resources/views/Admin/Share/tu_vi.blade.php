@extends('master_01')
@section('phan_dung_rieng_phia_tren')
    <div class="row mb-3">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header text-center bg-primary">
            <b class="text-white">
              <i class="fa-solid fa-wheelchair fa-2x fa-spin"></i>XEM TỬ VI CỦA BẠN</b>
          </div>
          <form action="/" method="POST">
          @csrf
          <div class="card-body">
              <div class="mb-3">
                <label class="form-label">Họ Và Tên</label>
                <input  name="ho_va_ten" type="text" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Năm Sinh</label>
                <input name="nam_sinh" type="number" class="form-control" min="1900" max="2050">
              </div>

          </div>
          <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Tính Tử Vi</button>
          </div>
        </form>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card">
          <div class="card-header text-center bg-warning">
            <b class="text-white">
              <span class="fa-stack ">
                <i class="fa-solid fa-cat fa-stack-1x"></i>
                <i class="fa-solid fa-ban fa-stack-2x"></i>
              </span>
              THÔNG TIN TỬ VI CỦA BẠN</b>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Họ Và Tên</th>
                  <th scope="col">{{isset($full_name) ? $full_name : 'chưa có tên '}}</th>
                </tr>
                <tr>
                  <th scope="col">Năm Sinh</th>
                  <th scope="col">{{isset($year) ? $year : 'chưa có năm '}}</th>
                </tr>
                <tr>
                  <th scope="col">Con Giáp</th>
                  <th scope="col">{{isset($con_giap) ? $con_giap : 'chưa có tuổi '}}</th>
                </tr>
                <tr>
                  <th scope="col">Tuổi Hợp</th>
                  <th scope="col">{{isset($tuoi_hop) ? $tuoi_hop : 'chưa có tuổi '}}</th>
                </tr>
                <tr>
                  <th colspan="2" class="text-center">
                    <img style="height: 200px;" src="https://bizweb.dktcdn.net/100/362/023/files/1218464-700x495-1-bf149e03-dee8-4b5d-b469-d78c1c621bd9.jpg" class="img-fluid" alt="...">
                  </th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
  </div>
@endsection
