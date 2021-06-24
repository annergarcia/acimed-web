<!DOCTYPE html>
<html lang="en">

<head> <title>MEDICAL RECORD</title>


    <p class="fant">MedicalRecord</p>

    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        p.fant {
            font-family: Abel;
            font-size: 60px;
            color: #000000;
            font-weight: bold;
            text-align: left;
            left: 500px;
            position: relative;
            top: 50px;

        }


        .abs-center {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
            color: #1c1818;


        }
        .form {
            width: 300px;
            height: 350px;
            position: center;
            left: 750px;


        }

        body {
            background-image: linear-gradient(-225deg, #E3FDF5 0%, #5586bf 100%);
            background-image: linear-gradient(to top, #a8edea 0%, #fef3d6 100%);
            background-attachment: fixed;
            background-repeat: no-repeat;

            font-family: 'Abel', sans-serif;
            opacity: .95;
            background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%);
        }

        .login{
            text-align: center;
            font-size: 20px;
            font-family: 'Vibur';
            font-weight: bold;
        }
        .btn-ingresar{
            color: #fff;
            background-image: linear-gradient(to right, #002984, #757de8);
            padding: 8px 20px;
            cursor: pointer;
            border-radius: 50px;
            border: 2px solid #002984 ;
            margin-bottom: -50px !important


        }
        .btn-crear{
            border-radius: 20px;
            color: #002984;
            background-color: #fff;
            padding: 8px 20px;
            cursor: pointer;
            border: 2px solid #002984 !important
        }

    </style>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body  >




<div class="container">
    <div class="abs-center">
        <form action="#" class="border p-3 form">
            <div class="login">
                <label>LOGIN</label>
            </div>
            <div class="form-group">
                <br>
                <label for="id">Usuario</label>
                <input type="id" name="id" id="id" class="form-control" placeholder="Usuario">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Contraseña </label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
            </div>
            <div>
                <br>
                <button type="submit" class="btn-ingresar">Ingresar</button>
                <br>
                <br>
                <button type="submit" class="btn-crear">Crear Cuenta</button>
            </div>


        </form>

    </div>
</div>

</body>

</html>
