<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main-color.css')}}">
    @yield('header')
</head>
<body>
    <header>
      <header id="header" class="header-area style-01 layout-03">
        <div class="header-middle biolife-sticky-object ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                        <a href="index-2.html" class="biolife-logo"><img src="images/organic-3.png" alt="biolife logo" width="135" height="34"></a>
                    </div>
                    <div class="col-lg-4 col-md-7 hidden-sm hidden-xs">
                        <div class="primary-menu">
                        <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                            <li class="menu-item"><a href="index-2.html">Trang chủ</a></li>
                            <li class="menu-item menu-item-has-children has-megamenu">
                                <a href="#" class="menu-name" data-title="Shop" >Sản phẩm</a>
                                <div class="wrap-megamenu lg-width-900 md-width-750">
                                    <div class="mega-content">
                                        <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                            <div class="wrap-custom-menu vertical-menu">
                                                <h4 class="menu-title">Hoa Quả Tươi</h4>
                                                <ul class="menu">
                                                    <li><a href="#">Quà Hoa Quả & Hạt</a></li>
                                                    <li><a href="#">Hoa Quả Hỗn Hợp</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                            <div class="wrap-custom-menu vertical-menu">
                                                <h4 class="menu-title">Rau Củ</h4>
                                                <ul class="menu">
                                                    <li><a href="#">Dâu</a></li>
                                                    <li><a href="#">Lê</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                            <div class="wrap-custom-menu vertical-menu ">
                                                <h4 class="menu-title">Trái Cây Tươi</h4>
                                                <ul class="menu">
                                                    <li><a href="#">Giỏ Hạt Táo</a></li>
                                                    <li><a href="#">Dâu Tây</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                            <div class="wrap-custom-menu vertical-menu">
                                                <h4 class="menu-title">Sản Phẩm Nổi Bật</h4>
                                                <ul class="menu">
                                                    <li><a href="#">Kem Coffee</a></li>
                                                    <li><a href="#">Sốt Mayonnaise</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="menu-item"><a href="contact.html">Bài viết</a></li>
                            <li class="menu-item"><a href="contact.html">Liên hệ</a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                        <div class="biolife-cart-info">
                            <div class="minicart-block">
                                <div class="minicart-contain">
                                    <a href="#" class="link-to">
                                            <span class="icon-qty-combine">
                                                <i class="icon-cart-mini biolife-icon"></i>
                                            </span>
                                        <span class="title">Giỏ hàng</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
                        <div class="header-top hidden-xs">
                            <div class="container">                       
                                <ul style="list-style-type: none; padding-left: 0; margin-top:8px;">
                                    <li><a href="#" class="login-link" style="color: black;"><i class="biolife-icon icon-login"></i>Đăng nhập/Đăng ký</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>   
        </div>
        <div class="header-bottom hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="vertical-menu vertical-category-block">
                            <div class="block-title">
                                <span class="menu-icon">
                                    <span class="line-1"></span>
                                    <span class="line-2"></span>
                                    <span class="line-3"></span>
                                </span>
                                <span class="menu-title">Danh mục sản phẩm</span>
                                <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                            <div class="wrap-menu">
                                <ul class="menu clone-main-menu">
                                    <li class="menu-item "><a href="#" class="menu-name" data-title="Quà Hoa Quả & Hạt"><i class="biolife-icon icon-fruits"></i>Trái cây miền nhiệt đới</a></li>
                                    <li class="menu-item "><a href="#" class="menu-name" data-title="Rau Củ"><i class="biolife-icon icon-broccoli-1"></i>Rau Củ</a></li>
                                    <li class="menu-item "><a href="#" class="menu-name" data-title="Hoa Quả Tươi"><i class="biolife-icon icon-grape"></i>Hoa Quả Tươi</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-avocado"></i>Trái cây nhập khẩu</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fresh-juice"></i>Trái cây xuất khẩu</a></li>
                                </ul>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 padding-top-2px">
                        <div class="header-search-bar layout-01">
                            <form action="#" class="form-search" name="desktop-seacrh" method="get">
                                <input type="text" name="s" class="input-text" value="" placeholder="Bạn muốn mua gì...">
                                <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                            </form>
                        </div>
                        <div class="live-info">
                            <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">0396813911</b></p>
                            <p class="working-time">T2-T6: 8:30am-7:30pm; T7-CN: 9:30am-4:30pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <main>
      @yield('content')
    </main>
    <footer id="footer" class="footer layout-03">
        <div class="footer-content background-footer-03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-9">
                        <section class="footer-item">
                            <div class="footer-phone-info">
                                <i class="biolife-icon icon-head-phone"></i>
                                <p class="r-info">
                                    <span>Đặt các câu hỏi</span>
                                    <span>0396813911</span>
                                </p>
                            </div>
                            <div class="newsletter-block layout-01">
                                <div class="form-content">
                                    <form action="#" name="new-letter-foter">
                                        <input type="email" class="input-text email" value="" placeholder="Nhập địa chỉ email...">
                                        <button type="submit" class="bnt-submit" name="ok">Đăng ký</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">Liên kết</h3>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">Giới Thiệu</a></li>
                                            <li><a href="#">Về Cửa Hàng </a></li>
                                            <li><a href="#">Thông Tin Giao Hàng</a></li>
                                            <li><a href="#">Chính Sách Bảo Mật</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">Về chúng tôi</a></li>
                                            <li><a href="#">Dịch Vụ</a></li>
                                            <li><a href="#">Liên Hệ Chúng Tôi</a></li>
                                            <li><a href="#">Nhận Xét</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">Liên hệ</h3>
                            <div class="contact-info-block footer-layout xs-padding-top-10px">
                                <ul class="contact-lines">
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-location"></i>
                                            <b class="desc">5A,đường số 8,kp4,phường Tam Bình,TP.Thủ Đức,TP.Hồ Chí Minh </b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-phone"></i>
                                            <b class="desc">Điện thoại: 0396813911</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-letter"></i>
                                            <b class="desc">Email:  duongconglong@company.com</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-clock"></i>
                                            <b class="desc">Thời gian: 7 ngày trong tuần bắt đầu từ 8h sáng</b>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="biolife-social inline">
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="separator sm-margin-top-70px xs-margin-top-40px"></div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="payment-methods">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @yield('footer')
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/jquery.countdown.min.js"></script>
    <script src="jquery/jquery.nice-select.min.js"></script>
    <script src="jquery/jquery.nicescroll.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/biolife.framework.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>
