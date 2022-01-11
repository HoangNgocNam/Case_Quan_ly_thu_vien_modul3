<!doctype html>
<html lang="en">
<head>
    <title>Change Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/sstyle.css')}}">
</head>
<body class="img js-fullheight" style="background-image: url({{asset('images/gg.jpg')}});">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h1 style="color: white" class="heading-section">Bạn muốn đổi mật khẩu?</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <form action="{{route('auth.changePassword')}}" method="post" class="signin-form">
                        @csrf

                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Password cũ</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend" id="icon-eye-password">
                                    <div class="input-group-text"><i id="eye-password" class="fas fa-eye-slash"></i></div>
                                </div>
                                <input type="password" id="currentPassword" name="currentPassword" class="form-control" placeholder="Nhập mật khẩu cũ">
                                @error('currentPassword')
                                <p style="color: red" >{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Password mới</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend" id="icon-eye-password">
                                    <div class="input-group-text"><i id="eye-password" class="fas fa-eye-slash"></i></div>
                                </div>
                                <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="Nhập mật khẩu mới">
                                @error('newPassword')
                                <p style="color: red" >{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Nhập lại Password</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend" id="icon-eye-password">
                                    <div class="input-group-text"><i id="eye-password" class="fas fa-eye-slash"></i></div>
                                </div>
                                <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Nhập lại mật khẩu mới">
                                @error('confirmPassword')
                                <p style="color: red" >{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" style="text-align: center">
                            <button href="{{ route('auth.login') }}" class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
                            <button type="submit" class="btn btn-success">Xác nhận</button>
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

