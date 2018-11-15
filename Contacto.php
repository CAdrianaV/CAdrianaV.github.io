<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/BarraMenu.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lora" />
        <style type="text/css">
            *
            {
                margin:0px;
                padding:0px;
            }
            .button 
              {
                background-color: #528A45; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
              }
              
              .button:hover 
              {
                background-color: #6DB55C; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
              }
        </style>
    </head>
    <body>
        
        <header>
            <div style=" background-color: red">
                
            </div>
            <div id="header">
                <ul class="nav">
                    <li><a href="index.html">INICIO</a></li>
                    <li><a href="">PRODUCTOS</a>
                        <ul>
                            <li><a href="Bebidas.html">Bebidas</a></li>
                            <li><a href="Alimentos.html">Alimentos</a></li>
                            <li><a href="Postres.html">Postres</a></li>
                        </ul>
                    </li>
                    <li><a href="QuienesSomos.html">¿QUIÉNES SOMOS?</a></li>
                    <li><a href="">MISIÓN Y VISIÓN</a>
                        <ul>
                            <li><a href="Mision.html">Misión</a></li>
                            <li><a href="Vision.html">Visión</a></li>
                        </ul>
                    </li>
                    <li><a href="Contacto.php">CONTACTO</a></li>
                     <li><a href="Encuentranos.html">ENCUENTRANOS</a></li>
                     <li><a href="Multimedia.html">MULTIMEDIA</a></li>
                </ul>
            </div>
        </header>
        
        <section style="padding-left: 0px; padding-right:  0px; padding-top:  0px; padding-bottom:  0px">
            <div style="width: 100%; height: auto; padding-left: 0px; padding-right:  0px; padding-top:  0px;">
                <img src="ImagenesS/cabecera-1.png" style="width: 100%">
            </div>
        </section>
        <hr color="528A45" size=12 width="100%" style="padding-bottom: 0px; padding-top: 0px">
        
        <div style="width: 100%; height: auto; padding-left: 0px; padding-right:  0px; padding-top:  10px; padding-bottom:  20px">
            <center>
                <p style="font-family: Lora, Helvetica,Arial, sans-serif; padding-left: 10%; padding-right: 10%; font-size: 54px; text-align: justify; padding-top: 50px">
                    Envianos un mensaje
                </p>
            </center>
        </div>
        
        <div style="width: 80%; height: auto; padding-left: 10%; padding-right:  0px; padding-top:  10px; padding-bottom:  20px">
            <form method="post" action="mensaje.php" style="font-family: Lora, Helvetica,Arial, sans-serif; font-size: 18px; text-align: justify; padding-top: 10px">
                Nombre Completo<br>
                <input style=" font-family: Lora, Helvetica,Arial, sans-serif; font-size: 16px; height: 32px; width: 50%;" type="text" name="nombre" id="nombre"><br><br><br>
                Correo<br>
                <input style=" font-family: Lora, Helvetica,Arial, sans-serif; font-size: 16px; height: 32px; width: 50%;" type="text" name="correo" id="correo"><br><br><br>
                Asunto<br>
                <input style=" font-family: Lora, Helvetica,Arial, sans-serif; font-size: 16px; height: 32px; width: 50%;" type="text" name="asunto" id="asunto"><br><br><br>
                Mensaje<br>
                <textarea cols="30" rows="15" style=" font-family: Lora, Helvetica,Arial, sans-serif; font-size: 16px; width: 50%;" type="text" name="mensaje" id="mensaje"></textarea><br><br><br>
                <br>
                <input class="button" type="submit" name="Enviar">
            </form>
        </div>
        
        <br>
        <br>
        <!-- <div style="width: 100%; height: auto; padding-left: 5%; padding-right:  5%; padding-top:  20px;">
            <center>
                <div style="width: 25%; height: auto; padding-left: 20px; padding-right:  20px; padding-top:  0px; float: left">
                    <div style="width: 100%; height: auto; padding-left: 30px; padding-right:  40px; padding-top:  0px; float: bottom">
                        <a href="MenuPolito.pdf" download="MenuPolito" style="font-family: Lora, Helvetica,Arial, sans-serif; padding-left: 2%; padding-right: 2%; font-size: 24px; text-align: justify; padding-top: 10px"> 
                            Descargar Menu  
                        </a>
                        
                        <p style="font-family: Lora, Helvetica,Arial, sans-serif; padding-left: 2%; padding-right: 2%; font-size: 18px; text-align: justify; padding-top: 10px">
                            Descarga nuestro menú del día, muestralo en nuestra cafetería y llevate el 10% de descuento del valor total de tu compra.
                        </p> 
                        <br>
                        <hr width="100%" size="5" color="gray">
                        <br>
                </div>
            </center>
        </div> -->
        
    </body>
</html>

