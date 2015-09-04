<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
<!--Realizar un programa que nos pida un número n, y nos diga cuantos números hay entre 1 y n que son primos.   -->  

<form action="Desarrollo_15.php" method="POST">
		 Ingrese su numero :<br>
  		<input type="text" name="numero" id="numero" value="0">
  		<input type="submit" value="Enviar">
		
		<p>
		
        <?php
	function primo($numero{
	$contador= 0;
	for($i = 1; $i <= $numero; $i++){
		if($numero % $i == 0){
			$contador++;
		}
	}
	if($contador==2){
		return true;
	}else{
		return false;
		}
	}
	 if (isset($_POST['numero'])){
		$numeros = $_POST['numero'];
		$funcion = primo($numeros);
		 if (isset($_POST['numero'])){
        if($_POST['numero']=$funcion){
	  for($i=0; $i<=$_POST['numero']; $i++){
	
		
			}
			echo $i;
		}
	}
}
?>