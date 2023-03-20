@extends('Layouts.Dashboard')
@section('konten')
<a href="/daftar" class="btn btn-primary">Tambah Petugas</a>
<div class="row" id="table-responsive">
  <div class="col-12">
     
              <!-- table responsive -->
              <div class="table-responsive">
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>No.telp</th>
                        <th>Kelamin</th>
                        <th>Username</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      @foreach ($petugas as $petugas)
                      <tr>
                        <td>{{ $loop-> iteration}}</td>
                        <td>{{$petugas -> nama}}</td>
                        <td>{{$petugas -> nik}}</td>
                        <td>{{$petugas -> tlp}}</td>
                        <td>{{$petugas-> kelamin}}</td>
                        <td>{{$petugas -> username}}</td>
                        <td>{{$petugas -> email}}</td>
                      
                      </tr>
                          
                      @endforeach
                      
                     
                    </tbody>
                  </table>
              </div>
          </div>
      </div>


      


@endsection
 
