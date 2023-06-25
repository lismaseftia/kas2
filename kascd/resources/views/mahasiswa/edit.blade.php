<h1>Edit Mahasiswa</h1>

<form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{ $mahasiswa->nama }}"><br>
    <input type="text" name="nim" placeholder="NIM" value="{{ $mahasiswa->nim }}"><br>
    <input type="text" name="kelas" placeholder="Kelas" value="{{ $mahasiswa->kelas }}"><br>
    <select name="jeniskelamin">
        <option value="">Pilih Kelamin</option>
        <option value="L" @if($mahasiswa->jeniskelamin == "L")selected @endif>Laki-Laki</option>
        <option value="P" @if($mahasiswa->jeniskelamin == "P")selected @endif>Perempuan</option>
    </select><br>
    <textarea name="alamat" rows="10">{{ $mahasiswa->alamat }}</textarea><br>
    <input type="submit" name="submit" value="update">
</form>
