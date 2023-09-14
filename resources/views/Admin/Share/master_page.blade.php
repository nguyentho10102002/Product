<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.Share.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('Admin.Share.header')
    @include('Admin.Share.menu')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">
                @yield('tieu_de')
            </h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        @yield('noi_dung')
      </div>
    </section>
  </div>
    @include('Admin.Share.footer')
</div>
    @include('Admin.Share.js')
    @yield('js')
</body>
</html>
