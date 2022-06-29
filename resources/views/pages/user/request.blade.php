@extends('layout_user')
@section('content')

<div class="xMDeox">
    <div class="GBcYbK">
        <div></div>
        <div class="_0obGFe">
            <a class="vAkdD0 r-S3nG" href="/user/purchase/?type=6">
                <span class="_0rjE9m">Tất cả</span>
            </a>
            <a class="vAkdD0" href="/user/purchase/?type=9">
                <span class="_0rjE9m">Chờ xác nhận</span>
            </a>
            <a class="vAkdD0" href="/user/purchase/?type=8">
                <span class="_0rjE9m">Đang đến</span>
            </a>
            <a class="vAkdD0" href="/user/purchase/?type=3">
                <span class="_0rjE9m">Đã cứu hộ</span>
            </a>
            <a class="vAkdD0" href="/user/purchase/?type=4">
                <span class="_0rjE9m">Đã Hủy</span>
            </a>
        </div>
        <div></div>
        <div class="Tfo7DW">
            <svg width="19px" height="19px" viewBox="0 0 19 19">
                <g id="Search-New" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="my-purchase-copy-27" transform="translate(-399.000000, -221.000000)" stroke-width="2">
                        <g id="Group-32" transform="translate(400.000000, 222.000000)">
                            <circle id="Oval-27" cx="7" cy="7" r="7"></circle>
                            <path d="M12,12 L16.9799555,16.919354" id="Path-184" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </g>
                </g>
            </svg>
            <input autocomplete="off" placeholder="Tìm kiếm" value="">
        </div>
        <div>
            <div class="tF2pJg">
                <div>
                    @if(count($accidents) > 0)
                    @foreach($accidents as $accident)
                    <div class="_6nAGBW">
                        <div class="_1ox39j">
                            <div class="_9bLyA+">
                                <img width="17" height="16" class="Vqonym" src="{{asset('public/frontend/images/doicuuho.png')}}" alt="">
                                <div class="mzsqa6">
                                    <?php
                                    if ($accident->trangThaiSuCo == "Đã tiếp nhận") {
                                        $task = DB::table('tasks')->where('idSuCo', $accident->idSuCo)->first();
                                        echo "Đội cứu hộ ".$task->idDoiCuuHo;
                                    } else if ($accident->trangThaiSuCo == "Không được tiếp nhận") {
                                        echo "Không được tiếp nhận";
                                    } else {
                                        echo "Chờ tiếp nhận";
                                        
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="WPNwG4">
                                <div class="RcKSvW">
                                    <a class="_2GgWAA" href="{{ route('user.detail', $accident->idSuCo) }}">
                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-free-shipping-line">
                                            <g>
                                                <line fill="none" stroke-linejoin="round" stroke-miterlimit="10" x1="8.6" x2="4.2" y1="9.8" y2="9.8"></line>
                                                <circle cx="3" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                                <circle cx="10" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                                <line fill="none" stroke-miterlimit="10" x1="10.5" x2="14.4" y1="7.3" y2="7.3"></line>
                                                <polyline fill="none" points="1.5 9.8 .5 9.8 .5 1.8 10 1.8 10 9.1" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                <polyline fill="none" points="9.9 3.8 14 3.8 14.5 10.2 11.9 10.2" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                            </g>
                                        </svg>
                                        <span class="_0vCgDb">
                                            <?php
                                            if ($accident->trangThaiSuCo == "Đã tiếp nhận") {
                                                $task = DB::table('tasks')->where('idSuCo', $accident->idSuCo)->first();
                                                echo $task->trangThaiNhiemVu;
                                            } else {
                                                echo $accident->trangThaiSuCo;
                                            }
                                            ?>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="_60q+NM"></div>
                        <a href="{{URL::to('/user/request/detail')}}">
                            <div class="giUtSy">
                                <div class="vdofqJ">
                                    <div>
                                        <span class="QkIuzE">
                                            <div></div>
                                            <div class="hDGdsD">
                                                <div class="_50XPwl">
                                                    <div class="shopee-image__wrapper">
                                                        <div class="shopee-image__place-holder">
                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-loading-image">
                                                                <g>
                                                                    <rect fill="none" height="8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10" x="1" y="4.5"></rect>
                                                                    <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" x2="11" y1="6.5" y2="6.5"></line>
                                                                    <rect fill="none" height="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" x="11" y="6.5"></rect>
                                                                    <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" x2="11" y1="14.5" y2="14.5"></line>
                                                                    <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6" x2="6" y1=".5" y2="3"></line>
                                                                    <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3.5" x2="3.5" y1="1" y2="3"></line>
                                                                    <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8.5" x2="8.5" y1="1" y2="3"></line>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="shopee-image__content" style="background-image: url({{ $accident->minhChung }});">
                                                            <div class="shopee-image__content--blur"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tODfT4">
                                                    <div>
                                                        <div class="QJqUaT">
                                                            <span class="WVc4Oc">{{ $accident->loaiPhuongTien }}</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="qGisqd">{{ $accident->viTri }}</div>
                                                        <div class="_9ca9GU">
                                                            <?php
                                                            $date = date_create($accident->thoiGianGui);
                                                            $date = date_format($date, 'H:i:s d/m/Y');
                                                            echo $date;
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="_472J0A"></div>
                                </div>
                            </div>
                        </a>
                        <!-- <div class="oPVPPp"></div>  -->
                    </div>
                    @endforeach
                    @endif
                </div>
                <!-- <div class="CqYika">
                    <div class="oDBmi- n012K3"> </div>
                    <div class="oDBmi- b-VPB8"> </div>
                </div> -->
                <!-- <div class="_1ERzqw">
                    <div class="cLwmWY"></div>
                    <div class="NIZAp8 pw0xMx">
                        <div class="_8vTqu9">
                            <button class="stardust-button stardust-button--primary Kz9HeM" onclick="location.href='{{URL::to('/user/request/detail')}}';">
                                Xem chi tiết yêu cầu
                            </button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        var profile = document.getElementById("profile");
        var request = document.getElementById("request");
        var password = document.getElementById("password");
        profile.style.color = "black";
        request.style.color = "#19448e";
        password.style.color = "black";
    };
</script>
@endsection