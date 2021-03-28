@extends('layouts.front')
@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        html
        {
            background-image: linear-gradient(#00c6ff, #0072ff);
            height: 100%;
        }
    </style>
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-5">
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nis">*NIS</label>
                                        <input type="number" name="nis" id="nis" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">*Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="alamat">*Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jk">*Jenis Kelamin</label>
                                        <select name="jk" id="jk" class="form-control custom-select" required>
                                            <option disabled selected>pilih jenis kelamin</option>
                                            <option value="0">Laki - laki</option>
                                            <option value="1">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tempat_lahir">*Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tgl_lahir">*Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="asal_sekolah">*Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kelas">*Kelas</label>
                                        <input type="text" name="kelas" id="kelas" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jurusan">*Jurusan</label>
                                        <input type="text" name="jurusan" id="jurusan" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="my-3 mx-2">
                                <a href="{{ route('welcome') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i></a>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i></button>
                            </div>
                            <div>   
                                <small style="font-family: 'font-title';">[Daftar Peserta SMK Wikrama]</small>
                                <img src="{{ asset('landing/assets/img/logowk.png') }}" width="50" alt="logoWeb" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card my-3">
                        <div class="card-header">
                            <h5 style="color: red;">Data siswa yang sudah Mendaftar</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-light" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Asal Sekolah</th>
                                            <th>Kelas</th>
                                            <th>Jurusan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswas as $siswa)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $siswa->nis }}</td>
                                                <td>{{ $siswa->nama }}</td>
                                                <td>{{ $siswa->GenderDefinition }}</td>
                                                <td>{{ $siswa->tempat_lahir }}</td>
                                                <td>{{ $siswa->tgl_lahir }}</td>
                                                <td>{{ $siswa->asal_sekolah }}</td>
                                                <td>{{ $siswa->kelas }}</td>
                                                <td>{{ $siswa->jurusan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js "></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush