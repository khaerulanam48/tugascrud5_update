@extends('pegawai.main')

@section('content')
<div class="container">
    <!-- Page Content goes here -->
    <center>
        <h3>Tampilan Data Pegawai</h3>
    </center>


    <hr>
    <div class="row">
        <div class="col s6">
            <a href="{{route ('pegawai.create')}}" class="btn-floating btn-medium red waves-effect waves-light "><i class="material-icons">add</i></a>
        </div>

        <div class="col s6">

            <div class="col s6">
                <input placeholder="Search" type="search" required>
            </div>
            <div class="col s4">
                <button id="search" class="btn-medium waves-effect waves-light btn red" type="submit" name="action">Cari
                    <i class="material-icons right">search</i>
                </button>
            </div>

        </div>
    </div>

    <table class="responsive-table highlight">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>NAMA PEGAWAI</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>ACTION</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            @foreach ($pegawai as $key => $value )

            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $value->nip}}</td>
                <td>{{ $value->nama_pegawai}}</td>
                <td>{{ $value->tempat_lahir}}</td>
                <td>{{ $value->alamat}}</td>
                <td>{{ $value->tanggal_lahir}}</td>
                <td>{{ $value->jenis_kelamin}}</td>
                <td>{{ $value->jabatan}}</td>
                <td>
                    <div class="row">
                        <div class="col s4">
                            <a class="btn-floating waves-effect btn-small waves-light red" href="{{ route('pegawai.show', $value->id) }}"><i class="material-icons">visibility</i></a>
                        </div>
                        <div class="col s4">
                            <a class="btn-floating btn-small waves-effect waves-light red" href="{{ route('pegawai.edit', $value->id) }}"><i class="material-icons">edit</i></a>
                        </div>
                        <div class="col s4">
                            <form action="{{ route('pegawai.destroy', $value->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></button>

                            </form>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection