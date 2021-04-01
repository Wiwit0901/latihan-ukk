@extends('siswas.layout')
 
@section('content')
    <div class="row" class="form-control">
        <div class="col-lg-12 margin-tb">
      
            <div class="pull-left">
                <h2>Laporan Data Pendaftar</h2>
                
                        <a href="{{ route('laporans.print') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        
                    </div>
            </div>
        </div>
    </div>
  </form>

</form> 
    <table class="table table-bordered">
        <tr>


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
     	
     @endsection
  
