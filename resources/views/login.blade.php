@include('layouts.header',['title'=>'Login'])

@if(isset(Auth::user()->email))
    <script>window.location.href = '{{route("home")}}';</script>
@endif

<body class="login">
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="container-fluid  no-gutters h-100">
        <div class="row h-100 bg-white">
            <!-- Begin Left Content -->
            <div class="col-lg-7 no-padding">
                <div class="background-01" style="    background-image: linear-gradient(150deg, rgba(51, 170, 255, 0.8)15%, rgba(4, 209, 255, 0.8)70%, rgba(164, 254, 199, 0.8)94%), url({{asset('images/login-bg.jpg')}});background-size: cover;">
                    <div class="authentication-col-content mx-auto">
                        <h1 class="gradient-text-01">
                            Welcome To Mobile LM!
                        </h1>
                        <p>Login using your Mobile LM account</p>
                    </div>
                </div>
            </div>
            <!-- End Left Content -->
            <!-- Begin Right Content -->
            <div class="col-lg-5 my-auto " style="">
                <!-- Begin Form -->
                <div class="authentication-form mx-auto">

                    <h3 class="mb-3">Login to Mobile LM</h3>
                    <p>Login using your Mobile LM account</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label >{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="sign-btn ">
                            <button type="submit" class="btn-theme btn-theme-primary mb-4">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
                <!-- End Form -->

            </div>
            <!-- End Right Content -->
        </div>
        <!-- End Row -->

@include('layouts.footer')
