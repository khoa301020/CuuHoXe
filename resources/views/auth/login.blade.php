<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Đăng Nhập</title>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</head>

<body>
    <div class="header">
        CỨU HỘ XE
    </div>
    <div class="login">
        <div class="w3layouts-main">
            <h2>Đăng Nhập</h2>
            <div class="login-content">

                <form action="{{ route('auth.check') }}" method="post" class="form">

                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    @csrf
                    <h5>Thông tin đăng nhập</h5>
                    <input type="text" class="ggg" name="username" placeholder="Tên đăng nhập*" required="true">
                    <input type="password" class="ggg" name="password" placeholder="Mật khẩu*" required="true">
                    <!-- <span><input type="checkbox" />Remember Me</span> -->

                    <div class="clearfix"></div>
                    <button type="submit" class="submit">Đăng Nhập</button>
                </form>
                <p><a href="register">Nhấn vào đây</a> nếu bạn chưa có mật khẩu</p>
                <h6><a href="#">Quên mật khẩu?</a></h6>
            </div>
            <img src="{{ asset('resources/img/login.png') }}" alt="login" class="img-login">
        </div>

    </div>

</body>

</html>