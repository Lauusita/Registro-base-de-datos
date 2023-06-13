<?php

$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];
$documento= $_POST['documento'];
$numero= $_POST['numero'];
$nacimiento = $_POST['dia'].'/'.$_POST['mes'].'/'.$_POST['ano'];
$tsangre = $_POST['sangre'].$_POST['signo'];
$sexo = $_POST['sexo'];
$direccion = $_POST['dc'].$_POST['numdc'].'#'.$_POST['num2dc'].'-'.$_POST['apt'];
$ciudad = $_POST['ciudad'];
$tel = $_POST['tel'];
$correo = $_POST['correo'];


echo "<br><h2> El nombre es </h2>".$nombre;
echo "<br><h2> El apellido es </h2>".$apellido;
echo "<br><h2> El tipo de documento es </h2>".$documento;
echo "<br><h2> El número de documento es </h2>".$numero;
echo "<br><h2> La fecha de nacimiento es </h2>".$nacimiento;
echo "<br><h2> El tipo de sangre es </h2>".$tsangre;
echo "<br><h2> El sexo es </h2>".$sexo;
echo "<br><h2> La dirección es </h2>".$direccion;
echo "<br><h2> La ciudad es </h2>".$ciudad;
echo "<br><h2> El teféfono es </h2>".$tel;
echo "<br><h2> La correo es </h2>".$correo;



$connect = mysqli_connect('localhost', 'root', '', 'registroparcial');

$add = "INSERT INTO infpropietario(nombre, apellido, documento, numero, nacimiento, tsangre, sexo, direccion, ciudad, tel, correo) values('$nombre', '$apellido', '$documento', '$numero', '$nacimiento', '$tsangre', '$sexo', '$direccion', '$ciudad', '$tel', '$correo')";

if (isset($_REQUEST['enviar'])){

$enviar = mysqli_query($connect, $add);

if ($enviar){
    echo "<br>los datos se guardaron";
}
else{
    echo "<br>los datos no se guardaron";

}

mysqli_close($connect); }//fin base de datos

?>

<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-2 mt-4 border border-dark-subtle rounded">
        <div class="row">
            <div class="col">
                <a href="index.html" class="btn btn-info text-white fw-semibold" tabindex="-1" role="button" aria-disabled="true">←</a>
            </div>
        </div>
        <div class="row">
          <div class="col">
              <h1 class="display-6 text-center bg-info text-white mt-2 fw-semibold rounded">BIENVENIDOS A PHP</h1>
          </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>
                    <?php
                        echo  "Nombre: $nombre $apellido";
                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>
                    <?php
                        echo "Documento de identidad: $documento, No°$numero";
                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>
                    <?php
                        echo "Su fecha de nacimiento es $nacimiento";
                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>
                    <?php
                        echo "Su tipo de sangre es $tsangre";
                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>
                    <?php
                        echo "Su genero es $sexo";
                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>
                    <?php
                        echo "Su direccion es $direccion";
                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>
                    <?php
                        echo "Provienes de la ciudad de $ciudad";
                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>
                    <?php
                        echo "Su telefono es $tel";
                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>
                    <?php
                        echo "Y, tu correo es $correo";
                    ?>
                </h3>
            </div>
        </div>
    </div>
    
  </body>

</html>