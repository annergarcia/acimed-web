<html>
<head>
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Exo', sans-serif;
        }
        .header-col{
            background: #E3E9E5;
            color:#536170;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .header-calendar{
            background: #EE192D;color:white;
        }
        .box-day{
            border:1px solid #E3E9E5;
            height:150px;
        }
        .box-dayoff{
            border:1px solid #E3E9E5;
            height:150px;
            background-color: #ccd1ce;
        }
    </style>

</head>
<body>

<div class="container">
    <div style="height:50px"></div>
    <p class="lead">
    <h2>Evento</h2>
    <a class="btn btn-default"  href="{{ asset('/Evento/index') }}">Atras</a>
    <hr>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($mensaje = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $mensaje }}</strong>
        </div>
    @endif


    <div class="col-md-6">
        <form action="{{ asset('/Evento/create/') }}" method="post">
            @csrf
            <div class="fomr-group">
                <label>Titulo</label>
                <input type="text" class="form-control" name="titulo">
            </div>
            <div class="fomr-group">
                <label>Descripcion del Evento</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="fomr-group">
                <label>Fecha</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="fomr-group">
                <label>Hora</label>
                <input type="text" class="form-control" name="titulo">
            </div>
            <div class="fomr-group">
                <label>Cupos</label>
                        <select name="buscarcupo">
                            <option value="0">1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                            <option value="5">6</option>
                            <option value="6">7</option>
                            <option value="7">8</option>
                            <option value="8">9</option>
                            <option value="9">10</option>
                            <option value="10">11</option>
                            <option value="11">12</option>
                            <option value="11">13</option>
                            <option value="11">14</option>
                            <option value="11">15</option>
                            <option value="11">16</option>
                            <option value="11">17</option>
                            <option value="11">18</option>
                            <option value="11">19</option>
                            <option value="11">20</option>
                        </select>

            </div>

            <br>
            <input type="submit" class="btn btn-info" value="Guardar">
        </form>
    </div>


    <!-- inicio de semana -->


</div> <!-- /container -->

<!-- Footer -->
<footer class="page-footer font-small blue pt-4">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>
