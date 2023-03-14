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
  @include('Layouts.navbars')
@yield('bebas')
@include('Layouts.footer')

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