<?php
$llave=$_POST['llave'];    
require("validar.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM wallet WHERE llave='$llave' ");
	$check_mail=mysqli_num_rows($checkemail);
		
	if($check_mail>0){
		echo ' <script language="javascript">alert("Llave correcta");</script> ';
        echo "<script>location.href='transaccion.html'</script>";
    }else{
		echo ' <script language="javascript">alert("llave incorrecta");</script> ';
        echo "<script>location.href='index.html'</script>";	
	}
			
		
