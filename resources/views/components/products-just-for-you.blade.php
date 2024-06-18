<section class="section-wrapper">
    <link href="{{ asset('css/components/products-just-for-you.css') }}" rel="stylesheet">
    
    <div class="products-just-for-you {{ $bg ?? '' }}">
        <div class="products-just-for-you-mobile bg-bule204 d-lg-none d-sm-none">
            <div class="container px-0 py-1 d-flex align-items-center gap-2">
                <div>
                    <img src="https://cdn.kidsplaza.io/assets/icons/love-circle.png" width="34" height="34" alt="img" />
                </div>
                <div class="text-white fw-semibold">
                    Sản phẩm dành riêng cho bạn
                </div>
            </div>
        </div>
        <div class="container px-0">
            <div class="box-p px-0">
                <div class="d-xs-none">
                    <x-title-frame-web title="Sản phẩm dành riêng cho bạn" :nav="['']" />
                </div>
                @if(!empty($carousel))
                    <div class="row category-list-product-owl-carousel owl-carousel owl-theme list-product box-m-top-bottom gap-4">
                        @foreach([1,2,3,4,5,6,7,8] as $key => $item)
                        <div class="col px-0 item">
                            @include('components/product-display')
                        </div>
                        @endforeach
                    </div>
                @else
                <div class="row list-product box-m-top-bottom">
                    @foreach([1,2,3,4,5,6,7,8,9,10] as $key => $item)
                    <div class="col-xl-20 col-lg-3 col-md-4 col-xs-6 px-0">
                        <div class="p-2">
                        @include('components/product-display')
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                <x-button class="d-flex gap-1 align-items-center bg-bule23-hover border text-white bg-bule204 list-product-view-all rounded-5 px-4 py-2 fw-semibold mx-auto" text="Xem tất cả" icon="bi bi-chevron-right" iconPosition="right" />
            </div>
        </div>
    </div>
</section>