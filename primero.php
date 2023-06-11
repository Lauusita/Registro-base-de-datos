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