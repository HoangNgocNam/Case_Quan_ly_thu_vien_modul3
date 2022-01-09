<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bbootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/sstyle.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span>Thư viện sách</span></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#" class="nav-link" data-nav-section="home"><span>Trang chủ</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link" data-nav-section="projects"><span>Sách hay</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link" data-nav-section="team"><span>Nhóm</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link" data-nav-section="testimony"><span>Testimony</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link" data-nav-section="blog"><span>Blog</span></a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse">
            <a href="{{route('auth.showFormLogin')}}">Đăng Nhập</a>
        </div>
    </div>
</nav>

<section class="hero-wrap js-fullheight" style="background-image: url({{asset('images/aa.jpg')}});" data-section="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                <p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="https://www.youtube.com/watch?v=CfyCb3OWkyo" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
                        <span class="ion-ios-play play mr-2"></span>
                        <span class="watch">Xem video</span>
                    </a>
                </p>
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Một cuốn sách hay cho ta một điều tốt, một người bạn tốt cho ta một điều hay</h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">"Việc đọc sách rất quan trọng. Nếu bạn biết cách đọc, cả thế giới sẽ mở ra cho bạn"</p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
    <div class="container">
        <div class="row d-flex">


        </div>
    </div>
</section>

<section class="ftco-section ftco-project bg-light" data-section="projects">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Tuyển tập</span>
                <h2 class="mb-4">Những quyển sách hay nhất mọi thời đại</h2>
                <p>Sách là tri thức, là nguồn cảm hứng bất tận</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 testimonial">
                <div class="carousel-project owl-carousel">
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{asset('images/dacnhantam.jpg')}}" class="img-fluid" alt="Colorlib Template">
                                <a href="{{asset('images/dacnhantam.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Đắc nhân tâm</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{asset('images/hatgiong.jpg')}}" class="img-fluid" alt="Colorlib Template">
                                <a href="{{asset('images/hatgiong.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Hạt giống tâm hồn</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{asset('images/quanhlo.jpg')}}" class="img-fluid" alt="Colorlib Template">
                                <a href="{{asset('images/quanhlo.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Quẳng gánh lo đi mà vui sống</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{asset('images/thaydoi.jpg')}}" class="img-fluid" alt="Colorlib Template">
                                <a href="{{asset('images/thaydoi.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Đời thay đổi khi chúng ta thay đổi</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{asset('images/danhthuc.jpg')}}" class="img-fluid" alt="Colorlib Template">
                                <a href="{{asset('images/danhthuc.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Đánh thức con người phi thường trong bạn</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project">
                            <div class="img">
                                <img src="{{asset('images/nguoitay.jpg')}}" class="img-fluid" alt="Colorlib Template">
                                <a href="{{asset('images/nguoitay.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                            <div class="text px-4">
                                <h3><a href="#">Người thầy vĩ đại</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" data-section="team">
    <div class="container-fluid p-0">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Người nắm giữ</span>
                <h2 class="mb-4">Ban Quản lý thư viện</h2>
                <p>Muốn đi nhanh thì đi một mình, muốn đi xa thì đi cùng nhau</p>
            </div>
        </div>
        <div class="row no-gutters">

            <div class="col-md-8 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/ni.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Thủ thư</span>
                            <h3 class="mb-4">Nam Hoàng</h3>
                            <div class="faded">
                                <p>"Những gì sách dạy chúng ta cũng giống như lửa. Chúng ta lấy nó từ nhà hàng xóm, thắp nó trong nhà ra, đem nó truyền cho người khác và nó trở thành tài sản của tất cả mọi người.”</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/hi.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Cán bộ thư viện</span>
                            <h3 class="mb-4">Hà Thu</h3>
                            <div class="faded">
                                <p>"Bạn đã đọc một cuốn sách hay khi bạn giở đến trang cuối cùng và cảm thấy như mình vừa chia tay một người bạn.”</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/mi.jpg);"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3 text-center">
                        <div>
                            <span class="position mb-2">Cán bộ thư viện</span>
                            <h3 class="mb-4">Mỹ Trần</h3>
                            <div class="faded">
                                <p>"Học từ cuộc sống là chưa đủ, học từ sách mới thấy được an ủi."</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimony-section" data-section="testimony">
    <div class="container">
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12 d-flex align-items-center">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex align-items-stretch">
                            <div class="user-img d-flex align-self-stretch" style="background-image: url(images/my.jpg)">
                            </div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="icon-quote">
                                        <span class="icon-quote-left"></span>
                                    </div>
                                    <p class="mb-4">Sách là tri thức, là nguồn cảm hứng bất tận</p>
                                    <p class="name">Jacob Bolton</p>
                                    <span class="position">CEO, Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex align-items-stretch">
                            <div class="user-img d-flex align-self-stretch" style="background-image: url(images/testimony-2.jpg)">
                            </div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="icon-quote">
                                        <span class="icon-quote-left"></span>
                                    </div>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    <p class="name">Jacob Bolton</p>
                                    <span class="position">CEO, Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" data-section="blog">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Đề cử</span>
                <h2 class="mb-4">Những quyển sách yêu thích</h2>
                <p>Sách không những cho ta kiến thức, sách còn là bạn</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20" style="background-image: url('images/coxanh.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">

                        </div>
                        <h3 class="heading"><a href="single.html">Tôi thấy hoa vàng trên cỏ xanh</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>

                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Đọc thêm <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20" style="background-image: url('images/demen.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">

                        </div>
                        <h3 class="heading"><a href="single.html">Dế mèn phiêu lưu ký</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Đọc thêm <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="single.html" class="block-20" style="background-image: url('images/chotoi.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">

                        </div>
                        <h3 class="heading"><a href="single.html">Cho tôi xin một vé đi tuổi thơ</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Đọc thêm <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20" style="background-image: url('images/kimm.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">

                        </div>
                        <h3 class="heading"><a href="single.html">Nhà giả kim</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Đọc thêm <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20" style="background-image: url('images/chipheo.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">

                        </div>
                        <h3 class="heading"><a href="single.html">Chí phèo</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Đọc thêm <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="single.html" class="block-20" style="background-image: url('images/pi.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4 topp">

                        </div>
                        <h3 class="heading"><a href="single.html">Cuộc đời của Pi</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <div class="d-flex align-items-center mt-4 meta">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Đọc thêm <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-4">Địa chỉ</h3>
                    <p>CodeGym Hà Nội</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-4">Số điện thoại</h3>
                    <p><a href="tel://1234567920">024 6253 8829</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-4">Địa chỉ email</h3>
                    <p><a href="mailto:info@yoursite.com">info@codegym.vn</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <h3 class="mb-4">Website</h3>
                    <p><a href="https://codegym.vn/">codegym.vn</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Square</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Architectural Design</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Interior Design</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Exterior Design</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Lighting Design</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>AutoCAD Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('js/jjquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/ppopper.min.js')}}"></script>
<script src="{{asset('js/bbootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('js/google-map.js')}}"></script>
<script src="{{asset('js/mmain.js')}}"></script>

</body>
</html>
