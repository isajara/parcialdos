<!DOCTYPE html>
<html>
<head>
	<title>Anotarme</title>
</head>
<style>
	.cuadro
{
  position: absolute;
  left:150px; 
  top:100px;
  width: 1050px;
  height: 400px;
    border-left: 1px solid white;
    border-right: 1px solid white;
  border-top: 1px solid white;
    border-bottom: 1px solid white;
  font-size: 30px;
  font-family: Ink Free;
  color: white;
  background-color: rgba(0, 0, 0, .1);
}

  .pagprincipal{
  position: absolute;
  text-decoration: none;
  top: 110px;
  left: 160px;
  padding: 10px;
  font-weight: 800;
  font-size: 20px;
  border-left: 1px solid black;
  border-right: 1px solid black;
  border-top: 1px solid black;
  border-bottom: 1px solid black;
  font-family: Ink Free;
  color: black;
    }

     .verp{
  position: absolute;
  text-decoration: none;
  top: 110px;
  left: 1070px;
  padding: 10px;
  font-weight: 800;
  font-size: 20px;
  border-left: 1px solid black;
  border-right: 1px solid black;
  border-top: 1px solid black;
  border-bottom: 1px solid black;
  font-family: Ink Free;
  color: black;
    }
</style>

<body background="fonde.png" style="background-repeat: no-repeat;background-size: cover;">
<div class="cuadro">
	<center>
	<br><br>
		<label>Regístrese</label> <br><br>
		<form method="POST" action="anotarme.php">
			<input type="text" name="nombre" placeholder="Ingrese su nombre" required=""> <br><br>
			<input type="text" name="puntos" placeholder="Ingrese sus puntos" required=""> <br>
			<input type="submit" name="Enviar" value="Enviar">
		</form>
	</center>
</div>

<a class="pagprincipal" href="index.php">Pagina principal</a><br>
<a class="verp" href="puntos.php">Ver puntos</a><br>

<?php
if (isset($_POST['enviar']))
{
  $nombre=$_POST['nombre'];
  $puntos=$_POST['puntos'];
 
   $conexion=new mysqli("localhost","root","","parcial");          
   $sql="INSERT INTO isaparcial VALUES(NULL,'$nombre','$puntos')";
   $ejecutar=mysqli_query($conexion,$sql);
                            
}

?>
</body>
</html>