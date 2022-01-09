<!doctype html>
<html lang="en">
<head>
    <title>Register </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}" rel="stylesheet">
    {{--    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body class="img js-fullheight" style="background-image: url({{asset('images/bb.jpg')}});">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h1 class="heading-section">Bạn chưa có tài khoản?</h1>
                <h2 class="heading-section">Đăng ký ngay nào</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <form action="{{route('auth.register')}}" method="post" class="signin-form">
                        @csrf
                        {{--                        <div class="form-group">--}}
                        {{--                            <input type="text" name="email" class="form-control" placeholder="Email" required>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <input id="password-field" name="password" type="password" class="form-control" placeholder="Mật khẩu" required>--}}
                        {{--                            <span toggle="#password-field" id="eye-password" class="fa fa-fw fa-eye-slash field-icon"></span>--}}
                        {{--                        </div>--}}
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Name</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                </div>
                                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" placeholder="Nhập tên">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Email</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Nhập email">
                            </div>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label class="sr-only" for="inlineFormInputGroup">Phone</label>--}}
{{--                            <div class="input-group mb-2">--}}
{{--                                <div class="input-group-prepend">--}}
{{--                                    <div class="input-group-text"><i class="fas fa-phone"></i></div>--}}
{{--                                </div>--}}
{{--                                <input type="text" id="email" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Nhập số điện thoại">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend" id="icon-eye-password">
                                    <div class="input-group-text"><i id="eye-password" class="fas fa-eye-slash"></i></div>
                                </div>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Đăng Ký</button>
                        </div>

                        <div class="form-group d-md-flex">
                            <div class="w-50">
                            </div>
                        </div>
                    </form>

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
</html>


