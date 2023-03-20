@extends('Layouts.Dashboard')
@section('konten')
<div class="panel mx-auto col-lg-10 col-10 col-sm-6 col-md-6 mt-5 p-5 rounded shadow"
style="background-color: #e8e8e8">

<div class="row justify-content-start">

   
    <div class="col-lg-12 mx-auto">

    
        <form method="POST" action="/petugas-daftar">
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
             
            </div>
        </form>
        {{-- form --}}
        
    </div>

</div>
</div>
</div>


</div>

@endsection