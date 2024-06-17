<link href="{{ asset('css/components/navbar.css') }}" rel="stylesheet">

<header class="bg-cF {{ $page == 'category' || $page == 'product-detail' || $page == 'cart' ? 'd-md-none-x' : '' }}">
    <div class="bg-cF d-xs-none d-md-block">
        <div class="container px-0">
            <div class="d-flex justify-content-between align-items-center py-2 header-top">
                <div class="d-flex align-items-center gap-2 header-top-left">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17" width="17" height="17" class="h-5 w-5">
                        <g clip-path="url(#clip0_1264_3081)">
                            <path d="M8.93639 0C7.61332 0.00210841 6.31779 0.389181 5.19924 1.11656C4.0807 1.84395 3.18471 2.882 2.61463 4.11099C2.04456 5.33997 1.82363 6.70981 1.97733 8.06248C2.13103 9.41515 2.65309 10.6955 3.4833 11.7559C3.49298 11.7636 3.50109 11.7731 3.50716 11.784C3.58447 11.8926 3.66872 11.9957 3.75936 12.0927L3.79004 12.1243L3.93318 12.2716L3.95022 12.2927L3.97067 12.3137L8.93297 17.4392L13.8885 12.3172L13.9158 12.2927L14.0657 12.1383L14.093 12.1103C14.1809 12.0173 14.2618 11.9176 14.3349 11.8121C15.1728 10.7536 15.702 9.47226 15.861 8.11674C16.0199 6.76122 15.8022 5.38708 15.2331 4.15378C14.664 2.92047 13.7668 1.87855 12.6457 1.14892C11.5245 0.419286 10.2253 0.0318508 8.8989 0.0315724L8.93639 0Z" fill="#22409A"></path>
                            <path d="M4.06274 7.26882C4.09633 5.96173 4.62436 4.7198 5.53437 3.80753C6.44439 2.89526 7.66446 2.38477 8.93473 2.38477C10.205 2.38477 11.4251 2.89526 12.3351 3.80753C13.2451 4.7198 13.7731 5.96173 13.8067 7.26882C13.8067 10.0298 11.8947 12.2645 8.93644 12.2645C5.97814 12.2645 4.06274 10.0298 4.06274 7.26882" stroke="white" stroke-width="0.5" stroke-miterlimit="10"></path>
                            <path d="M8.36146 5.31445V5.31824L8.35022 5.32961L8.36146 5.31445Z" fill="white"></path>
                            <path d="M10.1088 7.25112L11.1517 6.19867C11.348 5.99611 11.4582 5.72171 11.4582 5.43564C11.4582 5.14956 11.348 4.87516 11.1517 4.67261C10.9529 4.47185 10.6855 4.35938 10.407 4.35938C10.1285 4.35938 9.86116 4.47185 9.66236 4.67261L8.51721 5.81978C8.64825 5.71266 8.81298 5.6589 8.98003 5.66873C9.14709 5.67856 9.30479 5.7513 9.42311 5.87309C9.54143 5.99489 9.61212 6.15722 9.62167 6.32918C9.63122 6.50114 9.57897 6.6707 9.47491 6.80558L9.03867 7.25112L9.47491 7.70017C9.57578 7.83539 9.62536 8.00378 9.61441 8.17388C9.60346 8.34399 9.53271 8.50417 9.4154 8.6245C9.29808 8.74483 9.14221 8.81708 8.97691 8.82775C8.81162 8.83842 8.64821 8.78677 8.51721 8.68246L9.53967 9.73492C9.73627 9.93822 10.0033 10.0528 10.2819 10.0535C10.5606 10.0541 10.8281 9.94079 11.0256 9.73843C11.2231 9.53606 11.3345 9.26122 11.3351 8.97437C11.3357 8.68752 11.2256 8.41215 11.029 8.20886L10.1088 7.25112Z" fill="#F6CB54"></path>
                            <path d="M7.13343 7.25463L8.51715 5.85135V5.41985C8.50185 5.14347 8.38442 4.88358 8.18891 4.69347C7.99341 4.50337 7.73466 4.39746 7.46572 4.39746C7.19678 4.39746 6.93804 4.50337 6.74254 4.69347C6.54704 4.88358 6.4296 5.14347 6.41431 5.41985V8.97364C6.4296 9.25003 6.54704 9.50991 6.74254 9.70002C6.93804 9.89012 7.19678 9.99603 7.46572 9.99603C7.73466 9.99603 7.99341 9.89012 8.18891 9.70002C8.38442 9.50991 8.50185 9.25003 8.51715 8.97364V8.67544L7.13343 7.25463Z" fill="#5FBFED"></path>
                            <path d="M9.04886 7.25151L9.48512 6.80597C9.58918 6.67109 9.6414 6.50152 9.63185 6.32956C9.6223 6.1576 9.55164 5.99527 9.43332 5.87348C9.315 5.75169 9.1573 5.67894 8.99024 5.66911C8.82318 5.65928 8.65845 5.71305 8.52742 5.82017L7.14368 7.22344L8.52742 8.62671C8.65842 8.73102 8.82182 8.78267 8.98712 8.772C9.15241 8.76134 9.30828 8.68909 9.4256 8.56876C9.54292 8.44843 9.61366 8.28824 9.62461 8.11814C9.63556 7.94803 9.58598 7.77964 9.48512 7.64442L9.04886 7.25151Z" fill="white"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_1264_3081">
                                <rect width="17" height="17" fill="white" transform="translate(0.436401)"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <div>
                        Xem tồn kho, giá bán tại:
                    </div>
                    <div class="d-flex gap-1 align-items-center">
                        <div class="fw-bold" style="color:rgb(33 64 154);">Miền Bắc</div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 7.2" width="10" height="5.2" class="h-2 w-2 text-primary">
                            <path d="M6.002 5.03L10.539.265a.826.826 0 011.211 0 .94.94 0 010 1.275l-5.141 5.4a.827.827 0 01-1.183.026L.249 1.545a.937.937 0 010-1.275.826.826 0 011.211 0z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-body-secondary header-top-right d-flex align-items-center ">
                    <div class="px-2 ">Hotline: 1800.6608</div>
                    <div class="d-sm-none d-lg-block px-2 border-secondary border-start border-end">Zalo cửa hàng</div>
                    <div class="d-sm-none d-lg-block px-2">Ưu đãi khi tải app</div>
                    <div class="px-2 border-secondary border-start">Hệ thống 159 cửa hàng</div>
                    <div class="d-sm-none d-lg-block px-2 border-secondary border-start">Thưởng Kicoin</div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-wrap pt-0 pb-2">
        <div class="navbar-top w-100 position-relative">
            <div class="container p-0 navbar-top-content">
                <div class="row justify-content-between align-items-center px-3 py-3">
                    <div class="col-xl-2 col-md-3 col-lg-3 d-xs-none px-0 cup">
                        <a href="/">
                            <img src="{{ asset('images/Logo_header.png') }}" alt="logo" width="100%" height="auto">
                        </a>
                    </div>
                    <div class="col-xl-7 col-lg-5 col-md-5 col-sm-11 col-xs-11 position-relative navbar-input-search ps-4 pe-0 ps-xs-0">
                        <input class="shadow00 rounded-5 border-0 w-100 py-1 px-3" type="text" placeholder="Ba mẹ tìm kiếm gì cho con hôm nay">
                        <div class="position-absolute search ">
                            <i class="bi bi-search d-xs-none"></i>
                            <div class="d-md-none">
                                <div class="d-flex gap-1 option ps-2 text-bule204 ">
                                    <div>Miền Bắc</div>
                                    <div><i class="bi bi-caret-down-fill "></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute d-md-none logo">
                            <img src="{{ asset('images/kid-logo-circle.png') }}" alt="logo" width="32" height="32">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-1 col-xs-1 d-flex align-items-center justify-content-center gap-3 navbar-right px-0">
                        <div class="text-center cup d-xs-none">
                            <a href="/customer/orders">
                                <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none" class="h-[20px] w-[20px]">
                                        <path d="M19.3889 11V17C19.3889 18.8856 19.3889 19.8284 18.8031 20.4142C18.2173 21 17.2745 21 15.3889 21H4.38889C2.85477 21 1.61111 19.7563 1.61111 18.2222V18.2222C1.61111 16.6881 2.85477 15.4444 4.38889 15.4444H15.3889C17.2745 15.4444 18.2173 15.4444 18.8031 14.8587C19.3889 14.2729 19.3889 13.3301 19.3889 11.4444V5C19.3889 3.11438 19.3889 2.17157 18.8031 1.58579C18.2173 1 17.2745 1 15.3889 1H5.61112C3.7255 1 2.78269 1 2.1969 1.58579C1.61111 2.17157 1.61111 3.11438 1.61111 5V18.2222" stroke="white" stroke-width="2"></path>
                                        <path d="M14.3935 7.86121L10.5057 12.1108L10.4978 12.1021L7.22092 8.53993L6.62585 7.88715L6.60601 7.86121C5.87209 7.05712 5.87209 5.73858 6.60601 4.93449C6.64172 4.89558 6.68139 4.85667 6.72106 4.82209C7.43118 4.16498 8.47851 4.1693 9.18466 4.83938C9.2164 4.86964 9.24813 4.90423 9.28384 4.93881L10.5018 6.27032L11.7197 4.93881C11.7435 4.91287 11.7752 4.88261 11.799 4.861C12.521 4.15634 13.6199 4.16498 14.334 4.87829C14.3539 4.8999 14.3737 4.9172 14.3975 4.94313C15.1274 5.7429 15.1274 7.05279 14.3935 7.86121Z" fill="#FDCB34"></path>
                                    </svg>
                                </div>
                                <p class="text-sm">Lịch sử đơn hàng</p>
                            </a>
                        </div>
                        <div class="text-center cup d-xs-none">
                            <x-button class="border-0 bg-transparent loginModal" bsTarget="loginModal" text="" icon="" iconPosition="left">
                                <div class="relative">
                                    <svg width="21" height="22" viewBox="0 0 16.577 18.6" class="h-5 w-5">
                                        <g transform="translate(-95.7 -121.203)">
                                            <path d="M-7722.37,2933a.63.63,0,0,1-.63-.63c0-4.424,2.837-6.862,7.989-6.862s7.989,2.438,7.989,6.862a.629.629,0,0,1-.63.63Zm.647-1.251h13.428c-.246-3.31-2.5-4.986-6.713-4.986s-6.471,1.673-6.714,4.986Zm2.564-12.518a4.1,4.1,0,0,1,1.172-3,4.1,4.1,0,0,1,2.979-1.229,4.1,4.1,0,0,1,2.979,1.229,4.1,4.1,0,0,1,1.171,3,4.341,4.341,0,0,1-4.149,4.5,4.344,4.344,0,0,1-4.16-4.5Zm1.251,0a3.1,3.1,0,0,0,2.9,3.254,3.094,3.094,0,0,0,2.9-3.253,2.878,2.878,0,0,0-.813-2.109,2.88,2.88,0,0,0-2.085-.872,2.843,2.843,0,0,0-2.1.856,2.841,2.841,0,0,0-.806,2.122Z" transform="translate(7819 -2793.5)" fill="#ffffff" stroke="#ffffff" stroke-width="0.6"></path>
                                        </g>
                                    </svg>
                                </div>
                                <p class="">Tài khoản</p>
                            </x-button>
                        </div>
                        <div class="text-center cup ">
                            <a href="/payment/cart">
                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 21" width="25" height="21" class="h-[21px] w-[25px]">
                                        <g clip-path="url(#clip0_1264_1704)">
                                            <path d="M18.741 16.5478H8.18262C6.39319 16.5478 4.87849 15.3193 4.65574 13.6972L3.48259 4.95508C3.48259 4.94829 3.48259 4.9415 3.48259 4.93471L3.25242 3.22431C3.15589 2.52521 2.56932 1.96186 1.81197 1.84648L0.772464 1.69037C0.267564 1.60892 -0.0739865 1.16775 0.0151136 0.706207C0.0967887 0.244669 0.579414 -0.0675485 1.08431 0.0138995L2.12382 0.170008C3.67564 0.407565 4.90077 1.58177 5.09382 3.0139L5.22747 3.99127H21.466C22.55 3.99127 23.5598 4.43245 24.2281 5.21299C24.9037 5.98675 25.1488 6.98449 24.9037 7.94829L23.6266 12.9981C23.0995 15.0886 21.0873 16.5478 18.741 16.5478ZM5.45764 5.68811L6.50457 13.4867C6.60852 14.2605 7.32875 14.8442 8.18262 14.8442H18.7484C20.226 14.8442 21.4882 13.9279 21.8224 12.6112L23.0995 7.56141C23.2183 7.10666 23.0995 6.63155 22.7802 6.26503C22.4609 5.89851 21.9857 5.68811 21.466 5.68811H5.45764ZM15.2735 12.3872C15.2735 11.9189 14.8577 11.5388 14.3454 11.5388H9.40032C8.888 11.5388 8.4722 11.9189 8.4722 12.3872C8.4722 12.8555 8.888 13.2356 9.40032 13.2356H14.3454C14.8577 13.2356 15.2735 12.8555 15.2735 12.3872ZM8.83602 21.0003C9.80127 21.0003 10.5883 20.2809 10.5883 19.3985C10.5883 18.5162 9.80127 17.7967 8.83602 17.7967C7.87077 17.7967 7.08372 18.5162 7.08372 19.3985C7.08372 20.2877 7.87077 21.0003 8.83602 21.0003ZM19.5355 21.0003C20.5007 21.0003 21.2878 20.2809 21.2878 19.3985C21.2878 18.5162 20.5007 17.7967 19.5355 17.7967C18.5702 17.7967 17.7832 18.5162 17.7832 19.3985C17.7832 20.2877 18.5628 21.0003 19.5355 21.0003Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1264_1704">
                                                <rect width="25" height="21" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="d-xs-none">Giỏ hàng</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-bg position-absolute d-xs-none"></div>
            <div class="d-md-none">
                <div class="navbar-top-banner-owl-carousel owl-carousel owl-theme">
                    @foreach([
                    'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/a/banner_home_appthoi-trang-sale-t6.png',
                    'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/a/banner_home_app-sap-sinh-roi-t6.png',
                    'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/k/v/kv_tai_app_t6_home_app_750x640.png'
                    ] as $item)
                    <div class="item">
                        <img src="{{ $item }}" alt="banner" width="100%" height="300px">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="welcome d-md-none row bg-white shadow00 position-absolute py-2 rounded-3">
                <div class="welcome-col-left col pe-1 d-flex align-items-center gap-2 border-end">
                    <div>
                        <img src="https://cdn.kidsplaza.io/assets/profile.png" width="30" height="30" />
                    </div>
                    <div>
                        <div>Xin chào, <b>Bạn!</b></div>
                        <div class="d-flex gap-2 mt-1 login">
                            <x-button class="border-0 text-white rounded-5 py-1 px-2 loginModal" bsTarget="loginModal" text="" icon="" iconPosition="left">
                                Đăng nhập
                            </x-button>
                            <x-button class="border-0 text-white rounded-5 py-1 px-2 registerModal" bsTarget="loginModal" text="" icon="" iconPosition="left">
                                Đăng ký
                            </x-button>
                        </div>
                    </div>
                </div>
                <div class="welcome-col-right col d-flex align-items-center gap-1">
                    <div>
                        <img src="	https://cdn.kidsplaza.io/assets/icons/kcoin.png" alt="" width="30" height="30" />
                    </div>
                    <div>
                        Vui lòng đăng nhập để kiểm tra điểm Kicoin
                    </div>
                </div>
            </div>
        </div>
        <div class="container navbar-bottom ">
            <div class="row w-100 pt-2 d-xs-none ">
                @foreach(
                [
                [
                'icon' => 'bi bi-list',
                'text' => 'Danh mục'
                ],
                [
                'icon' => 'bi bi-bag-check',
                'text' => 'Zalo cửa hàng'
                ],
                [
                'icon' => 'bi bi-check-lg',
                'text' => 'Ưu đãi khi tải app'
                ],
                [
                'icon' => 'bi bi-house-door-fill',
                'text' => 'Thưởng Kicoin'
                ],
                [
                'icon' => 'bi bi-question-circle-fill',
                'text' => 'Hotline: 1800.6608'
                ]
                ] as $key => $item
                )
                <div class="col {{ $key === 4 ? 'd-sm-none d-lg-block' : ''  }}">
                    <div class="d-flex gap-2 align-items-center fw-semibold text-bule204 cup">
                        <i class="{{$item['icon']}} fs-4"></i>
                        <div class="text-white-hover">{{ $item['text'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</header>
@if($page == 'category')
<div class="d-md-none-y shadow00 header-category">
    <div class="d-flex align-items-center justify-content-between bg-bule204 p-3 text-white">
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-chevron-left"></i>
            <div>Mẹ bầu và sau sinh</div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-search"></i>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 21" width="25" height="21" class="h-[21px] w-[25px]">
                <g clip-path="url(#clip0_1264_1704)">
                    <path d="M18.741 16.5478H8.18262C6.39319 16.5478 4.87849 15.3193 4.65574 13.6972L3.48259 4.95508C3.48259 4.94829 3.48259 4.9415 3.48259 4.93471L3.25242 3.22431C3.15589 2.52521 2.56932 1.96186 1.81197 1.84648L0.772464 1.69037C0.267564 1.60892 -0.0739865 1.16775 0.0151136 0.706207C0.0967887 0.244669 0.579414 -0.0675485 1.08431 0.0138995L2.12382 0.170008C3.67564 0.407565 4.90077 1.58177 5.09382 3.0139L5.22747 3.99127H21.466C22.55 3.99127 23.5598 4.43245 24.2281 5.21299C24.9037 5.98675 25.1488 6.98449 24.9037 7.94829L23.6266 12.9981C23.0995 15.0886 21.0873 16.5478 18.741 16.5478ZM5.45764 5.68811L6.50457 13.4867C6.60852 14.2605 7.32875 14.8442 8.18262 14.8442H18.7484C20.226 14.8442 21.4882 13.9279 21.8224 12.6112L23.0995 7.56141C23.2183 7.10666 23.0995 6.63155 22.7802 6.26503C22.4609 5.89851 21.9857 5.68811 21.466 5.68811H5.45764ZM15.2735 12.3872C15.2735 11.9189 14.8577 11.5388 14.3454 11.5388H9.40032C8.888 11.5388 8.4722 11.9189 8.4722 12.3872C8.4722 12.8555 8.888 13.2356 9.40032 13.2356H14.3454C14.8577 13.2356 15.2735 12.8555 15.2735 12.3872ZM8.83602 21.0003C9.80127 21.0003 10.5883 20.2809 10.5883 19.3985C10.5883 18.5162 9.80127 17.7967 8.83602 17.7967C7.87077 17.7967 7.08372 18.5162 7.08372 19.3985C7.08372 20.2877 7.87077 21.0003 8.83602 21.0003ZM19.5355 21.0003C20.5007 21.0003 21.2878 20.2809 21.2878 19.3985C21.2878 18.5162 20.5007 17.7967 19.5355 17.7967C18.5702 17.7967 17.7832 18.5162 17.7832 19.3985C17.7832 20.2877 18.5628 21.0003 19.5355 21.0003Z" fill="white"></path>
                </g>
                <defs>
                    <clipPath id="clip0_1264_1704">
                        <rect width="25" height="21" fill="white"></rect>
                    </clipPath>
                </defs>
            </svg>
        </div>
    </div>
    <div class="d-flex gap-5 justify-content-center align-items-center py-3">
        <div class="w-40 d-flex gap-2 justify-content-center border p-2 rounded-4">
            <i class="bi bi-arrow-down-up"></i>
            <div>Sắp xếp theo</div>
        </div>
        <div class="w-40 d-flex gap-2 justify-content-center border p-2 rounded-4">
            <i class="bi bi-ui-checks-grid"></i>
            <div>Bộ lọc</div>
        </div>
    </div>
</div>
@endif

@if($page == 'product-detail')
<div class="d-flex justify-content-between align-items-center p-3 header-product shadow00 d-lg-none">
    <div class="bg-gray-rgb1 rounded-5 px-2 py-1">
        <i class="bi bi-chevron-left text-white"></i>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="bg-gray-rgb1 rounded-5 px-2 py-1">
            <i class="bi bi-house-door text-white"></i>
        </div>
        <div class="bg-gray-rgb1 rounded-5 px-2 py-1">
            <i class="bi bi-cart2 text-white"></i>
        </div>
    </div>
</div>
@endif

@if($page == 'cart')
<div class="d-flex justify-content-between align-items-center p-3 shadow00 d-lg-none bg-bule204">
    <div class="d-flex gap-2 align-items-center text-white">
        <i class="bi bi-chevron-left fs-4"></i>
        <div>Tiến hành thanh toán</div>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="">
            <i class="bi bi-search text-white fs-4"></i>
        </div>
        <div class="">
            <i class="bi bi-cart2 text-white fs-4"></i>
        </div>
    </div>
</div>
@endif

<script src="{{ asset('js/navbar-top-content.js') }}"></script>