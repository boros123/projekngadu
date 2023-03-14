{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image" href="gambar/logo_lpkfamikom.png" />
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <style>
        body {
            background-color: #FEF5ED;
        }
    </style>


@if(session('error'))
<div class="alert alert-danger col-lg-6 mx-auto mt-2" role="alert">
    {{session('error')}}
</div>
@endif
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5"> --}}
                                {{-- Error Alert --}}
                               
                                {{-- <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{url('proses_login')}}" method="POST" id="logForm">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                           
                                            <label class="small mb-1" for="inputEmailAddress">Username</label>
                                            <input
                                                class="form-control py-4"
                                                id="inputEmailAddress"
                                                name="username"
                                                type="text"
                                                placeholder="Masukkan Username"/>
                                            @if($errors->has('username'))
                                            <span class="error">{{ $errors->first('username') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input
                                                class="form-control py-4"
                                                id="inputPassword"
                                                type="password"
                                                name="password"
                                                placeholder="Masukkan Password"/>
                                            @if($errors->has('password'))
                                            <span class="error">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"> --}}
                                            {{-- <a class="small" href="#">Forgot Password?</a>
                                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"> --}}
                                        {{-- <a href="{{url('register')}}">Belum Punya Akun? Daftar!</a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div> 
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
 --}}
 
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<!-- font-awesome css -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@200..900&display=swap">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="panel p-5 rounded col-lg-6 mx-auto shadow"style="background-color:#8BFBBE">
    <div class="container">
    <div class="text-center">
    <h5>LOGIN</h5>
    </div>
    </div>
              <hr>
                  <!-- Session Status -->
      
    
       <!-- Validation Errors -->
      
    
       <form method="POST" action="/masuk" >
           @csrf
    
           <!-- Email Address -->
           <div class="mb-3  mx-auto">
            <input type="text" class="form-control" id="exampleFormControlInput1" id="name" name="name">
          </div>
           
          <div class="mb-3   mx-auto">
         
            <input type="password" class="form-control" id="exampleInputPassword1" id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            required autocomplete="current-password" placeholder="Password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember_me" type="checkbox" name="remember">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
    
          <div class="row justify-content-between">
            {{-- @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
              {{ __('Forget Password?') }}
          </a>
            @endif
            --}}
              <div class="col-lg-12">
                <button type="submit" class="btn btn-primary col-lg-2">Login</button>    
                <a href="/" class="btn btn-secondary col-lg-2">back</a>
              </div>
              
          </div>
         
            
              
       </form>
            </div>
        </div>
     </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="{{ asset('bootstrap/css/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/Index.js"></script>
<!-- slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
<script>
VANTA.GLOBE({
el: "#vanta-canvas",
mouseControls: true,
touchControls: true,
gyroControls: false,
minHeight: 200.00,
minWidth: 200.00,
scale: 1.00,
scaleMobile: 1.00,
color: 0xfa92,
size: 1.80,
backgroundColor: 0xfcfcfc
})
</script>

  </body>
</html>
 