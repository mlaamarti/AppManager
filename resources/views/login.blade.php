@include('layouts.header',['title'=>'Login'])

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
                    <form>
                        <div class="form-group">
                            <label >Email address</label>
                            <input type="text" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input type="text" required="" class="form-control">
                        </div>
                    </form>
                    <div class="sign-btn ">
                        <a href="index.html" class="btn-theme btn-theme-primary mb-4">
                            Sign in
                        </a>
                    </div>
                </div>
                <!-- End Form -->
            </div>
            <!-- End Right Content -->
        </div>
        <!-- End Row -->

@include('layouts.footer')
