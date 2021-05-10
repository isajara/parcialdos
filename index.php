<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
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
  font-size: 100px;
  font-family: Ink Free;
  color: white;
  background-color: rgba(0, 0, 0, .1);
}

  .volver{
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

 .jugar
{
  position:absolute;
  text-decoration: none;
  top: 230px;
  left: 350px;
  width: 250px;
  height: 170px;
   display: flex;
  align-items: center;
  justify-content: center;
  font-size: 500%;
  border-left: 1px solid black;
  border-right: 1px solid black;
  border-top: 1px solid black;
  border-bottom: 1px solid black;
  font-family: Ink Free;
  color: black;
}

.puntos
{
  position:absolute;
  text-decoration: none;
  top: 230px;
  left: 790px;
  width: 250px;
  height: 170px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 500%;
  border-left: 1px solid black;
  border-right: 1px solid black;
  border-top: 1px solid black;
  border-bottom: 1px solid black;
  font-family: Ink Free;
  color: black;
 
}
</style>
<body background="fonde.png" style="background-repeat: no-repeat;background-size: cover;">
<div class="cuadro"></div>
<a class="volver" href="https://isajara.github.io/periododos/">volver</a><br>
<a class="jugar" href="jugar.php">Jugar</a><br>
<a class="puntos" href="puntos.php">Ver<br>puntos</a>

</body>
</html>