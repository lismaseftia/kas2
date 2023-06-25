<a href="/mahasiswa/create">Add Mahasiswa</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
    </tr>
    @foreach ($mahasiswa as $m)
    <tr>
        <td>{{ $m->id }}</td>
        <td>{{ $m->nama }}</td>
        <td>{{ $m->nim }}</td>
        <td>{{ $m->kelas }}</td>
        <td>{{ $m->jeniskelamin }}</td>
        <td>{{ $m->alamat }}</td>
    </tr>
    @endforeach

</table>
