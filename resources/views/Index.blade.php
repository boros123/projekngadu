@extends('Layouts.Layouts')
@section('bebas')


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
        <div class="row justify-content-evenly">
            <div class="col-lg-4">
                <div class="panel mx-auto shadow-sm p-3 rounded" style="background-color:#f9f9f9;">
                    <p>1</p>
                <div class="border-top"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempora eum amet natus neque maiores
                        pariatur, numquam incidunt eveniet ad nemo beatae perferendis reiciendis consequatur laborum
                        corrupti harum autem necessitatibus?</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel mx-auto shadow-sm p-3 rounded" style="background-color:#f9f9f9; ">
                    <p>1</p>
                    <div class="border-top"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempora eum amet natus neque maiores
                            pariatur, numquam incidunt eveniet ad nemo beatae perferendis reiciendis consequatur laborum
                            corrupti harum autem necessitatibus?</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel mx-auto shadow-sm p-3 rounded" style="background-color:#f9f9f9; ">
                    <p>1</p>
                    <div class="border-top"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempora eum amet natus neque maiores
                            pariatur, numquam incidunt eveniet ad nemo beatae perferendis reiciendis consequatur laborum
                            corrupti harum autem necessitatibus?</p>
                </div>
            </div>
        </div>
    </div>
    
    @if (!Auth::guard('user')->check() && !Auth::guard('petugas')->check() && !Auth::guard('pengguna')->check())
        <div class="container-fluid">


            <div class="border border-0 card" style="background-color: ">
                <img src="img/bro.svg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <div class="container-fluid mt-5">
                        <div class="row justify-content-between">
                            <div class="col-4 mx-auto mt-5 mb-5">
                                <div class="card border border-0 card" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">lorem</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Lorem ipsum
                                            dolor sit amet consectetur adipisicing elit. Facilis praesentium dolores quidem.
                                            Non necessitatibus laboriosam, impedit autem fugit possimus explicabo laborum
                                            officiis cumque, dolores aperiam quaerat soluta optio placeat eum?</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mx-auto mt-5 mb-5">
                                <div class="card border border-0 card" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">lorem</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Lorem ipsum,
                                            dolor sit amet consectetur adipisicing elit. Et aliquam, architecto voluptate
                                            sapiente debitis cum ipsa ratione similique pariatur nesciunt corrupti. Illum
                                            suscipit ut aperiam qui saepe dicta recusandae modi?</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container-fluid mt-5 mb-5">
                        <div class="row justify-content-between">
                            <div class="col-4 mx-auto mt-5">
                                <div class="card border border-0 card" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">lorem</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Lorem ipsum
                                            dolor sit amet consectetur adipisicing elit. Ex excepturi iure accusantium quis
                                            libero facilis nostrum ea molestias ad incidunt praesentium quas dolore
                                            blanditiis magni laborum deleniti voluptas, quae voluptatem.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mx-auto mt-5 mb-5">
                                <div class="card border border-0 card" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">lorem</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Lorem ipsum
                                            dolor sit amet consectetur adipisicing elit. Porro ex ad dignissimos rem
                                            architecto blanditiis, aspernatur accusantium explicabo, modi dolor possimus
                                            inventore quo qui suscipit quos aperiam quia illum at.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container-fluid mt-5 mb-5">
                        <div class="row justify-content-between">
                            <div class="col-4 mx-auto mt-5" data-aos="zoom-in">
                                <div class="card border border-0 card">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Pengalaman</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Pengalaman
                                            mengelola pelatihan kerja selama lebih dari 20 tahun menjadi modal untuk
                                            menyelenggarakan pelatihan online.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mx-auto mt-5 mb-5">
                                <div class="card border border-0 card" data-aos="zoom-in">
                                    <img src="" class="mx-auto mt-4" style="width:55px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Pengalaman</h5>
                                        <p class="card-text align-center col-lg-12 col-12 text-center mx-auto">Pengalaman
                                            mengelola pelatihan kerja selama lebih dari 20 tahun menjadi modal untuk
                                            menyelenggarakan pelatihan online.</p>
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
        <div class="panel mx-auto col-lg-10 col-10 col-sm-6 col-md-6 mt-5 pb-5 rounded shadow mb-5" data-aos="zoom-in"
            style="background-color: #8BFBBE">
            @if (session()->has('berhasil'))
            
    <div class="alert alert-danger alert-dismissible fade show col-lg-10 mx-auto" role="alert">
        {{ session('berhasil') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif
            <form action="/pengaduan" method="POST" enctype="multipart/form-data">
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
                      <button type="submit" class="btn btn-light mx-1 col-lg-2 col-md-4 col-sm-4 col-4 shadow">Kirim</button>
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
