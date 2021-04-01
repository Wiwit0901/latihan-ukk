<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
     <table class="table table-bordered">
        <tr>
           
            <th>No</th>

            <th>Nis</th>

            <th>Nama</th>

            <th>Jenis Kelamin</th>

            <th>Tempat Lahir</th>

            <th>Tanggal Lahir</th>

            <th>Alamat</th>

            <th>Asal Sekolah</th>

            <th>Kelas</th>

            <th>Jurusan</th>
            
        </tr>
        
        @foreach ($siswas as $siswa)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $siswa->nis }}</td>

            <td>{{ $siswa->nama }}</td>

            <td>{{ $siswa->jk }}</td>

            <td>{{ $siswa->tempat_lahir }}</td>

            <td>{{ $siswa->tanggal_lahir }}</td>

            <td>{{ $siswa->alamat }}</td>

            <td>{{ $siswa->asal_sekolah }}</td>

            <td>{{ $siswa->kelas }}</td>

            <td>{{ $siswa->jurusan }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
