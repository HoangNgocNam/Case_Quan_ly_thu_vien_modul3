<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title','Trang chủ')</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js')}}" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Thư viện sách</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">{{\Illuminate\Support\Facades\Auth::user()->name??""}}</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Trang chủ
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Sách
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('books.index')}}">Danh sách</a>
                            <a class="nav-link" href="{{route('books.create')}}">Tạo mới</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Danh mục
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('catalogs.index')}}">Danh sách</a>
                            <a class="nav-link" href="{{route('catalogs.create')}}">Tạo mới</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Học sinh
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('students.list')}}">Danh sách</a>
                            <a class="nav-link" href="{{route('students.create')}}">Tạo mới</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Người dùng
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('users.index')}}">Danh sách</a>
                            <a class="nav-link" href="{{route('users.create')}}">Tạo mới</a>
                        </nav>
                    </div>


                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Phiếu mượn
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Tables
                    </a>
                </div>
            </div>

        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">@yield("title-content","Thư viện")</h2>
                <br>

                @yield('content','không có dữ liệu')



            </div>
        </main>

    </div>
</div>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@latest')}}" crossorigin="anonymous"></script>
<script src="{{asset('js/datatables-simple-demo.js')}}"></script>
=======
<html>
<head>
    <title>fancyBox - Fancy jQuery Lightbox Alternative | Demonstration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Add jQuery library -->
    <script type="text/javascript" src="../lib/jquery-1.10.1.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="../lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="../source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

            /*
             *  Different effects
             */

            // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect	: 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons	: {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });

            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
            */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',

                    arrows : false,
                    helpers : {
                        media : {},
                        buttons : {}
                    }
                });

            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });
    </script>
    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }

        body {
            max-width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<h1>fancyBox</h1>

<p>This is a demonstration. More information and examples: <a href="http://fancyapps.com/fancybox/">www.fancyapps.com/fancybox/</a></p>

<h3>Simple image gallery</h3>
<p>
    <a class="fancybox" href="1_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="1_s.jpg" alt="" /></a>

    <a class="fancybox" href="2_b.jpg" data-fancybox-group="gallery" title="Etiam quis mi eu elit temp"><img src="2_s.jpg" alt="" /></a>

    <a class="fancybox" href="3_b.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="3_s.jpg" alt="" /></a>

    <a class="fancybox" href="4_b.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="4_s.jpg" alt="" /></a>
</p>

<h3>Different effects</h3>
<p>
    <a class="fancybox-effects-a" href="5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="5_s.jpg" alt="" /></a>

    <a class="fancybox-effects-b" href="5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="5_s.jpg" alt="" /></a>

    <a class="fancybox-effects-c" href="5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="5_s.jpg" alt="" /></a>

    <a class="fancybox-effects-d" href="5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="5_s.jpg" alt="" /></a>
</p>

<h3>Various types</h3>
<p>
    fancyBox will try to guess content type from href attribute but you can specify it directly by adding classname (fancybox.image, fancybox.iframe, etc).
</p>
<ul>
    <li><a class="fancybox" href="#inline1" title="Lorem ipsum dolor sit amet">Inline</a></li>
    <li><a class="fancybox fancybox.ajax" href="ajax.txt">Ajax</a></li>
    <li><a class="fancybox fancybox.iframe" href="iframe.html">Iframe</a></li>
    <li><a class="fancybox" href="http://www.adobe.com/jp/events/cs3_web_edition_tour/swfs/perform.swf">Swf</a></li>
</ul>

<div id="inline1" style="width:400px;display: none;">
    <h3>Etiam quis mi eu elit</h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
    </p>
</div>

<p>
    Ajax example will not run from your local computer and requires a server to run.
</p>

<h3>Button helper</h3>
<p>
    <a class="fancybox-buttons" data-fancybox-group="button" href="1_b.jpg"><img src="1_s.jpg" alt="" /></a>

    <a class="fancybox-buttons" data-fancybox-group="button" href="2_b.jpg"><img src="2_s.jpg" alt="" /></a>

    <a class="fancybox-buttons" data-fancybox-group="button" href="3_b.jpg"><img src="3_s.jpg" alt="" /></a>

    <a class="fancybox-buttons" data-fancybox-group="button" href="4_b.jpg"><img src="4_s.jpg" alt="" /></a>
</p>

<h3>Thumbnail helper</h3>
<p>
    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="4_b.jpg"><img src="4_s.jpg" alt="" /></a>

    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="3_b.jpg"><img src="3_s.jpg" alt="" /></a>

    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="2_b.jpg"><img src="2_s.jpg" alt="" /></a>

    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="1_b.jpg"><img src="1_s.jpg" alt="" /></a>
</p>

<h3>Media helper</h3>
<p>
    Will not run from your local computer, requires a server to run.
</p>

<ul>
    <li><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">Youtube</a></li>
    <li><a class="fancybox-media" href="http://vimeo.com/47480346">Vimeo</a></li>
    <li><a class="fancybox-media" href="http://www.metacafe.com/watch/7635964/">Metacafe</a></li>
    <li><a class="fancybox-media" href="http://www.dailymotion.com/video/xoeylt_electric-guest-this-head-i-hold_music">Dailymotion</a></li>
    <li><a class="fancybox-media" href="http://twitvid.com/QY7MD">Twitvid</a></li>
    <li><a class="fancybox-media" href="http://twitpic.com/7p93st">Twitpic</a></li>
    <li><a class="fancybox-media" href="http://instagr.am/p/IejkuUGxQn">Instagram</a></li>
</ul>

<h3>Open manually</h3>
<ul>
    <li><a id="fancybox-manual-a" href="javascript:;">Open single item</a></li>
    <li><a id="fancybox-manual-b" href="javascript:;">Open single item, custom options</a></li>
    <li><a id="fancybox-manual-c" href="javascript:;">Open gallery</a></li>
</ul>

<p>
    Photo Credit: Instagrammer @whitjohns
</p>
>>>>>>> 456a80d7c1773bd2e7a04dea31973f92c5cb77a0
</body>
</html>
