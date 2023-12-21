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

                    {{ __('Chúc mừng bạn đã đăng kí thành công!') }} <br>
                    {{ __('Vui lòng bấm vào nút để qua trang chủ!') }}
                </div>
                <button>
                    <a class="nav-link" href="/">Trang chủ</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
