@extends('departement.main')

@section('content')
<div class="container">
    <!-- Page Content goes here -->
    <!-- halaman create -->
    <center>
        <h3> Form Edit Data Departement</h3>
    </center>
    <div class="row">
        <div class="col s6">
            <a href="{{route('departement.index')}}" class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">arrow_back</i></a>
        </div>
    </div>
    <hr>

    <div class="row">
        <form class="col s12" action="{{ route('departement.update', $pegawai->id)}}" method="post">
            @csrf
            @method("PUT")

            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="nama_departement" class="validate" value="{{$pegawai->nama_departement}}">
                    <label for="name">Nama Departement</label>
                </div>
            </div>
            <button class="btn-medium waves-effect waves-light btn red" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
    @endsection