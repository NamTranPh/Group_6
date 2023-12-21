<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background: url('https://bcp.cdnchinhphu.vn/Uploaded/duongphuonglien/2020_09_24/giai%20nhat%20thuyen%20hoa.jpg') center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        width: 100%; /* Thay đổi kích thước container tại đây */
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .card {
        border: none;
    }

    .card-header {
        background-color: #3490dc;
        color: #fff;
        font-weight: bold;
        border-bottom: none;
    }

    .card-body {
        text-align: center;
    }

    .alert {
        margin-bottom: 20px;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ __('Chúc mừng bạn đã đăng nhập thành công!') }} <br>
                        {{ __('Vui lòng bấm vào nút để qua trang chủ!') }}
                    </div>
                    <button>
                        <a class="nav-link" href="\">Trang chủ</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>