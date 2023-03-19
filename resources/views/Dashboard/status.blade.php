@extends('Layouts.Dashboard')
@section('konten')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Data Tanggapan</h3>
    </div>
    <div class="page-content">
        <div class="bg-white px-3 py-5 shadow col-lg-10 mx-auto">
            <h5 class="container mb-3">Berikan Tanggapan</h5>
            <section class="row">
                <div class="col-lg-10 mx-auto">
                    <form action="/create-tanggap{{ $record->id }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <textarea class="form-control" name="tanggapan" id="laporan" rows="5" placeholder="Masukan Tanggapan">{{ $record->tanggapan }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="status" class="form-text">Status Pengaduan</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="{{ $record->status }}">{{ $record->status }}</option>
                                    <option value="Belum Selesai">Belum Selesai</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Ditolak">Ditolak</option>
                                </select>
                            </div>
                            {{-- <div class="col-lg-6">
                                <label for="formFile" class="form-text">Masukan Lampiran tanggapan</label>
                                <input class="form-control" name="foto_tanggapan" type="file" id="formFile"
                                    value="{{ $record->fototanggapan }}">
                                <label for="formFile" class="form-text float-end">*format jpg, jpeg, dan png</label>
                            </div> --}}
                            <div class="border-top border-3 mt-2 pt-2 offcanvas-title">
                                <button type="submit" class="btn btn-primary float-end">Simpan</button>
                                <a href="/pengaduan" class="btn btn-danger float-end me-2">Batal</a>
                            </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <footer class="">

    </footer>
</div>
</div>
@endsection