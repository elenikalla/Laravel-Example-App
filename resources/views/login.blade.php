@extends('auth.app')

@section('content')
<h1>BYE</h1>
<body id="signin-page" class="animated bounceInDown overflow-hidden">
    <div id="signin-page-content">
        {{-- <img src="images/vclavis.jpg" alt="vClavis"/> --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="block-heading">{{'Login'}}</h1>
            <div class="form-group">
                <div class="input-icon"><i class="fa fa-user"></i>
                    <input id="email" type="email" placeholder="{{ __('E-Mail Address')}}" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-icon">
                    <i class="fa fa-key"></i>
                    <input id="password" type="password" placeholder="{{__('Password')}}" name="password" class="form-control  @error('password') is-invalid @enderror" required autocomplete="current-password">
                    <div class="password-visibility" onclick="hideShowPassword()">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                    </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-orange">{{ __('Login') }}<i style="margin-left:5px;" class="fa fa-chevron-circle-right"></i></button>
                <a id="btn-forgot-pwd" href="{{ route('password.request') }}" class="mlm">{{ __('Forgot Your Password?') }}</a>
            </div>
            <hr>
            <div class="create-account">
            <p><a id="btn-register" href="{{ route('register') }}">{{ __('Register')}}</a></p>
            </div>
        </form>
    </div>
    <script>
        function hideShowPassword() {
            var field = document.getElementById("password");
            var icon = document.querySelector('.password-visibility').children[0];
            if (field.type === "password")
            {
                field.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
            else
            {
                field.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        }
    </script>
</body>
@endsection
