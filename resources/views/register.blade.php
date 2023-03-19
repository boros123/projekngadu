<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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




    <div class="panel mx-auto col-lg-10 col-10 col-sm-6 col-md-6 mt-5 pb-5 rounded shadow"
        style="background-color: #8BFBBE">
        <div class="container-fluid mt-5 pt-2">
            <a style="color: #FEF5ED;" href="/"><i class="fa-solid fa-left-long fa-xl"></i>



            </a>
        </div>
        <div class="row justify-content-start">

            <div class="col-lg-2 mx-auto ">
                <img src="img/logo.png" class="img-fluid " srcset="">
            </div>
            <div class="col-lg-9">

                {{-- form --}}
                <form method="POST" action="/regis">
                    @csrf
                    <div class="container">
                        <div class="row justify-content-evenly">

                            <div class="col-lg-6 col-10 col-md-10 col-sm-10  mb-2">
                                <div class="form-floating">
                                    <input class="form-control" type="text" name="nama" id="nama"
                                        placeholder="Masukan Nama" aria-label="default input example" required autofocus value="{{old('nama')}}">
                                    <label for="nama">Nama</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-10 col-md-10 col-sm-10 mb-2">
                                <div class="form-floating">
                                    <input class="form-control" type="text" name="nik" id="nik"
                                        placeholder="Masukan Nomor Induk Kependudukan"
                                        aria-label="default input example" required autofocus value="{{old('nik')}}"    >
                                    <label for="nik">Nomor Induk Kependudukan</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-10 col-md-10 col-sm-10 mx-auto mb-2">
                                <div class="form-floating">
                                    <input class="form-control" type="text" name="tlp" id="tlp"
                                        placeholder="No. Telp Aktif" aria-label="default input example" required autofocus value="{{old('tlp')}}" >
                                    <label for="tlp">Phone Number</label>
                                </div>
                            </div>
                              <div class="col-lg-6 col-10 col-md-10 col-sm-10 mx-auto mb-2">
                                <div class="form-floating">
                                    <input class="form-control" type="text" name="email" id="email"
                                        placeholder="Email"  aria-label="default input example" required autofocus value="{{old('email')}}" >
                                        <label for="email">Email</label>
                                </div>
                            </div>

                            {{--  --}}

                            {{-- <div class="col-lg-12 mb-2">
                                <label for="floatingInputValue" style="font-family: fantasy; color: #FEF5ED">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" 
                                    placeholder="Masukan alamat" name="alamat"></textarea>
                                </div> --}}

                                <div class="col-lg-12 mb-2">
                                <label for="kelamin" class="form-text"  style="font-family: fantasy; color: #FEF5ED">Choose Gender</label>
                                <select name="kelamin"  class="form-select">
                                    <option value="Laki-laki">Man</option>
                                    <option value="Perempuan">Woman</option>
                                </select>
                                </div>

                            <div class="col-lg-6 col-10 col-md-10 col-sm-10 mx-auto mb-2">
                                <div class="form-floating">
                                    <input class="form-control" type="text" name="username" id="username"
                                        placeholder="Username" aria-label="default input example"  required autofocus value="{{old('username')}}"  >
                                        <label for="username">Username</label>
                                </div>
                            </div>
                         

                            <div class="col-lg-6 col-10 col-md-10 col-sm-10 mx-auto mb-2">
                                <div class="form-floating">
                                    <input class="form-control" type="password" name="password" id="password"
                                        placeholder="Password"  aria-label="default input example" required autofocus value="{{old('password')}}" >
                                        <label for="password">Password</label>
                                </div>
                            </div>

                        




                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit"
                            class="btn btn-primary mx-1 col-lg-2 col-md-4 col-sm-4 col-4 shadow ">Kirim</button>
                        <button type="button"
                            class="btn btn-primary ps-2 col-lg-2 col-md-4 col-sm-4 col-4 shadow">Kembali</button>
                    </div>
                </form>
                {{-- form --}}
                
            </div>

        </div>
    </div>
    </div>


    </div>



    {{--  --}}
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slider js -->


</body>

</html>
