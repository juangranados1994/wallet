<?php
include 'Conexion.php';
$llave=$_POST['llave'];    
$conexion = new Conexion();
$cnn = $conexion->getConexion();
$sql = "SELECT * FROM wallet WHERE llave='$llave'";
$resultado=mysqli_query($con,$sql);
$filas=mysqli_num_rows($resultado);


//$statement = $cnn->prepare($sql);
//$valor = $statement->execute();

//$result = mysqli_num_rows($valor); 


if($filas>0){
    header("location:transaccion.html");
}else{
    echo "error";
}
//$statement->closeCursor();
//$conexion = null;
mysqli_free_result($resultado);
mysqli_close($con);