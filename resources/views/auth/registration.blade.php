@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Đăng Ký</title>
    
</head>

<body>
    <div class="header">
        CỨU HỘ XE
    </div>
    <div class="register">
        <div class="w3layouts-main">
            <h2 class="register-header">Đăng Ký Thành Viên</h2>
            <div class="register-content">

                <form action="{{ route('auth.createUser') }}" method="post" class="form-register">

                    @csrf
                    <h5 class="info">Thông tin đăng ký</h5>

                    <input type="name" class="g" name="name" placeholder="Họ và tên*" required="true">

                    <input type="text" class="g" name="username" placeholder="Tên đăng nhập*" required="true">

                    <input type="email" class="g" name="email" placeholder="Email*" required="true">

                    <input type="phone" class="g" name="phone" placeholder="Số điện thoại*" required="true">

                    <input type="text" class="g textbox-n" onfocus="(this.type='date')" onblur="(this.type='text')" name="birthday" placeholder="Ngày sinh*" required="true">

                    <input type="password" class="g" name="pass" placeholder="Mật khẩu*" required="true">

                    <input type="password" class="g" name="passConfirm" placeholder="Xác nhận mật khẩu*" required="true">

                    <!-- <span><input type="checkbox" />Remember Me</span> -->

                    <div class="clearfix"></div>

                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    <button type="submit" class="submit-btn">Đăng Ký</button>
                </form>
                <p><a href="login">Đăng nhập</a> vào tài khoản đã có</p>

            </div>
            <!-- <div class="clear"></div> -->
            <div class="img-register">
                <img src="{{ asset('resources/img/register.png') }}" alt="register" class="img">
            </div>


        </div>

</body>

</html>