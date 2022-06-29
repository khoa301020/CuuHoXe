<div class="container" style="">

    <div id="logo-second" style="width:160px;">
        <a href="#" rel="home">
            <img class="logo-img" src="{{asset('public/frontend/images/logo.png')}}" alt="ZuttoRide" data-rjs="2">
        </a>
    </div>

    <div id="menu-toggle">
        <!-- navigation hamburger -->
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id="nav-wrapper">
        <nav id="site-navigation" class="main-navigation">
            <div class="menu-main-menu-container">
                <ul id="menu-main-menu" class="menu">
                    <li id="menu-item-3502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-3502">
                        <a href="{{URL::to('/')}}">Trang chủ</a>
                    </li>
                    <li id="menu-item-3353" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3353">
                        <a href="{{URL::to('/introduce')}}">Giới thiệu</a>
                    </li>
                    <li id="menu-item-3353" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3353">
                        <a href="{{URL::to('/service')}}">Dịch vụ cứu hộ</a>
                    </li>
                    <li id="menu-item-3351" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3351">
                        <a href="{{URL::to('/news')}}">Tin tức</a>
                    </li>
                    @if (Session::has('LoggedUser'))
                        <li id="menu-item-3353" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3353">
                            <a href="{{URL::to('/request')}}">Yêu cầu cứu hộ</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav><!-- #site-navigation -->
        <div class="clear"></div>
    </div>
</div>