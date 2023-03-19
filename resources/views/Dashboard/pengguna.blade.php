@extends('Layouts.Dashboard')
@section('konten')
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
                      @foreach ($penggunas as $pengguna)
                      <tr>
                        <td>{{ $loop-> iteration}}</td>
                        <td>{{$pengguna -> nama}}</td>
                        <td>{{$pengguna -> nik}}</td>
                        <td>{{$pengguna -> tlp}}</td>
                        <td>{{$pengguna -> kelamin}}</td>
                        <td>{{$pengguna -> username}}</td>
                        <td>{{$pengguna -> email}}</td>
                      
                      </tr>
                          
                      @endforeach
                      
                     
                    </tbody>
                  </table>
              </div>
          </div>
      </div>


<div class="mt-2">{{$penggunas->links()}}</div>


@endsection
 
