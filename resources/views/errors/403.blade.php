<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.header')
</head>
<body>
    <!-- resources/views/errors/404.blade.php -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="text-center">
            <h1>403 - NGƯỜI DÙNG KHÔNG CÓ QUYỀN</h1>
            <p>Xin lỗi, Chức năng bạn sử dụng không được cấp quyền.</p>
            <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fas fa-arrow-left m-2"></i>Trở lại</a>
        </div>
    </div>

</body>
</html>
