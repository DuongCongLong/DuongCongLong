<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
  <script src={{asset('bootstrap/js/bootstrap.bundle.min.js')}}></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="image/logo.png" alt="Fruitshop Logo">Fruitshop
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Trang chủ</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Sản phẩm
            </a>
            <ul class="dropdown-menu">
              <li><a class="text-dark dropdown-item" href="#">Trái cây Việt Nam</a></li>
              <li><a class="text-dark dropdown-item" href="#">Trái cây nước ngoài</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bài viết</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Giới thiệu</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Bạn muốn tìm gì"  >
          <button class="btn bg-success" type="button">Search</button>
        </form>
      </div>
      <div class="d-flex">
        <a href="#" class="btn btn-secondary"><i class="fa-solid fa-cart-shopping fa-fade"></i> Giỏ hàng</a>
        <a href="#" class="btn btn-secondary"><i class="fa-solid fa-user fa-fade"></i> Thành viên</a>
      </div>
    </div>
  </nav>
    @yield('header')
    <main>
      @yield('content')
    </main>
    <footer>
        <div class="footer_main">
          <div class="footer_tag">
          <h1>Về chúng tôi</h1>
          <p>Trang chủ</p>
          <p>Sản phẩm</p>
          <p>Dịch vụ</p>
          <p>Blog</p>
          </div>    
          <div class="footer_tag">
            <h1>Liên hệ</h1>
            <p><i class="fa-solid fa-location-dot fa-fade"></i>5a,đường số 8,kp4,phường Tam Bình,Tp Thủ Đức,Tp Hồ Chí Minh</p>
            <p><i class="fa-solid fa-phone fa-fade"></i>0123456789</p>
            <p><i class="fa-solid fa-phone fa-fade"></i>0257879999</p>
            <p><i class="fa-solid fa-envelope fa-fade"></i>fruitshopcompany@gmail.com</p>
          </div>
          <div class="footer_tag">
            <h1>Theo chúng tôi</h1>
            <p><i class="fa-brands fa-facebook-f fa-fade"></i>Facebook</p>
            <p><i class="fa-brands fa-twitter fa-fade"></i>Twitter</p>
            <p><i class="fa-brands fa-instagram fa-fade"></i>Instagram</p>
            <p><i class="fa-brands fa-linkedin-in fa-fade"></i>Linkedin</p>
            <p><i class="fa-brands fa-google fa-fade"></i>Google</p>
          </div>
          <div class="footer_tag">
            <h1>Thanh toán trực tuyến</h1>
            <img src="image/card1.png">
            <img src="image/card2.png">
            <img src="image/card3.png">
            <img src="image/card4.png">
          </div>
        </div>
        <p class="end">All Rights Reserved Design By:<span>Dương Công Long</span></p>
      </footer>
    @yield('footer')