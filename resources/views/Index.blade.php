@extends('Layouts.Layouts')
@section('bebas')


   
    
    @if (!Auth::guard('pengguna')->check())
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <img src="img/Bloggin.svg" class="justify-content-start img-fluid" srcset="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <p class="h1 col-lg-6">SELAMAT DATANG DI LPM</p>
                <p class="h4">Silahkan Keluarkan Aspirasi dan Keluahan Kalian Disini</p>
                <p class="h4">Aman,Cepat,Terllindungi</p>
            </div>
        </div>
    </div>
    
    <div class="container-fluid pt-5 pb-5" style="background-color:#8BFBBE;">
        <div class="container mb-4">
            <div class="row">
                <h6 class="text-center" style="font-size: 20px;color:#FFFFFF;">Apa saja sih yang membedakan kami dengan website lain ?</h6>
            </div>
        </div>
        <div class="row justify-content-evenly">
            <div class="col-lg-4">
                <div class="panel mx-auto shadow-sm p-4 rounded" style="background-color:#f9f9f9;">
                    <p>1</p>
                <div class="border-top"></div>
                    <p>Design aplikasi yang sangat simple dengan tampilan menu yang mudah dioperasikan oleh pemula sekalipun
                         sehinga dapat memudahkan penggunaan aplikasi pengaduan ini</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel mx-auto shadow-sm p-4 rounded" style="background-color:#f9f9f9; ">
                    <p>2</p>
                    <div class="border-top"></div>
                        <p>Aplikasi dibuat secara bertahap satu persatu, sehingga dapat disesuaikan dengan
                             kemampuan karyawan untuk mengoperasikan aplikasi secara bertahap juga</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel mx-auto shadow-sm p-4 rounded" style="background-color:#f9f9f9; ">
                    <p>3</p>
                    <div class="border-top"></div>
                        <p>Aplikasi menggunakan database standar Internasional yang banyak digunakan aplikasi
                             lain sehingga memudahkan integrasi dengan vendor lain</p>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid">


            <div class="border border-0 card" style="background-color: ">
                <img src="img/bro.svg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <div class="container-fluid mt-5">
                        <p class="text-center" style="color: black; font-size: 24px">Cara melakukan pengaduan</p>
                    </div>
                    <div class="container-fluid mt-5">
                        <div class="row justify-content-between">
                            <div class="col-4 mx-auto mt-5 mb-5">
                                <div class="card border border-0 card" style="background-color:#f5f5f5" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Memastikan</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Sebelum melakukan pengaduan
                                            pastikan anda telah mempunyai akun terlebih dahulu
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mx-auto mt-5 mb-5">
                                <div class="card border border-0 card" style="background-color:#f5f5f5" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Membuat Akun</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Masuk ke halamam akun dengan tombol yang sudah di sediakan
                                            masukan data diri anda kedalam formulir
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container-fluid mt-5 mb-5">
                        <div class="row justify-content-between">
                            <div class="col-4 mx-auto mt-5">
                                <div class="card border border-0 card" style="background-color:#f5f5f5" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Verifikasi Akun</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">
                                            Pastikan data sudah terkirim, jika sudah terikirim akan muncul pemberitahuan untuk konfirmasi password
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mx-auto mt-5 mb-5">
                                <div class="card border border-0 card" style="background-color:#f5f5f5" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Login</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Login menggunakan username yang telah anda buat maka
                                            form pengaduan akan muncul untuk melakukan pengaduan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="container-fluid mt-5 mb-5">
                        <div class="row justify-content-between">
                            <div class="col-4 mx-auto mt-5">
                                <div class="card border border-0 card" style="background-color:#f5f5f5" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Melakukan Pengaduan</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Tulis pengaduan anda masukan tanggal beserta bukti dan lokasi kejadian</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mx-auto mt-5 mb-5">
                                <div class="card border border-0 card" style="background-color:#f5f5f5" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Konfirmasi</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Anda akan di minta untuk mengkonfirmasi laporan setelah berhasil akan ada pemberitahuan laporan telah terkirim</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>
        </div>
        
    @elseif (Auth::guard('pengguna')->check())
    
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <img src="img/Bloggin.svg" class="justify-content-start img-fluid" srcset="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <p class="h1 col-lg-6">SELAMAT DATANG DI LPM</p>
                <p class="h1 col-lg-6">{{Auth::guard ('pengguna')->user()->username}}</p>
            </div>
        </div>
    </div>
    
    <div class="container-fluid pt-5 pb-5" style="background-color:#8BFBBE;">
       
    </div>
        <div class="panel mx-auto col-lg-10 col-10 col-sm-6 col-md-6 mt-5 pb-5 rounded shadow mb-5" data-aos="zoom-in"
            style="background-color: #8BFBBE">
       
            <form action="/pengaduan" method="POST" enctype="multipart/form-data">
                @if (session()->has('berhasil'))
                <div class="container-fluid">
                    <div class="alert alert-primary mt-5 alert-dismissible fade show  mx-auto" role="alert">
                        {{ session('berhasil') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
               
            @endif
              @csrf
                <div class="container-fluid pt-5">
                  <input type="hidden" name="status" value="Belum Selesai">
                    <div class="row row justify-content-evenly">
                        
                            
                        <div class="mb-3 col-lg-6">
                            <textarea class="form-control shadow" id="exampleFormControlTextarea1" name="laporan" rows="5" placeholder="Isi Laporan"></textarea>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <textarea class="form-control shadow" id="exampleFormControlTextarea1" name="alamat" rows="5" placeholder="Lokasi Kejadian"></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="bg-white p-3 col-lg-2 col-5 rounded-3 me-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="klasifikasi" value="Aspirasi"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Aspirasi
                                    </label>
                                </div>
                            </div>
                            <div class="bg-white col-lg-2 col-6 rounded-2 p-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="klasifikasi" value="Pengaduan"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Pengaduan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-lg-5">
                      <label for="tgl ">Masukan Tanggal</label>
                        <input type="date" class="form-control shadow" id="tgl" name="tglkejadian" placeholder="">
                    </div>

                    <div class="mb-3 col-lg-5">
                      <label for="formfile">Masukan Bukti Kejadian</label>
                        <input class="form-control shadow" 
                        name="lampiran" type="file" id="formFile" >
                    </div>

                   
                    
                    <div class="d-flex justify-content-center mt-4">
                      @if (!Auth::guard('pengguna')->check())
                      <a class="btn btn-light mx-1 col-lg-2 col-md-4 col-sm-4 col-4 shadow" id="liveAlertBtn">Kirim</a>
                  @elseif (Auth::guard('pengguna')->check())
                      <input type="hidden" name="pengguna_id"
                          value="{{ Auth::guard('pengguna')->user()->id }}">
                      <button type="submit" onclick="return confirm('Laporan anda sudah benar?')" class="btn btn-light mx-1 col-lg-2 col-md-4 col-sm-4 col-4 shadow">Kirim</button>
                  @endif

                       
                    </div>
            </form>
        </div>
        </div>
    @endif
    
    <div class="container-fluid mb-5" id="vanta-canvas">
      <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center"><h1 class="mt-5">5000</h1></div>
        <div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center"><h6>Sudah Melapor</h6></div>
      </div>
     </div> 
   
@endsection
