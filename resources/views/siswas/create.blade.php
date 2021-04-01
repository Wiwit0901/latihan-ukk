@extends('siswas.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Tambahkan Data</h2>

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

   

<form action="{{ route('siswas.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nis:</strong>

                <input type="text" name="nis" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="nama" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jenis Kelamin :</strong>

                <select class="form-control" name="jk">
                    <option value = "Perempuan"> Perempuan </option>
                    <option value ="Laki-laki"> Laki-laki </option>
                </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tempat Lahir:</strong>

                <input type="text" name="tempat_lahir" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Lahir:</strong>

                <input type="date" name="tanggal_lahir" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                <input type="text" name="alamat" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Asal Sekolah:</strong>

                <input type="text" name="asal_sekolah" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kelas:</strong>

                <input type="text" name="kelas" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jurusan:</strong>
                <select class="form-control" name="jurusan">
                    <option value = "OTKP"> OTKP </option>
                    <option value ="MULTIMEDIA"> MULTIMEDIA </option>
                    <option value ="RPL"> RPL </option>
                </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="submit" type="btn btn-primary">Reset</button>

        </div>

    </div>

   

</form>

@endsection