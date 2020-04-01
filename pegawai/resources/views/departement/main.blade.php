<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ ('worker.png') }}">
    <title>Pegawai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        #slide-out {
            
            background: #FFEFBA;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFFFFF, #FFEFBA);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        nav { 
            background: #8E0E00;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #1F1C18, #8E0E00);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #1F1C18, #8E0E00);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        body {
            background: #FFEFBA;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFFFFF, #FFEFBA);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .circle{
            margin-left: 50px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <nav class="#004e92 ">
        <div class="nav-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <a href="#" class="brand-logo center"> <img src="{{ ('worker.png') }}" height="25px" alt="" srcset=""> Pegawai</a>
        </div>

    </nav>


    <div class="row">

        <div class="col s12 m4 l3">

            <ul id="slide-out" class="sidenav sidenav-fixed">
                <img class="circle" src="{{ ('worker.png') }}" width="50%" >
                <li><a href="{{route ('pegawai.index') }}"><i class="material-icons">note_add</i> Data Pegawai</a></li>
                <li><a href="#!"><i class="material-icons">note_add</i>Data Cuti</a></li>
                <li><a href="{{route ('departement.index') }}"><i class="material-icons">note_add</i>Data Departemen</a></li>
                <li><a href="#!"><i class="material-icons">note_add</i>Gaji Pegawai</a></li>
            </ul>
        </div>

        <div id="konten" class="col s12 m8 l9">
            @yield('content')

        </div>

    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, {});
    });
</script>

</html>

