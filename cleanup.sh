# Danh sách các tệp cần xử lý
files=(
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/components/modal.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/components/navbar.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/components/product-display.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/components/products-just-for-you.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/components/svg-icon.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/components/title-frame-web.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/components/viewed-the-product.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/category/index.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/category/include/brand.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/category/include/category.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/category/include/list-category-product.blade.php"
    # "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/customer/viewed-product/index.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/home/include/header.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/home/include/list-product.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/home/include/outstan-brand.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/home/include/outstan-category.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/home/include/useful-information.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/product-detail/index.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/product-detail/include/product-param.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/product-detail/include/product-question.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/product-detail/include/product-question.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/product-detail/include/product-review.blade.php"
    "/Users/anhhoang/FullStack/Project/2024/laravel10_kidsplaza/resources/views/pages/product-detail/include/product-view.blade.php"
)

# Vòng lặp qua từng tệp và áp dụng lệnh sed
for file in "${files[@]}"; do
    sed -i '' -e '/<<<<<<< HEAD/d' -e '/=======/,/>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0/d' "$file"
done