<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chào mừng khóa 09</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
              Trang Chủ
            </a>
          </li>

          @foreach ($chuyenMuc as $key => $value)
          <li class="nav-item dropdown">
            <a class="nav-link drowdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            {{ $value->ten_chuyen_muc }}</a>
          <ul class="dropdown-menu">
            @foreach ($loaiSanPham as $k => $v)
                @if($value->id == $v->id_chuyen_muc)
                <li><a class="dropdown-item" href="#">{{$v->ten_loai_san_pham}}</a></li>
                @endif
            @endforeach
          </ul>
        </li>

          @endforeach


          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Phụ Kiện
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Main</a></li>
              <li><a class="dropdown-item" href="#">Chip</a></li>
              <li><a class="dropdown-item" href="#">GPU</a></li>
              <li><a class="dropdown-item" href="#">RAM</a></li>
            </ul>
          </li> --}}
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
        <img src="/data_admin/dist/img/credit/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/data_admin/dist/img/credit/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/data_admin/dist/img/credit/3.png" class="d-block w-100" alt="...">
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
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <marquee behavior="" direction="">
            Website này đang ở máy của ông thầy, chứ ko phải là ở máy tụi em!
          </marquee>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header text-center bg-primary">
            <b class="text-white">
              <span class="fa-stack fa-4x">
                <i class="fa-solid fa-ban text-danger fa-stack-2x"></i>
                <i class="fa-solid fa-dog fa-stack-1x"></i>
              </span>
              <span class="fa-stack fa-4x">
                <i class="fa-solid fa-dog fa-stack-1x"></i>
                <i class="fa-solid fa-ban text-danger fa-stack-2x"></i>
              </span>
              <!-- <i class="fa-solid fa-dog fa-3x text-danger fa-spin"></i>
              <i class="fa-solid fa-dog fa-3x text-warning fa-pulse"></i> -->
              XEM TỬ VI CỦA BẠN</b>
          </div>
            <form action="/abc-xyz" method="post">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Họ Và Tên</label>
                        <input name="ho_va_ten" type="text" class="form-control">
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
            <b class="text-white">THÔNG TIN TỬ VI CỦA BẠN</b>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Họ Và Tên</th>
                  <th scope="col">{{ isset($full_name) ? $full_name : '' }}</th>
                </tr>
                <tr>
                  <th scope="col">Năm Sinh</th>
                  <th scope="col">{{ isset($nam_sinh) ? $nam_sinh : '' }}</th>
                </tr>
                <tr>
                  <th scope="col">Con Giáp</th>
                  <th scope="col">{{ isset($conGiap) ? $conGiap : '' }}</th>
                </tr>
                <tr>
                  <th scope="col">Tuổi Hợp</th>
                  <th scope="col">{{ isset($tuoiHop) ? $tuoiHop : '' }}</th>
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

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>
