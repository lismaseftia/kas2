@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hallo Word') }}</div>

                <div class="card-body">
                    <h1>Tambah Mahasiswa</h1>
                    <form action="/mahasiswa/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                            <select name="jeniskelamin">
                                <option value="">Pilih Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P" >Perempuan</option>
                            </select>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
