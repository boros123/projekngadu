@extends('Layouts.Dashboard')
 @section('konten')

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            @if (Auth::guard('user')->check() )
            <h1> SELAMAT DATANG ADMIN  </h1>
            @elseif(Auth::guard('petugas')->check() )
            <h1> SELAMAT DATANG PETUGAS  </h1>
            @endif
            
            
            <div class="row">
                <div class="col-6 col-lg-12 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-lg-12 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
</div>
@endsection

