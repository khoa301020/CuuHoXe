@extends('layout')
@section('content')
<div class="header-image ztl-breadcrumb-show">
    
    <div class="ztl-header-image" style="background-color:#f2f2f2;background-image: url({{asset('public/frontend/images/service_bg.jpg')}})">
        <div class="container">


            <h1 class="ztl-accent-font custom-header-title" style="color:#ffffff;">
                Dịch Vụ                    </h1>

        </div>
    </div>
    <div class="ztl-breadcrumb-container">
        <div class="container">
            <nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                <ul class="trail-items" itemscope="" itemtype="">
                    <meta name="numberOfItems" content="2">
                    <meta name="itemListOrder" content="Ascending">
                    <li itemprop="itemListElement" itemscope="" class="trail-item trail-begin"><a href="{{URL::to('/')}}" rel="home" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" class="trail-item trail-end">
                        <span itemprop="item">
                            <span itemprop="name"> > Dịch Vụ</span></span>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>
            </nav>
        </div>
    </div>
     
</div>
<div class="category-listing clearfix">
    <div class="container">
        <div class="row">
            <div class="ztl-flex-wrapper clearfix entry-content ">
                <div class="ztl-service-item">
                    <div class="row table-row">
                        <div class="first ztl-col col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="ztl-flex">
                                <div class="ztl-post-thumbnail" style="background-image:url({{asset('public/frontend/images/service/service-flattire.jpg')}});">
                                    <a href="/dich-vu/va-lop" title="Vá lốp tận nơi"></a>
                                </div>
                                <div class="ztl-post-details">
                                    <div class="ztl-service-info ztl-font-bold">
                                        <span class="ztl-service-info-line">
                                            <span>
                                                <span>MIỄN PHÍ</span>
                                                ĐỐI VỚI THÀNH VIÊN</span>
                                        </span>

                                        <span class="ztl-service-info-line" style="padding-right:0px;">
                                            <span>
                                                <span>PHỤC VỤ </span>
                                                24/24 </span>
                                        </span>
                                    </div>
                                    <div class="ztl-service-title ztl-accent-font">
                                        <h3><a href="/dich-vu/va-lop" title="Vá xe tận nơi"> Vá lốp tận nơi </a></h3>
                                    </div>
                                    <div class="ztl-service-description">
                                        Khi xe bạn bị nỗ lốp bạn chỉ cần gọi dịch vụ Cứu hộ xe máy, nhân viên ZuttoRide sẽ đến tận nới đễ hỗ trợ bạn ngay lập tức.
                                    </div>
                                    <div class="clear40"></div>
                                    <div class="ztl-button-one">
                                        <a href="/dich-vu/va-lop" title="Vá xe tận nơi"> Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ztl-service-item">
                    <div class="row table-row">
                        <div class="first ztl-col col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="ztl-flex">
                                <div class="ztl-post-thumbnail" style="background-image:url({{asset('public/frontend/images/service/service-gas.jpg')}});">
                                    <a href="/dich-vu/giao-xang" title="Auto Paint"></a>
                                </div>
                                <div class="ztl-post-details">
                                    <div class="ztl-service-info ztl-font-bold">
                                        <span class="ztl-service-info-line">
                                            <span>
                                                <span>MIỄN PHÍ</span>
                                                ĐỐI VỚI THÀNH VIÊN</span>
                                        </span>

                                        <span class="ztl-service-info-line" style="padding-right:0px;">
                                            <span>
                                                <span>PHỤC VỤ </span>
                                                24/24</span>
                                        </span>
                                    </div>
                                    <div class="ztl-service-title ztl-accent-font">
                                        <h3><a href="/dich-vu/giao-xang" title="Giao xăng">Giao xăng tận nơi</a></h3>
                                    </div>
                                    <div class="ztl-service-description">
                                        Khi xe bị hết xăng chỉ cần gọi đến tổng đài cứu hộ xe máy chúng tôi sẽ giao xăng tận nơi, bạn chỉ cần thanh toán tiền xăng theo giá thị trường.</div>
                                    <div class="clear20"></div>
                                    <div class="ztl-button-one">
                                        <a href="/dich-vu/giao-xang" title="Giao Xăng"> Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ztl-service-item">
                    <div class="row table-row">
                        <div class="first ztl-col col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="ztl-flex">
                                <div class="ztl-post-thumbnail" style="background-image:url({{asset('public/frontend/images/service/service-key.jpg')}});">
                                    <a href="/dich-vu/sua-khoa" title="Engine Diagnostics"></a>
                                </div>
                                <div class="ztl-post-details">
                                    <div class="ztl-service-info ztl-font-bold">
                                        <span class="ztl-service-info-line">
                                            <span>
                                                <span>MIỄN PHÍ</span>
                                                ĐỐI VỚI THÀNH VIÊN</span>
                                        </span>

                                        <span class="ztl-service-info-line" style="padding-right:0px;">
                                            <span>
                                                <span>PHỤC VỤ</span>
                                                24/24</span>
                                        </span>
                                    </div>
                                    <div class="ztl-service-title ztl-accent-font">
                                        <h3><a href="/dich-vu/sua-khoa" title="Engine Diagnostics"> Sửa khóa tận nơi </a></h3>
                                    </div>
                                    <div class="ztl-service-description">
                                        Bạn bị mất chìa khóa, trộm bẻ khóa hoặc quên chìa khóa trong cốp xe Nhân viên cứu hộ ZuttoRide sẽ đến hỗ trợ bạn mở khóa hoặc khởi động xe và bạn có thể đến đại lý để được kiểm tra hoặc thay thế.</div>
                                    <div class="clear20"></div>
                                    <div class="ztl-button-one">
                                        <a href="/dich-vu/sua-khoa" title="Engine Diagnostics"> Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ztl-service-item">
                    <div class="row table-row">
                        <div class="first ztl-col col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="ztl-flex">
                                <div class="ztl-post-thumbnail" style="background-image:url({{asset('public/frontend/images/service/service-electric.jpg')}});">
                                    <a href="/dich-vu/binh-xe" title="xu ly binh xe"></a>
                                </div>
                                <div class="ztl-post-details">
                                    <div class="ztl-service-info ztl-font-bold">
                                        <span class="ztl-service-info-line">
                                            <span>
                                                <span>MIỄN PHÍ</span>
                                                ĐỐI VỚI THÀNH VIÊN</span>
                                        </span>

                                        <span class="ztl-service-info-line" style="padding-right:0px;">
                                            <span>
                                                <span>PHỤC VỤ</span>
                                                24/24</span>
                                        </span>
                                    </div>
                                    <div class="ztl-service-title ztl-accent-font">
                                        <h3><a href="/dich-vu/binh-xe" title="xu ly binh xe">Kích bình xe</a></h3>
                                    </div>
                                    <div class="ztl-service-description">
                                        Khi xe bạn không khởi động được phần lớn là do lỗi từ hệ thống điện cụ thể là bình Ắc Quy khi đó nhân viên cứu hộ sẽ đến và giúp bạn kich hoạt bình và bạn có thể di chuyển đến cửa hàng gần nhất để được kiểm tra và thay thế.</div>
                                    <div class="clear20"></div>
                                    <div class="ztl-button-one">
                                        <a href="/dich-vu/binh-xe" title="xu ly binh xe">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ztl-service-item">
                    <div class="row table-row">
                        <div class="first ztl-col col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="ztl-flex">
                                <div class="ztl-post-thumbnail" style="background-image:url({{asset('public/frontend/images/service/service-truck.jpg')}});">
                                    <a href="/dich-vu/van-chuyen-xe" title="Vận chuyển bằng xe tải chuyên dụng"></a>
                                </div>
                                <div class="ztl-post-details">
                                    <div class="ztl-service-info ztl-font-bold">
                                        <span class="ztl-service-info-line">
                                            <span>
                                                <span>Miễn phí</span>
                                                Đối với thành viên</span>
                                        </span>

                                        <span class="ztl-service-info-line" style="padding-right:0px;">
                                            <span>
                                                <span>Phục vụ</span>
                                                24/24</span>
                                        </span>
                                    </div>
                                    <div class="ztl-service-title ztl-accent-font">
                                        <h3><a href="/dich-vu/van-chuyen-xe" title="Vận chuyển bằng xe tải chuyên dụng">Cứu hộ bằng xe chuyên dụng</a></h3>
                                    </div>
                                    <div class="ztl-service-description">
                                        Tại các thành phớ lớn như TP Hồ Chí Minh và Hà Nội sẽ có các khung giờ cấm xe tải và để có thể phục vụ công tác cứu hộ 24/24 ZuttoRide đã đưa vào sử dụng xe
                                        Van cứu hộ cũng được thiết kế và trang bị riêng cho cứu hộ để đảm bảo xe bạn không bị ngã đỗ hay trầy xước khi vận chuyển.</div>
                                    <div class="clear20"></div>
                                    <div class="ztl-button-one">
                                        <a href="/dich-vu/van-chuyen-xe" title="Vận chuyển bằng xe tải chuyên dụng">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection