

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    
    ?>
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
                    Mensaje enviado
                </p>
            </center>
        </div>
        
    <?php
    echo "hola";
    echo $nombre;
    echo "<p> Esto también lo escribió $nombre intérprete de PHP </p>";
            
    ?>
        
        
    </body>
</html>

