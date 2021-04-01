@extends('siswas.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('siswas.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('siswas.update',$siswa->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nis:</strong>

                    <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" >

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama:</strong>

                    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" >

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jenis Kelamin :</strong>

                <select class="form-control" name="jk">
                <option value = "Perempuan"{{$siswa->jk === "Perempuan" ? "selected" : ""}}> Perempuan</option>
                <option value ="Laki-laki" {{$siswa->jk === "Laki-laki" ? "selected" : ""}}> Laki-laki </option>
                </select>

            </div>

        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Tempat Lahir:</strong>

                    <input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" class="form-control" >

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Tanggal Lahir:</strong>

                    <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" class="form-control" >

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Alamat:</strong>

                    <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control" >

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Asal Sekolah:</strong>

                    <input type="text" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" class="form-control" >

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Kelas:</strong>

                    <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="form-control" >

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jurusan:</strong>

                    <select class="form-control" name="jurusan">
                <option value = "OTKP"{{$siswa->jurusan === "OTKP" ? "selected" : ""}}> OTKP</option>
                <option value ="MULTIMEDIA" {{$siswa->jurusan === "MULTIMEDIA" ? "selected" : ""}}> MULTIMEDIA </option>
                <option value ="RPL" {{$siswa->jurusan === "RPL" ? "selected" : ""}}> RPL </option>
                </select>
                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection