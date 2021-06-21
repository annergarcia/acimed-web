<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Registro</title>
</head>
<style>
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    background-image: url('fondo.jpg');
  }
  
  .form-register {
    width: 400px;
    background: #24303c;
    padding: 30px;
    margin: auto;
    margin-top: 100px;
    border-radius: 4px;
    font-family: 'calibri';
    color: white;
    box-shadow: 7px 13px 37px #000;
  }
  
  .form-register h4 {
    font-size: 22px;
    margin-bottom: 20px;
  }
  
  .controls {
    width: 100%;
    background: #24303c;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border: 1px solid #1f53c5;
    font-family: 'calibri';
    font-size: 18px;
    color: white;
  }
  
  .form-register p {
    height: 40px;
    text-align: center;
    font-size: 18px;
    line-height: 40px;
  }
  
  .form-register a {
    color: white;
    text-decoration: none;
  }
  
  .form-register a:hover {
    color: white;
    text-decoration: underline;
  }
  
  .form-register .botons {
    width: 30%;
    background: #1f53c5;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
  }
  </style>
<body>
  <section class="form-register">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="string" name="identidad" id="identidad" placeholder="Ingrese su numero de identidad">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    <input class="controls" type="text" name="direccion" id="direcion" placeholder="Ingrese su direccion">
    <input class="controls" type="varchar" name="telefono" id="telefono" placeholder="Ingrese su numero de telefono">
    <input class="controls" type="text" name="especialidad" id="especialidad" placeholder="Ingrese su Especialidad">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Salir">
    <input class="botons" type="submit" value="Limpiar">
    <input class="botons" type="submit" value="Registrar">
    <p><a href="#">¿Ya tengo Cuenta?</a></p>
  </section>

</body>
</html>
