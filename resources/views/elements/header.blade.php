<div class="header-one" style="">
    <div class="container">
        <div class="header-one-left">
            <div id="logo-first" style="width:160px;">
                <a href="{{URL::to('/')}}" rel="home">
                    <img class="logo-img" src="{{asset('public/frontend/images/logo.png')}}" alt="AutoResQ" data-rjs="2">
                </a>
            </div>
        </div>
        
        <div class="header-one-right sidebar-ztl">
            <div class="wrapper sidebar-header">
                <aside id="autoresq_info_widget-2" class="widget header-widget widget_autoresq_info_widget">
                    <a href="tel:1900969612">
                        <div class="ztl-widget-info-2">
                            <h2 class="widget-title">PHỤC VỤ 24/24</h2>
                            <div class="ztl-widget-info">
                                <div class="ztl-widget-info-image">
                                    <img src="{{asset('public/frontend/images/24-hours.png')}}">
                                </div>
                                <span class="ztl-widget-info-description">
                                    <span style="font-size:12px;color:#f4c70b">Tổng đài 24/24</span><br><span style="font-size:18px;font-weight:600"> 1900969612</span>
                                </span>
                            </div>

                        </div>
                    </a>
                </aside>
                <aside id="autoresq_info_widget-3" class="widget header-widget widget_autoresq_info_widget">
                    <div class="ztl-widget-info-3 dropdown">
                        @if(Session::has('LoggedUser'))
                            <a href="{{ route('user.profile') }}" style="display: inline-block;">
                                <h2 class="widget-title">ĐĂNG NHẬP</h2>
                                <div class="ztl-widget-info">
                                    <div class="ztl-widget-info-image">
                                        {{-- Lấy ảnh User --}}
                                        <img src="{{asset('public/frontend/images/daidien.png')}}">
                                    </div>
                                    <span class="ztl-widget-info-description">
                                        <span style="font-size:14px;color:#f4c70b">{{Session::get('LoggedUser')->hoVaTen}}</span>
                                    </span>
                                </div>
                            </a>
                            <div class="dropdown-content" style="color: black !important;">
                                <a href="{{ route('user.profile') }}">Hồ sơ cá nhân</a>
                                <a href="{{ route('user.request') }}">Yêu cầu</a>
                                <a href="{{ route('auth.logout') }}">Đăng xuất</a>
                            </div>
                        @else
                            <a href="{{URL::to('/login')}}" style="display: inline-block;">
                                <h2 class="widget-title">ĐĂNG NHẬP</h2>
                                <div class="ztl-widget-info">
                                    <div class="ztl-widget-info-image">
                                        <img src="{{asset('public/frontend/images/new-user.png')}}">
                                    </div>
                                    <span class="ztl-widget-info-description">
                                        <span style="font-size:12px;color:#f4c70b">ĐĂNG NHẬP</span>
                                    </span>
                                </div>
                            </a>
                        @endif
                    </div>
                </aside>
            </div>
            <div class="menu mb-2 d-none d-lg-flex justify-content-end">

            </div>
        </div>

    </div>
</div>