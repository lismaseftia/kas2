@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ubah Data Mahasiswa') }}</div>

                    <div class="card-body">

                        <form action="/mahasiswa/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $mahasiswa->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $mahasiswa->nim }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $mahasiswa->kelas }}">
                            </div>
                                <select name="jeniskelamin">
                                    <option value="">Pilih Kelamin</option>
                                    <option value="L" @if ($mahasiswa->jeniskelamin == "L")selected @endif>Laki-Laki</option>
                                    <option value="P" @if ($mahasiswa->jeniskelamin == "P")selected @endif>Perempuan</option>
                                </select>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $mahasiswa->alamat }}">
                            </div>
                                <input type="submit" name="submit" class="btn
                                btn-primary" value="Save">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
