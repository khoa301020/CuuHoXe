
@extends('layout')
@section('content')
<div id="primary-yeu-cau">
    <iframe id="toado" src="" width="700" height="793" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <script>

        function errorgeo(err) {
            var errcode = err.code;
            var message = err.message;
            var boxhtml = document.getElementById("toado");
            boxhtml.innerHTML = "Mã lỗi: " + errcode + "<br>" + "Nội dung lỗi: " + message;

        }

        function showcoor(pos) {
            var coord = pos.coords;
            var long = coord.longitude;
            var lat  = coord.latitude;
            var boxhtml = document.getElementById("toado");
            var diadiem = document.getElementById("diadiem");
            
            var urlmap = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60939.96312830838!2d"+lat+"!3d"+long+"!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3140acdef985e9d3%3A0xc530418d967e6b85!2zMTfCsDE4JzU3LjMiTiAxMDbCsDQwJzIxLjkiRQ!5e0!3m2!1svi!2s!4v1655800618501!5m2!1svi!2s";
            boxhtml.setAttribute("src", urlmap);
            diadiem.setAttribute("value", lat +"N, "+long+"E");
        }

        navigator.geolocation.getCurrentPosition(showcoor, errorgeo);
        var submit = document.getElementById("submit")
        
        
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
                        self.selector.status.innerHTML = 'Nội dung hình không hợp lệ';
                    };
                    self.selector.imagePreview.setAttribute('src', self.imageData);
                };
                reader.readAsDataURL(file);
            };
            this.sendData = function () {
                // Validate when file content is empty
                if (this.imageData == ""){
                    self.selector.status.innerHTML = 'Vui lòng chọn hình để tải lên';
                    return;
                }
                
                // Prevent double click
                var data = {
                    'imageData': this.imageData
                };
                this.imageData = "";
                
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
        
        function guiyeucau() {
            var vande = document.getElementById('vande').value;
            var imageUploadInput = document.getElementById('imageUploadInput');
            minhchung = imageUploadInput.value;
            if(vande.trim() == ""){
                alert("Bạn chưa nhập vấn đề!");
            }else if(minhchung == ""){
                alert("Bạn chưa tải hình minh chứng!");
            }else{
                alert("Bạn đã gửi yêu cầu cứu hộ!");
                window.location="{{URL::to('/')}}";
            }
            
        }
    </script>
    <div class="to">
        <form action="GET">
            <h2>Gọi cứu hộ</h2>
            {{-- <i class="fab fa-app-store-ios"></i> --}}
            <label>Dịch vụ</label>
            <select id="dichvu">
                <option value="keoxe">Kéo xe</option>
                <option value="valop">Vá lốp</option>
                <option value="giaoxang">Giao xăng</option>
                <option value="suakhoa">Sửa khóa</option>
                <option value="kichbinhxe">Kích bình xe</option>
            </select>
            <label>Địa điểm</label>
            <input type="text" id="diadiem" name="diadiem" value="" readonly="readonly">    
            <label>Vấn đề</label>
            <input type="text" id="vande" name="vande">
            <label>Minh chứng</label>
            <div class="container-yeu-cau imageUploadContainer">
                <div>
                    <img src="{{asset('public/frontend/images/add_default.png')}}" alt="Ảnh xem trước" id="imagePreview">
                </div>
                <div class="imageUpload">
                    <input style="display: none;" type="file" id="imageUploadInput" accept=".jpg,.png">
                    <span class="button" id="imageUploadInputBtn">Chọn Hình</span>
                </div>
                <div id="uploadFileStatus"></div>
            </div>
            <input id="submit" type="button" name="submit" value="Gửi yêu cầu" onclick="guiyeucau()">
        </form>
    </div>
</div> <!-- #primary -->
@endsection