<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}" rel="stylesheet">
    {{--    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body class="img js-fullheight" style="background-image: url({{asset('images/aa.jpg')}});">
<section class="ftco-section">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h1 class="heading-section">Chào mừng bạn đã đến với thư viện sách</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <form action="{{route('auth.login')}}" method="post" class="signin-form">
                        @csrf
                        {{--                        <div class="form-group">--}}
                        {{--                            <input type="text" name="email" class="form-control" placeholder="Email" required>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <input id="password-field" name="password" type="password" class="form-control" placeholder="Mật khẩu" required>--}}
                        {{--                            <span toggle="#password-field" id="eye-password" class="fa fa-fw fa-eye-slash field-icon"></span>--}}
                        {{--                        </div>--}}

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

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Đăng Nhập</button>
                        </div>

                        <div class="form-group d-md-flex">
                            <div class="w-50">
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="{{route('auth.showFormRegister')}}" style="color: #fff">Đăng ký</a>
                            </div>
                        </div>
                    </form>
                    <p class="w-100 text-center">&mdash; Đăng Nhập Với &mdash;</p>
                    <div class="social d-flex text-center">
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
</section>
</body>
</html>


