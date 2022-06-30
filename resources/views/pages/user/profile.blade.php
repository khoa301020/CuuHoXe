@extends('layout_user')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  -->
    <style>
    
    .row{
        padding-top:20px;
    }
    .col-lg-12 {
    line-height: 50px;
    padding: 15px 0;
}
    .profile_wrapper{
        text-align: center;
    }
    #imagePreview{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border:#ccc solid 5px;
        margin-bottom: 20px;
        

    }
    /* .button{
        background-color:#ccc;
        padding:10px;
    } */
    

.form-check{
    display: inline-block;
    padding:0 35px;
}
.input1{
       
       width: 70%;
       height: 50px;
       border-radius: 10px;
      float: right;
       color: #ccc;   
}
.g {
    display: inline-block;
    margin-bottom: 15px;
    }
 .col-lg-12   label{
        float: left;
    padding: 0 50px;
    }
  
</style>
    <script >
        
    window.onload = function()
    {
        var profile = document.getElementById("profile");
        var request = document.getElementById("request");
        var password = document.getElementById("password");
        profile.style.color = "#19448e";
        request.style.color = "black";
        password.style.color = "black";
    };
    var imageUpload = function () {
            var self = this;
            this.selector = {
                fileInput: document.getElementById('imageUploadInput'),
                fileInputBtn: document.getElementById('imageUploadInputBtn'),
                imagePreview: document.getElementById('imagePreview'),
                status: document.getElementById('uploadFileStatus'),
                sendBtn: document.getElementById('sendData')
            };
            this.imageData = "";
            this.fileTypes = ['image/png', 'image/jpeg'];
            this.maxSize = 30 * 1024 * 1024; // 30MB
            this.uploadUrl = 'https://tutrithuc.com/TestAPI/imageUpload';
            this.onChangeInput = function (e) {
                // Reset file data / image preview
                self.selector.status.innerHTML = '';
                self.selector.imagePreview.setAttribute('src', "public/frontend/images/add_default.png");
                self.imageData='';
                
                // Get the current file upload
                var file = e.target.files[0];

                // Validate file type
                if (this.fileTypes.indexOf(file.type) == -1) {
                    self.selector.status.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                    return;
                }
                
                // Validate file size
                if (file.size > this.maxSize) {
                    self.selector.status.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                    return;
                }

                var reader = new FileReader();
                reader.onload = function (e) {
                    self.imageData = e.target.result;
                    
                    // Validate file content
                    self.selector.imagePreview.onerror = function(){
                        self.imageData = "";
                        self.selector.imagePreview.setAttribute('src', "public/frontend/images/add_default.png");
                        // self.selector.status.innerHTML = 'Nội dung hình không hợp lệ';
                    };
                    self.selector.imagePreview.setAttribute('src', self.imageData);
                };
                reader.readAsDataURL(file);
            };
            this.sendData = function () {
                // Validate when file content is empty
               
                
                var request = new XMLHttpRequest();
                request.open("POST", this.uploadUrl);
                request.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
                request.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        self.selector.status.innerHTML = "Upload thành công";
                    } else {
                        console.log(this.responseText);
                        self.selector.status.innerHTML = "Đã có lỗi xảy ra, không upload được hình";
                    }
                };

                // Send request to server
                request.send(JSON.stringify(data));
            };

            /*
            * Event trigger
            */
            this.selector.fileInput.addEventListener('change', function (e) {
                self.onChangeInput(e);
            });
            this.selector.fileInputBtn.addEventListener('click', function () {
                self.selector.fileInput.click();
            });
            this.selector.sendBtn.addEventListener('click', function () {
                self.sendData();
            });
        };
        window.addEventListener("DOMContentLoaded", function () {
            console.log('DOM is loaded');
            new imageUpload();
        });

       //giới tính      
        const radioButtons = document.querySelectorAll('input[name="gt"]');
      
            for (const radioButton of radioButtons) {
                if (radioButton.checked) {
                    selectedSize = radioButton.value;
                    break;
                }
            }
            // show the output:
           
        ;
        function luuthaydoi() {
            
                alert("Bạn đã lưu thay đổi!");
                window.location="{{URL::to('/')}}";
            
            
        }
        
       
// Data Picker Initialization


</script>
</head>
<body>
<div class="profile_wrapper">
  <div class="profile-card js-profile-card">
    <div class="profile_img">
    <div>
                    <img src="{{asset('public/frontend/images/profie_img.png')}}" alt="Ảnh đại diện" id="imagePreview">
                </div>
     
      <div class="imageUpload">
                    <input style="display: none;" type="file" id="imageUploadInput" accept=".jpg,.png" src="{{asset('public/frontend/images/daidien.jpg')}}">
                    <span class="button" id="imageUploadInputBtn">Đổi ảnh</span>
                </div>
                <div id="uploadFileStatus"></div>

    </div>

    
      <div class="profile-body">
      <form class="form-wrap" action="#">
        <div class="profile-name">
      <p class="name_user" id="name_user" style="font-size:25px;margin:auto;background:none;display: inline-flex;
" >{{Session::get('LoggedUser')->username}}</p>
<svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" >
                        <path d="M8.54 0L6.987 1.56l3.46 3.48L12 3.48M0 8.52l.073 3.428L3.46 12l6.21-6.18-3.46-3.48" fill="#9B9B9B" fill-rule="evenodd"></path>
                    </svg>
    </div>                               <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="email">Họ và tên</label>
                                                    <input style=" padding: 10px 15px;margin-left:10px;" class="input1" id="name" name="name" type="text" value="{{Session::get('LoggedUser')->hoVaTen}}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="phone number">Email</label>
                                                    <input style=" padding: 10px 15px;margin-left:10px;color:black" class="input1" name="phone" type="email" value="{{Session::get('LoggedUser')->email}}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="phone number">Số điện thoại</label>
                                                    <input style=" padding: 10px 15px;margin-left:10px;color:black" class="input1" name="phone" type="tel" value="{{Session::get('LoggedUser')->soDienThoai}}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="phone number">Ngày sinh</label>
                                                    <input style=" padding: 10px 15px;margin-left:10px;color:black" class="input1" name="birthday" type="date" value="{{Session::get('LoggedUser')->ngaySinh}}" >
                                                </div>
                                            </div>
                                            <!-- <div class="radio-content">
                                                <div class="form-radio">
                                                    <label style="float:left;padding-left: 50px;" class="form-radio-label" for="pwd">Giới tính</label>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="gtNam" name="gt" value="Nam"
                                                            checked>
                                                    <label class="form-check-label" for="gtNam">Nam</label>
                                                        </div>
                                                        <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="gtNu" name="gt" value="Nữ"
                                                            >
                                                    <label class="form-check-label" for="gtNu">Nữ</label>
                                                        </div>
                                                </div>
                                            </div> -->
                                           
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button id="save" class="btn style1 w-100 d-block" style="background-color: #002993;color: #fff; border-radius:10px;margin:30px;border:none;" onclick="luuthaydoi()">Lưu Thay Đổi</button>
                                                </div>
                                            </div>
</div>
                                    </form>
      </div>
      </div>
      </div>

</body>

</html>



@endsection