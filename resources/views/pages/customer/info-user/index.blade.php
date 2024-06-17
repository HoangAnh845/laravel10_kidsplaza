@section('title-customer', 'Thông tin tài khoản')
@extends('layouts-customer')
@section('style-customer')
<link rel="stylesheet" href="">
@endsection
@section('content-customer')
<div class="customer-user-info">
    <div class="row align-items-center">
        <div class="col text-center">
            <svg width="200" height="200" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-40 w-40">
                <rect x="-0.5" y="0.5" width="33" height="33" rx="16.5" transform="matrix(-1 0 0 1 33.5 0.5)" fill="#E0B8FF"></rect>
                <rect x="-0.5" y="0.5" width="33" height="33" rx="16.5" transform="matrix(-1 0 0 1 33.5 0.5)" fill="url(#pattern0)"></rect>
                <rect x="-0.5" y="0.5" width="33" height="33" rx="16.5" transform="matrix(-1 0 0 1 33.5 0.5)" stroke="#21409A"></rect>
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1298_209" transform="translate(-0.0459929 -0.0408014) scale(0.00628141)"></use>
                    </pattern>
                    <image id="image0_1298_209" width="199" height="199" xlink:href="data:image/png;base64,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"></image>
                </defs>
            </svg>
        </div>
        <div class="col">
            <div class="mb-3">
                <label class="mb-3 w-100">Họ và tên</label>
                <input class="bg-gray-f2 py-3 px-3 w-100 border rounded-3" value="Hoàng Anh" />
            </div>
            <div class="mb-3">
                <label class="mb-3 w-100">Số điện thoại</label>
                <input class="bg-gray-f2 py-3 px-3 w-100 border rounded-3" value="0963868645" />
            </div>
            <div class="mb-3">
                <label class="mb-3 w-100">Email</label>
                <input class="bg-gray-f2 py-3 px-3 w-100 border rounded-3" value="uonghoanganh@gmail.com" />
            </div>
            <div class="ms-3 text-bule204 text text-decoration-underline">Đổi mật khẩu</div>
        </div>
    </div>
    <div class="px-4 py-2 border rounded-3 w-fit-content mx-auto mt-5">
        Cập nhật
    </div>
</div>
@endsection