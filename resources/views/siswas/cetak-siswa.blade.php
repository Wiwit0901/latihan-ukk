@extends('siswas.layout')


@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }} ">
</head>
 
    <br>
    <p align="center"><b>Data Siswa</b></p>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                </tr>
            </thead>
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
    </div>
</body>

 <h6 align="right">
@php $tgl=date('d-m-Y'); @endphp
   Bogor,{{$tgl}} 
   </br>
Kepala SMK WIKRAMA BOGOR
</h6>
</br>
</br>
</br>
</br>
</br>

<h6 align="right"> 
Iin Mulyani,S.Si.

</h6>
<script type="text/javascript">
    window.print();
</script>


<script type="text/javascript">
    function redirect() {
        window.location.href = '@php echo $redirect; @endphp';
    }
</script>
</html>