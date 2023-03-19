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

                {{-- @if (session()->has('loginerror'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('loginerror') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

            @endif --}}
            
            @if (session()->has('loginerror'))
            <div class="container-fluid">
                <div class="alert alert-danger alert-dismissible fade show  mx-auto" role="alert">
                    {{ session('loginerror') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
           
        @endif
                <!-- Validation Errors -->
              
                


                <form method="POST" action="/masuk">
                    @csrf

                    <!-- Email Address -->

                    <div class="mb-3  mx-auto">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="ea" placeholder="Username"
                                id="username" name="username">
                            <label for="ea" class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="mb-3   mx-auto">

                        <div class="form-floating">
                            <input type="password" class="form-control " id="e" id="password"
                                class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" placeholder="Password">
                            <label for="e" class="form-label">Password</label>
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
