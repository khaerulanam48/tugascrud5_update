@extends('departement.main')

@section('content')
<div class="container">
    <!-- Page Content goes here -->
    <center>
        <h3>Data Departement</h3>
    </center>


    <hr>
    <div class="row">
        <div class="col s6">
            <a href="{{route ('departement.create')}}" class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">add</i></a>
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
                <th>NAMA DEPARTEMENT</th>
                <th>ACTION</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            @foreach ($pegawai as $key => $value )

            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $value->nama_departement}}</td>
                <td>
                    <div class="row">
                        <div class="col s2">
                            <a class="btn-floating waves-effect btn-small waves-light red" href="{{ route('departement.show', $value->id) }}"><i class="material-icons">visibility</i></a>
                        </div>
                        <div class="col s2">
                            <a class="btn-floating waves-effect btn-small waves-light red" href="{{ route('departement.edit', $value->id) }}"><i class="material-icons">edit</i></a>
                        </div>
                        <div class="col s2">
                            <form action="{{ route('departement.destroy', $value->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-floating waves-effect btn-small waves-light red"><i class="material-icons">delete</i></button>
                                
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