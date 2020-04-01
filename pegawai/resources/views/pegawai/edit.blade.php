@extends('pegawai.main')

@section('content')
<div class="container">
    <!-- Page Content goes here -->
    <!-- halaman create -->
    <center>
        <h3> Form Edit Data Pegawai</h3>
    </center>
    <div class="row">
        <div class="col s6">
            <a href="{{route('pegawai.index')}}" class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">arrow_back</i></a>
        </div>
    </div>
    <hr>

    <div class="row">
        <form class="col s12" action="{{ route('pegawai.update', $pegawai->id)}}" method="post">
            @csrf
            @method("PUT")

            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="number" name="nip" class="validate" value="{{$pegawai->nip}}">
                    <label for="name">NIP</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="nama_pegawai" class="validate" value="{{$pegawai->nama_pegawai}}">
                    <label for="name">Nama Pegawai</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="tempat_lahir" class="validate" value="{{$pegawai->tempat_lahir}}">
                    <label for="name">Tempat Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="alamat" class="validate" value="{{$pegawai->alamat}}">
                    <label for="name">Alamat</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="date" name="tanggal_lahir" class="validate" value="{{$pegawai->tanggal_lahir}}">
                    <label for="name">Tanggal Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="jenis_kelamin" class="validate" value="{{$pegawai->jenis_kelamin}}">
                    <label for="name">Jenis_Kelamin</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="jabatan" class="validate" value="{{$pegawai->jabatan}}">
                    <label for="name">Jabatan</label>
                </div>
            </div>
            <button class="btn-medium waves-effect waves-light btn red" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
    @endsection