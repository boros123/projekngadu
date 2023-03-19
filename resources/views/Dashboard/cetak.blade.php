
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="icon" type="image" href="img/logo.png" />
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="assets/css/pages/simple-datatables.css">
    
    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr class="">
                <th scope="col">No</th>
                <th scope="col" class="col-lg-2">Pengirim</th>
                <th scope="col" class="col-lg-2">Jenis Laporan</th>
                <th scope="col" class="col-lg-2">Isi Laporan</th>
                <th scope="col">Alamat</th>
                <th scope="col" class="col-lg-2">Tanggal</th>
                <th scope="col" class="text-center ">Status</th>
                <th scope="col" class="text-center col-lg-2">Lampiran</th>
                <th scope="col" class="text-center col-lg-2">Tanggapan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduans as $pengaduan)
                @if ($pengaduan->tanggapan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pengaduan->created_at }}</td>
                        <td>{{ $pengaduan->pengguna->nama }}</td>
                        <td>{{ $pengaduan->klasifikasi}}</td>
                        <td>{{ $pengaduan->laporan }}</td>
                        <td>{{ $pengaduan->alamat }}</td>
                        <td>{{ $pengaduan->tglkejadian }}</td>


                        @if ($pengaduan->status == 'Belum Selesai')
                            <td class="text-primary">{{ $pengaduan->status }}</td>
                        @elseif ($pengaduan->status == 'Ditolak')
                            <td class="text-danger">{{ $pengaduan->status }}</td>
                        @elseif ($pengaduan->status == 'Selesai')
                            <td class="text-success">{{ $pengaduan->status }}</td>
                        @else()
                            <td class="text-primary">{{ $pengaduan->status }}</td>
                        @endif

                        <td class="text-center"><img src="{{ asset('/storage/' . $pengaduan->lampiran) }}" width="100px"
                                alt="">
                        </td>
                        <td>{{ $pengaduan->tanggapan }}</td>

                    </tr>
                @endif
            @endforeach

        </tbody>
    </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
<script src="{{ asset('bootstrap/css/bootstrap.min.js') }}"></script>
<script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/js/pages/simple-datatables.js"></script>
</body>

</html>
