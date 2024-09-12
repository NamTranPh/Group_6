<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Đăng ký</title>

    <!-- Link font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Xem xet lai no bi an huong container -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href=" {{ url('/css/register.css') }}">
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="login-register">
                <!-- Register -->
                <form method="POST" action="{{ route('register') }}" class="register-form">
                    @csrf
                    <h2 class="title">Đăng ký</h2>

                    <div class="input-field">
                        <label for="fullname"><i class="fas fa-user"></i></label>
                        <input id="fullname" type="text" class="@error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus placeholder="Nhập họ tên của bạn">
                        @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="input-field">
                        <label for="username"><i class="fas fa-user"></i></label>
                        <input id="username" type="text" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Nhập tài khoản">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <label for="email"><i class="fas fa-envelope"></i></label>
                        <input id="email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Nhập email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="input-field">
                        <label for="phone"><i class="fas fa-phone"></i></label>
                        <input id="phone" type="text" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Nhập số điện thoại">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <label for="password"><i class="fas fa-lock"></i></label>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Nhập mật khẩu">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <label for="password-confirm"><i class="fas fa-lock"></i></label>
                        <input id="password-confirm" type="password" class="@error('password-confirm') is-invalid @enderror" name="password-confirm" value="{{ old('password-confirm') }}" required autocomplete="password-confirm" autofocus placeholder="Nhập lại mật khẩu">
                        @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="submit" value="Đăng ký" class="btn-register">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel right-panel">
                <div class="content">
                    <h2>Bạn đã có tài khoản ?</h2>
                    <p>Đăng nhập vào trang web để nhận những thông tin hữu ích về những chuyến đi thú vị.</p>
                    <!-- <button class="btn-transparent" id="login-btn">Đâng nhập</button> -->
                    <a href="{{ route('/viewlogin') }}" class="btn-transparent">Đăng nhập</a>   
                </div>
                <img src="./Img/register.svg" class="image" alt="">
            </div>
        </div>
    </div>
</body>
<script src=" {{ url('/js/register.js') }} "></script>
</html>