@extends('layout_user')
@section('content')
<div class="xMDeox">
    <div class="Hvae38" role="main">
        <form>
            <div class="DQHtXe">
                <div class="FUOi1p">
                    <h1 class="DSKSYU">Đổi mật khẩu</h1>
                    <div class="tk-R8Z">Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</div>
                </div>
                <div class="fo5IeT">
                    <div class="Kuz0mN">
                        <div class="A8yLgM">
                            <div class="ltFKuQ">
                                <div class="op-21F">
                                    <label class="mlaS58" for="passwordnow">Mật khẩu hiện tại</label>
                                </div>
                                <div class="iqUYOb">
                                    <input id="passwordnow" style="padding: 0.625rem;
                                    box-sizing: border-box;
                                    outline: none;
                                    border: 1px solid rgba(0,0,0,.14);
                                    height: 2.5rem;" onkeyup="kiemtramatkhau()" class="-wQUjw kpK-3W" type="password" autocomplete="off" name="password" value="">
                                </div>
                                <button class="_7vstgM">Quên mật khẩu?</button>
                            </div>
                        </div>
                    </div>
                    <div class="Kuz0mN">
                        <div class="A8yLgM">
                            <div class="ltFKuQ">
                                <div class="op-21F">
                                    <label class="mlaS58" for="newPassword">Mật khẩu mới</label>
                                </div>
                                <div class="iqUYOb" >
                                    <input id="newPassword" style="padding: 0.625rem;
                                    box-sizing: border-box;
                                    outline: none;
                                    border: 1px solid rgba(0,0,0,.14);
                                    height: 2.5rem;" onkeyup="kiemtramatkhau()" class="-wQUjw kpK-3W" type="password" autocomplete="off" name="newPassword" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Kuz0mN">
                        <div class="A8yLgM">
                            <div class="ltFKuQ">
                                <div class="op-21F">
                                    <label class="mlaS58" for="newPasswordRepeat">Xác nhận mật khẩu</label>
                                </div>
                                <div class="iqUYOb">
                                    <input id="newPasswordRepeat" style="padding: 0.625rem;
                                    box-sizing: border-box;
                                    outline: none;
                                    border: 1px solid rgba(0,0,0,.14);
                                    height: 2.5rem;" onkeyup="kiemtramatkhau()" class="-wQUjw kpK-3W" type="password" autocomplete="off" name="newPasswordRepeat" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Kuz0mN">
                        <div class="RlzsL7"></div> 
                        <div class="vuqET4">
                            <button id="confirm" type="button" class="btn btn-solid-primary btn--m btn--inline btn-solid-primary--disabled" aria-disabled="true">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    window.onload = function()
    {
        var profile = document.getElementById("profile");
        var request = document.getElementById("request");
        var password = document.getElementById("password");
        profile.style.color = "black";
        request.style.color = "black";
        password.style.color = "#19448e";
    };
    function kiemtramatkhau(){
        passwordnow  = document.getElementById("passwordnow").value;
        newPassword  = document.getElementById("newPassword").value;
        newPasswordRepeat  = document.getElementById("newPasswordRepeat").value;
        confirm = document.getElementById("confirm");
        if(passwordnow.trim() != "" && newPassword.trim() != "" && newPasswordRepeat.trim() != ""){
            confirm.setAttribute("aria-disabled", false);
            confirm.setAttribute("class", "btn btn-solid-primary btn--m btn--inline");
        }
    };
    var confirm = document.getElementById("confirm");
    confirm.onclick = function () {
        if(confirm.getAttribute("aria-disabled") == "false"){
            alert("Thay đổi mật khẩu thành công");
            window.location="{{URL::to('/user/profile')}}";
        }
        
    }

</script>
@endsection