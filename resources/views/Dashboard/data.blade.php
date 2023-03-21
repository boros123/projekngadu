@extends('Layouts.Dashboard')
@section('konten')
<div class="">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
        data-bs-target="#example">
        Cetak Pengaduan
    </button>
</div>
    <table class="table table-striped table-hovers" id="table1">
        <thead>
            <tr>
                <th>Nama Pelapor</th>
                <th>Jenis Laporan</th>
                <th>Laporan</th>
                <th>Tanggal Laporan</th>
                <th>Status</th>
                <th>Bukti Kejadian</th>
                
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($pengaduans as $pengaduan)
                <tr>
                    <td>{{ $pengaduan->pengguna->username }}</td>
                    <td>{{ $pengaduan->klasifikasi }}</td>
                    <td>{{ $pengaduan->laporan }}</td>
                    <td>{{ $pengaduan->created_at }}</td>
                    @if ($pengaduan->status == 'Belum Selesai')
                    <td class="text-primary">{{ $pengaduan->status }}</td>
                     @elseif ($pengaduan->status == 'Ditolak')
                    <td class="text-danger">{{ $pengaduan->status }}</td>
                    @elseif ($pengaduan->status == 'Selesai')
                    <td class="text-success">{{ $pengaduan->status }}</td>
                    @endif
                
                
                    <td>
                        <a href="" class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight{{ $pengaduan->pengguna_id }}"
                            aria-controls="offcanvasRight">Klik</a>
                    </td>
                   
                </tr>
                <!-- Modal -->


                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight{{ $pengaduan->id }}"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Detail Laporan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="panel shadow rounded p-5" style="color:antiquewhite;"><img
                                src="{{ asset('/storage/' . $pengaduan->lampiran) }}" class="img-fluid" alt=""
                                style="max-height: 500px;"></div>

                        <div class="panel shadow rounded mt-5 p-5" style="color:rgb(0, 0, 0);">
                            <p class="text-center">{{ $pengaduan->tglkejadian }}</p>
                        </div>
                    </div>
                </div>

                @include('Layouts.modal')
            @endforeach


        </tbody>
    </table>




    
@endsection
