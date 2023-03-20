@extends('Layouts.Dashboard')
@section('konten')

<table class="table table-striped table-hovers">
  <thead>
    <tr>
      <th>Username</th>
      <th>Lokasi Kejadian</th>
      <th>Laporan</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($pengaduans as $pengaduan)
    <tr>
      <td>{{$pengaduan->pengguna->username}}</td>
      <td>{{$pengaduan -> alamat}}</td>
      <td>{{$pengaduan-> laporan }}</td>
      <td>{{ $pengaduan -> status }}</td>
     
      <td>
            
        <a href=""  class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight{{$pengaduan-> pengguna_id}}" aria-controls="offcanvasRight">Klik</a>
       
    </tr>


   

<!-- off canvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight{{$pengaduan ->id}}" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">Detail Laporan</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="panel shadow rounded p-5" style="background-color:#f5f5f5;">
        <p class="text-center">Bukti kejadian</p>
        <img src="{{ asset('/storage/' . $pengaduan-> lampiran) }}" class="img-fluid" alt=""
        style="max-height: 500px;"></div>
      
      <div class="panel shadow rounded mt-5 p-5" style="background-color:#f5f5f5;">
        <p class="text-center">Tanggal kejadian</p>
        <p class="text-center">{{$pengaduan -> tglkejadian}}</p></div>
    </div>
  </div>
  <!-- off canvas -->
   
   
    
   
  </tbody>
</table>

@endforeach




@endsection
 
