<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Đăng nhập</title>

    <!-- Link font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href=" {{ url('/css/login.css') }} ">
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="login-register">
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <h2 class="title">Đăng nhập</h2>
                    <div class="input-field">
                        <label for="email"><i class="fas fa-user"></i></label>
                        <input id="email" type="text" class="@error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Nhập tài khoản">
                        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <label for="password"><i class="fas fa-lock"></i></label>
                        <input id="password" type="password"
                            class="@error('password') is-invalid @enderror" 
                            name="password" required autocomplete="current-password" placeholder="Nhập mật khẩu">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <input type="submit" value="Đăng nhập" class="btn-login">
                    
                    @if (Route::has('password.request'))
                        <a class="btn-passRequest" href="{{ route('password.request') }}">Bạn quên mật khẩu?</a>
                    @endif    
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h2>Bạn chưa có tài khoản ?</h2>
                    <p>Hãy gia nhập cùng chúng tôi để có thể trải nghiệm những chuyến đi thú vị. Gia nhập bằng cách ấn nút phía dưới</p>
                    <a href="" class="btn-transparent" id="register-btn">Đăng ký</a>   
                </div>
                <img src="./Img/login.svg" class="image" alt="">
            </div>
        </div>
    </div>
</body>
<script src=" {{ url('/js/login.js') }} "></script>
</html>