<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chào mừng khóa 09</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-danger" href="#">Khóa 09</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="fa-solid fa-house-fire fa-xs fa-rotate-0" style="color: #dc3545;"></i>Trang Chủ</a>
          </li>

         @foreach ($chuyenMuc as $key => $value )
         <li class="nav-item">
            <a class="nav-link" href="#">{{$value->ten_chuyen_muc}}</a>
         </li>

         @endforeach
        </ul>
      </div>
    </div>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container mt-2 mb-5">
    <div class="row">

   @yield('phan_dung_rieng_phia_tren')
    {{-- <div class="row mb-3">
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
  </div> --}}

    <div class="row">
      <div class="col-md-3 mb-2">
        <div class="card">
          <div class="card-header">
            <b>Iphone 14 Promax</b>
          </div>
          <div class="card-body">
            <img src="https://static-images.vnncdn.net/files/publish/2022/9/6/iphone-14-colors-purple-368.png"
              class="card-img">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus id repellendus quibusdam
              quaerat nam, soluta laborum omnis facilis amet!</p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary">Mua Ngay!</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
          <div class="card-header">
            <b>Iphone 14 Promax</b>
          </div>
          <div class="card-body">
            <img src="https://static-images.vnncdn.net/files/publish/2022/9/6/iphone-14-colors-purple-368.png"
              class="card-img">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus id repellendus quibusdam
              quaerat nam, soluta laborum omnis facilis amet!</p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary">Mua Ngay!</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
            <div class="card-header">
                <b>Iphone 14 Promax</b>
            </div>
            <div class="card-body">
                <img src="https://static-images.vnncdn.net/files/publish/2022/9/6/iphone-14-colors-purple-368.png" class="card-img">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus id repellendus quibusdam quaerat nam, soluta laborum omnis facilis amet!</p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary">Mua Ngay!</button>
            </div>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
            <div class="card-header">
                <b>Iphone 14 Promax</b>
            </div>
            <div class="card-body">
                <img src="https://static-images.vnncdn.net/files/publish/2022/9/6/iphone-14-colors-purple-368.png" class="card-img">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus id repellendus quibusdam quaerat nam, soluta laborum omnis facilis amet!</p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary">Mua Ngay!</button>
            </div>
        </div>
      </div>
    </div>
    @yield('phan_dung_rieng_phia_duoi')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>
