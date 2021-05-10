<!DOCTYPE html>
<html>
<head>
  <title>jugar</title>
</head>
 <script>
numero=0;nada=0;ale1=0;ale2=0;puntos=0;suma=0;enviar=0;
 </script>

<style>
.tiempo
{
  position:absolute;
  top: 80px;
  left: 220px;
  width: 400px;
  height: 70px;
  border-left: 1px solid white;
    border-right: 1px solid white;
  border-top: 1px solid white;
    border-bottom: 1px solid white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 30px;
  font-family: Ink Free;
  color: white;
  background-color: rgba(0, 0, 0, .5);
}
  .zonadejuego

{
  position: absolute;
  left:150px; 
  top:200px;
  width: 1050px;
  height: 400px;
    border-left: 1px solid white;
    border-right: 1px solid white;
  border-top: 1px solid white;
    border-bottom: 1px solid white;
  font-size: 90px;
  font-family: Ink Free;
  color: white;
  background-color: rgba(0, 0, 0, .1);
}

.puntajetitulo
{
  position: absolute;
  left:720px; 
  top:50px;
  width: 400px;
  height: 30px;
  border-left: 1px solid white;
    border-right: 1px solid white;
  border-top: 1px solid white;
    border-bottom: 1px solid white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 30px;
  font-family: Ink Free;
  color: white;
  background-color: rgba(0, 0, 0, .7);
}

.tiempotitulo
{
  position: absolute;
  left:220px; 
  top:50px;
  width: 400px;
  height: 30px;
  border-left: 1px solid white;
    border-right: 1px solid white;
  border-top: 1px solid white;
    border-bottom: 1px solid white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 30px;
  font-family: Ink Free;
  color: white;
  background-color: rgba(0, 0, 0, .7);
}

.mas
{
  position:absolute;
  top: 250px;
  left: 600px;
  width: 150px;
  height: 150px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 500%;
  font-family: Ink Free;
  color: white;
}

.primernumero
{
  position:absolute;
  top: 250px;
  left: 370px;
  width: 150px;
  height: 150px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 500%;
  font-family: Ink Free;
  color: white;
}

.segundonumero
{
  position:absolute;
  top: 250px;
  left: 810px;
  width: 150px;
  height: 150px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 500%;
  font-family: Ink Free;
  color: white;
}
  .volver{
  position: absolute;
  text-decoration: none;
  top: 70px;
  left: 70px;
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

 .r

{
  position: absolute;
  left:150px; 
  top:420px;
  width: 1050px;
  height: 180px;
  font-size: 30px;
  font-family: Ink Free;
  color: white;
  background-color: rgba(0, 0, 0, .5);
}

.puntaje
{
  position:absolute;
  top: 80px;
  left: 720px;
  width: 400px;
  height: 70px;
  border-left: 1px solid white;
    border-right: 1px solid white;
  border-top: 1px solid white;
    border-bottom: 1px solid white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 30px;
  font-family: Ink Free;
  color: white;
  background-color: rgba(0, 0, 0, .5);
}

  .anotarme{
  position: absolute;
  text-decoration: none;
  top: 525px;
  left: 480px;
  padding: 10px;
  font-weight: 800;
  font-size: 20px;
  border-left: 1px solid white;
  border-right: 1px solid white;
  border-top: 1px solid white;
  border-bottom: 1px solid white;
  font-family: Ink Free;
  color: white;
    }

</style>

<body background="fonde.png" style="background-repeat: no-repeat;background-size: cover;" onload="aleatorio()" onmousemove="" onkeypress="respuesta()" onMousedown="">

<center><div class="zonadejuego" id="zonadejuego">
	<div class="respuesta" id="respuesta" ></div>
</div></center>
<div class="tiempotitulo"> Tienes 15 seg</div>
<div class="tiempo" id="tiempo"></div>
<div class="puntajetitulo">Puntos</div>
<div class="primernumero" id="primernumero"></div>
<div class="segundonumero" id="segundonumero"></div>
<div class="mas" id="mas">+</div>
<div class="puntaje" id="puntaje"></div>

<div class="r" id="r"><center>Pulsa los números de teclado del 0-9 para indicar la respuesta. Si es correcta sumarás 10 puntos.</center></div>

<a class="volver" href="index.php">volver</a>
<a class="anotarme" href="anotarme.php" >Anota tu nombre para guardar tus puntos</a>
<script>

 function respuesta()
{
   if(event.code=="Digit0")
   {
   	if(suma==0)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }

   if(event.code=="Digit1")
   {
   	if(suma==1)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }

    if(event.code=="Digit2")
   {
   	if(suma==2)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }

    if(event.code=="Digit3")
   {
   	if(suma==3)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }

    if(event.code=="Digit4")
   {
   	if(suma==4)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }

    if(event.code=="Digit5")
   {
   	if(suma==5)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }

    if(event.code=="Digit6")
   {
   	if(suma==6)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }

    if(event.code=="Digit7")
   {
   	if(suma==7)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }

    if(event.code=="Digit8")
   {
   	if(suma==8)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }

    if(event.code=="Digit9")
   {
   	if(suma==9)
   	{
   	puntos=puntos+10;
   	puntaje.innerHTML="tienes "+puntos;
   	aleatorio();
   	}
   }
}

  function cuenta()
  {    
  					if(numero<=0)
  					{
  						enviar=0;
  					}

    if(numero<=16)
    {
    numero=numero+1;
    tiempo.innerHTML=numero;
      if(numero==16)
       {
        nada=nada+7;
      final();
       }
    }  
  }

  function aleatorio()
  {  suma=0;
  	
    ale1=Math.floor((Math.random() * (5-0))+0);
    ale2=Math.floor((Math.random() * (6-0))+0);
   
    primernumero.innerHTML=ale1;
    segundonumero.innerHTML=ale2;
    puntaje.innerHTML="tienes "+puntos;
    suma=ale1+ale2;
    cuenta=setInterval(cuenta,1000);    
  }

  function final()
  {    enviar=puntos;
        clearInterval(cuenta);
      numero="la cuenta terminó";
      primernumero.style.display="none";
      segundonumero.style.display="none";
      mas.style.display="none";
      tiempo.innerHTML="La cuenta terminó";
      zonadejuego.innerHTML="Fin del juego, puntaje es: "+puntos;
  }
</script>

</body>
</html>
