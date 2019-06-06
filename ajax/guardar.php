<?php
    include 'Conexion.php';

    $productos = json_decode($_POST["json"]);

    $conexion = new Conexion();
    $cnn = $conexion->getConexion();
    $sql = "INSERT INTO producto(address1, amount, address2) VALUES (?,?,?);";
    $statement = $cnn->prepare($sql);
    
    $respuesta = false;
   foreach($productos->{"data"} as $producto){
    $statement->bindParam(1,$producto->{"address1"}, PDO::PARAM_STR );
    $statement->bindParam(2,$producto->{"amount"}, PDO::PARAM_INT );
    $statement->bindParam(3,$producto->{"address2"}, PDO::PARAM_STR );
    $respuesta= $statement->execute();
    //echo $producto->{"address1"}."<br>";
    //echo $producto->{"amount"}."<br>";
    //echo $producto->{"address2"}."<br>";
}
   echo $respuesta;
   // var_dump($productos->{"data"}[0]->{"producto});