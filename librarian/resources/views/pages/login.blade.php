<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/sstyle.css')}}">
    @toastr_css
</head>
<body class="img js-fullheight" style="background-image: url({{asset('images/ee.jpg')}});">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h1 style="color: white" class="heading-section">Chào mừng bạn đã đến với thư viện sách</h1>
{{--                <h1 style="color: white">Chào mừng bạn đã đến với thư viện sách</h1>--}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div style="background-color: white" class="col-md-6 col-lg-4">
                <br>
                <div class="login-wrap p-0">
                    <form action="{{route('auth.login')}}" method="post" class="signin-form">
                        @csrf
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Email</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control" id="inlineFormInputGroup" placeholder="Nhập email">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend" id="icon-eye-password">
                                    <div class="input-group-text"><i id="eye-password" class="fas fa-eye-slash"></i></div>
                                </div>
                                <input type="password" id="password" name="password" class="form-control" id="inlineFormInputGroup" placeholder="Nhập mật khẩu">
                            </div>
                        </div>

                        <div class="form-group" style="text-align: center">
{{--                            <a href="{{route('auth.showFormChangePassword')}}" class="btn btn-danger" style="color: #fff">Đổi mật khẩu</a>--}}
                            <a href="{{route('auth.showFormRegister')}}" class="btn btn-warning" style="color: #fff">Đăng ký</a>
                            <button type="submit" class="btn btn-success">Đăng Nhập</button>
                        </div>

                        <div class="form-group d-md-flex">
                            <div class="w-50">
                            </div>
{{--                            <div class="w-50 text-md-right">--}}
{{--                                <a href="{{route('auth.showFormRegister')}}" style="color: black">Đăng ký</a>--}}
{{--                            </div>--}}
                        </div>
                    </form>
                    <p style="background-color: white" class="w-100 text-center">&mdash; Đăng Nhập Với &mdash;</p>
                    <div style="background-color: white; padding-left: 125px" class="social d-flex text-center">
                        <a href="{{ url('/auth/redirect/google') }}" class="px-2 py-2 mr-md-1 rounded"><i class="fab fa-google-plus-g"></i> Google</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/login.js')}}"></script>
<script src="{{asset('js/jqueryy.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/boottstrap.min.js')}}"></script>
<script src="{{asset('js/mainn.js')}}"></script>
</body>
@jquery
@toastr_js
@toastr_render
</html>


