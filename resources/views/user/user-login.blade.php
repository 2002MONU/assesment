



<!doctype html>
<html lang="en" data-bs-theme="dark">
  

<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>User Login</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/coinex.min862f.css?v=4.1.0')}}">
      <link rel="stylesheet" href="{{asset('assets/css/custom.min862f.css?v=4.1.0')}}">
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">  </head>
  <body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
      <div style="background-image: url('../assets/images/auth/01.png')" >  
        <div class="wrapper">
<section class="vh-100 bg-image">
    <div cwlass="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-lg-6 col-md-8 mt-5">
                <div class="card bg-dark">
                    <div class="card-body">
                        <div class="auth-form">
                                <h2 class="text-center mb-4">User Sign In</h2>
                                @if(session('success'))
                                      <span class="alert alert-success text-white" role="alert">{{session('success')}}</span>
                                @endif
                                @if(session('error'))
                                <span class="alert alert-danger text-white" role="alert">{{session('error')}}</span>
                          @endif
                          
                                <form action="{{route('user-login-post')}}" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3 mt-4">
                                        <input type="email" class="form-control"  name="email" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email</label>
                                        @if($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                    @endif
                                    </div>
                                     <div class="form-floating mb-2">
                                        <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
                                        <label for="Password">Password</label>
                                        @if($errors->has('password'))
                                        <div class="error">{{ $errors->first('password') }}</div>
                                    @endif
                                    </div>
                                    <div class="d-flex justify-content-between  align-items-center flex-wrap gap-2">
                                        <div class="form-group mb-0">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="sumbit" name="sumbit" class="btn btn-primary">Sign In</button>
                                    </div>
                                    <div class="text-center mt-3">
                                        <p>or sign in with others account?</p>
                                    </div>
                                     <div class="d-flex justify-content-center ">
                                        <ul class="list-group list-group-horizontal   list-group-flush">
                                            <li class="list-group-item bg-transparent border-0">
                                            <a href="#"><img src="../assets/images/brands/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img60"></a>
                                            </li>
                                            <li class="list-group-item bg-transparent border-0">
                                            <a href="#"><img src="../assets/images/brands/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="gm"></a>
                                            </li>
                                            <li class="list-group-item bg-transparent border-0">
                                            <a href="#"><img src="../assets/images/brands/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="im"></a>
                                            </li>
                                            <li class="list-group-item bg-transparent border-0">
                                            <a href="#"><img src="../assets/images/brands/04.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="li"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                                <div class="new-account mt-3 text-center">
                                    <p>Don't have an account? <a class="" href="sign-up.html">Click
                                            here to sign up</a></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
      </div>
      
    
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('assets/js/core/libs.min.js')}}"></script>
    <script src="{{asset('assets/js/core/external.min.js')}}"></script>
    
    <!-- widgetchart JavaScript -->
    <script src="{{asset('assets/js/charts/widgetcharts.js')}}"></script>
    
    <!-- GSAP Animation JS-->
    <script src="{{asset('assets/vendor/gsap/gsap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/gsap/ScrollTrigger.min.js')}}"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="{{asset('assets/js/fslightbox.js')}}"></script>
    
    <!-- Mapchart JavaScript -->
    <script src="{{asset('assets/js/charts/vector-chart.js')}}"></script>
    <script src="{{asset('assets/js/charts/dashboard.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('assets/js/coinex.js')}}"></script>
    
    <!-- apexchart JavaScript -->
    <script src="{{asset('assets/js/charts/apexcharts.js')}}"></script>
    
    <!-- Gsap Animation Init -->
    <script src="{{asset('assets/js/gsap.js')}}"></script>  </body>


</html>