<h1>create mahasiswa</h1>

<form action="/mahasiswa/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="nim" placeholder="NIM"><br>
    <input type="text" name="kelas" placeholder="Kelas"><br>
    <select name="jeniskelamin">
        <option value="">Pilih Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <textarea name="alamat" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Save">
</form>
