@extends('Layouts.Dashboard')
@section('konten')
<div class="mx-auto">
    <label for="">Bukti kejadian</label>
    <div class="card mb-3">
        <img src="img/pana.svg" class="card-img-top mx-auto" style="width:300px;">
        <div class="card-body">
            <div class="panel mt-3" >
                <label for="panel">Tanggal Kejadian</label>
               <div class="panel rounded p-2" style="background-color: #fafafa">
                <p>09/09/09</p>
               </div>
              </div>
              <div class="panel mt-3" >
                <label for="panel">Keterangan Kejadian</label>
               <div class="panel rounded p-2" style="background-color: #fafafa">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eligendi fugiat aut ratione earum doloribus ea magnam officiis non facilis dolore minima corrupti, beatae dolores provident laborum voluptatibus exercitationem id.</p>
               </div>
              </div>
              <div class="panel mt-3" >
              <label for="panel">Lokasi Kejadian</label>
             <div class="panel rounded p-2" style="background-color: #fafafa">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eligendi fugiat aut ratione earum doloribus ea magnam officiis non facilis dolore minima corrupti, beatae dolores provident laborum voluptatibus exercitationem id.</p>
             </div>
        </div>
      </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="p-3 panel"  style="background-color: #fafafa" >
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Jawab laporan disini" rows="4"></textarea>
            <div class="col mt-2">
                <button type="button" class="btn btn-primary">kirim</button>
              </div>
          </div>
          
    </div>
  </div>
@endsection