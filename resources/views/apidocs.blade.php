<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favion  --}}
    <link rel="shortcut icon" href="{{ asset('/public/home/images/qlgl-logo-white-01-01.png') }}" type="image/x-icon">
    <title>QuanLyGiongLua APIs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        .bg-gray-100{
            background-color: #f3eded96;
        }
    </style>
</head>
<body>
    <header class="container-fluid card mb-4">
        <h2>QuanLyGiongLua APIs</h2>
    </header>

    <div class="container-fluid">
        {{-- Auth API  --}}
        <section class="mb-5">
            <h2>auth</h2>
            <p>Xác thực tài khoản</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/auth/user</td>
                        <td> Lấy thông tin người dùng đã đăng nhập</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-success">POST</span> api/auth/login</td>
                        <td>Đăng nhập chương trình</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-danger">DELETE</span> api/auth/logout</td>
                        <td>Đăng xuất chương trình</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- NhomGiong API  --}}
        <section class="mb-5">
            <h2>nhomgiongs</h2>
            <p>Nhóm giống</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/nhomgiongs</td>
                        <td>Lấy tất cả nhóm giống</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/nhomgiongs/{id}</td>
                        <td>Lấy nhóm giống có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- KieuHinh API  --}}
        <section class="mb-5">
            <h2>kieuhinhs</h2>
            <p>Kiểu hình</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/kieuhinhs</td>
                        <td>Lấy tất cả kiểu hình</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/kieuhinhs/{id}</td>
                        <td>Lấy kiểu hình có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- Giong API  --}}
        <section class="mb-5">
            <h2>giongs</h2>
            <p>Giống lúa</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/giongs</td>
                        <td>Lấy tất cả giống</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/giongs/{id}</td>
                        <td>Lấy giống có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- LoaiGiaTriDo API  --}}
        <section class="mb-5">
            <h2>loaigiatridos</h2>
            <p>Loại giá trị đo</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/loaigiatridos</td>
                        <td>Lấy tất cả loại giá trị đo</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/loaigiatridos/{id}</td>
                        <td>Lấy loại giá trị đo có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- LoaiSauBenh API  --}}
        <section class="mb-5">
            <h2>loaisaubenhs</h2>
            <p>Loại sâu bệnh</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/loaisaubenhs</td>
                        <td>Lấy tất cả loại sâu bệnh</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/loaisaubenhs/{id}</td>
                        <td>Lấy loại sâu bệnh có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>


        {{-- GiaTriTinhTrang API  --}}
        <section class="mb-5">
            <h2>Các tính trạng</h2>
            <p>Tính trạng giống lúa</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/giaidoantruongthanhs</td>
                        <td>Lấy tất cả giai đoạn trưởng thành</td>
                    </tr>
                    <tr >
                        <td> <span class="badge badge-primary">GET</span> api/giaidoantruongthanhs/{id}</td>
                        <td>Lấy giai đoạn trưởng thành có id phù hợp</td>
                    </tr>
                    {{-- ----------------------------- --}}
                    <tr class="bg-gray-100">
                        <td> <span class="badge badge-primary">GET</span> api/doituongtinhtrangs</td>
                        <td>Lấy tất cả đối tượng tính trạng</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td> <span class="badge badge-primary">GET</span> api/doituongtinhtrangs/{id}</td>
                        <td>Lấy đối tượng tính trạng có id phù hợp</td>
                    </tr>
                    {{-- ----------------------------- --}}
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/dacdiemtinhtrangs</td>
                        <td>Lấy tất cả đặc điểm tính trạng</td>
                    </tr>
                    <tr >
                        <td> <span class="badge badge-primary">GET</span> api/dacdiemtinhtrangs/{id}</td>
                        <td>Lấy đặc điểm tính trạng có id phù hợp</td>
                    </tr>
                    {{-- ----------------------------- --}}
                    <tr class="bg-gray-100">
                        <td> <span class="badge badge-primary">GET</span> api/giatritinhtrangs</td>
                        <td>Lấy tất cả giá trị tính trạng</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td> <span class="badge badge-primary">GET</span> api/giatritinhtrangs/{id}</td>
                        <td>Lấy giá trị tính trạng có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- ChiTieuNgoaiDong API  --}}
        <section class="mb-5">
            <h2>chitieungoaidongs</h2>
            <p>Chỉ tiêu ngoài đồng</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/chitieungoaidongs</td>
                        <td>Lấy tất cả chỉ tiêu ngoài đồng</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/chitieungoaidongs/{id}</td>
                        <td>Lấy giá trị chỉ tiêu ngoài đồng có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-success">POST</span> api/chitieungoaidongs</td>
                        <td>Thêm một chỉ tiêu ngoài đồng</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-warning">PUT</span> api/chitieungoaidongs/{id}</td>
                        <td>Sửa một chỉ tiêu ngoài đồng có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-danger">DELETE</span> api/chitieungoaidongs/{id}</td>
                        <td>Xóa chỉ tiêu ngoài đồng có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- GiaTriDoNgoaiDong API  --}}
        <section class="mb-5">
            <h2>giatridongoaidongs</h2>
            <p>Giá trị đo ngoài đồng</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/giatridongoaidongs</td>
                        <td>Lấy tất cả giá trị đo ngoài đồng</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/giatridongoaidongs/{id}</td>
                        <td>Lấy giá trị giá trị đo ngoài đồng có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-success">POST</span> api/giatridongoaidongs</td>
                        <td>Thêm một giá trị đo ngoài đồng</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-warning">PUT</span> api/giatridongoaidongs/{id}</td>
                        <td>Sửa một giá trị đo ngoài đồng có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-danger">DELETE</span> api/giatridongoaidongs/{id}</td>
                        <td>Xóa giá trị đo ngoài đồng có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- ChiTieuTrongNha API  --}}
        <section class="mb-5">
            <h2>chitieutrongnhas</h2>
            <p>Chỉ tiêu trong nhà</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/chitieutrongnhas</td>
                        <td>Lấy tất cả chỉ tiêu trong nhà</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/chitieutrongnhas/{id}</td>
                        <td>Lấy giá trị chỉ tiêu trong nhà có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-success">POST</span> api/chitieutrongnhas</td>
                        <td>Thêm một chỉ tiêu trong nhà</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-warning">PUT</span> api/chitieutrongnhas/{id}</td>
                        <td>Sửa một chỉ tiêu trong nhà có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-danger">DELETE</span> api/chitieutrongnhas/{id}</td>
                        <td>Xóa chỉ tiêu trong nhà có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- GiaTriDoTrongNha API  --}}
        <section class="mb-5">
            <h2>giatridotrongnhas</h2>
            <p>Giá trị đo trong nhà</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/giatridotrongnhas</td>
                        <td>Lấy tất cả giá trị đo trong nhà</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/giatridotrongnhas/{id}</td>
                        <td>Lấy giá trị giá trị đo trong nhà có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-success">POST</span> api/giatridotrongnhas</td>
                        <td>Thêm một giá trị đo trong nhà</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-warning">PUT</span> api/giatridotrongnhas/{id}</td>
                        <td>Sửa một giá trị đo trong nhà có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-danger">DELETE</span> api/giatridotrongnhas/{id}</td>
                        <td>Xóa giá trị đo trong nhà có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- ChiTieuSauBenh API  --}}
        <section class="mb-5">
            <h2>chitieusaubenhs</h2>
            <p>Chỉ tiêu sâu bệnh</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/chitieusaubenhs</td>
                        <td>Lấy tất cả chỉ tiêu sâu bệnh</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/chitieusaubenhs/{id}</td>
                        <td>Lấy giá trị chỉ tiêu sâu bệnh có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-success">POST</span> api/chitieusaubenhs</td>
                        <td>Thêm một chỉ tiêu sâu bệnh</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-warning">PUT</span> api/chitieusaubenhs/{id}</td>
                        <td>Sửa một chỉ tiêu sâu bệnh có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-danger">DELETE</span> api/chitieusaubenhs/{id}</td>
                        <td>Xóa chỉ tiêu sâu bệnh có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- GiaTriDoSauBenh API  --}}
        <section class="mb-5">
            <h2>giatridosaubenhs</h2>
            <p>Giá trị đo sâu bệnh</p>
            <table class="table border">
                <thead class="thead-light">
                    <tr class="text-bold">
                        <th width="50%">API</th>
                        <th width="50%">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/giatridosaubenhs</td>
                        <td>Lấy tất cả giá trị đo sâu bệnh</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-primary">GET</span> api/giatridosaubenhs/{id}</td>
                        <td>Lấy giá trị giá trị đo sâu bệnh có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-success">POST</span> api/giatridosaubenhs</td>
                        <td>Thêm một giá trị đo sâu bệnh</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-warning">PUT</span> api/giatridosaubenhs/{id}</td>
                        <td>Sửa một giá trị đo sâu bệnh có id phù hợp</td>
                    </tr>
                    <tr>
                        <td> <span class="badge badge-danger">DELETE</span> api/giatridosaubenhs/{id}</td>
                        <td>Xóa giá trị đo sâu bệnh có id phù hợp</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
