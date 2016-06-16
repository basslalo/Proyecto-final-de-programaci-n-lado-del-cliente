<!DOCTYPE html>	
<html lang="es">
<head>
    <title>Examen 5° Unidad</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/jquery-1.12.3.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script> 
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/examen.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body> 
    <header>
        <img src="img/SEP1.png" width:300px height:200px> 
        <img src="img/gam.png" align="right">
    <div class="col-md-8 center-block quitar_float text-center montserrat white">
        <h3>Tecnológico Nacional de México</h3>
        <h3>Anexo ll</h3>
        <h3>Formato de Solicitud de Asignaturas en Movilidad estudiantil</h3> 
        <hr>
        <h3 class="espacio_arriba">Relación de Asignaturas Procedencia/Destino</h3>
        <br>
    </div> 
    </header> 
    <div id="entorno">
        <div class="panel panel-default">
            <!--Primera columna-->
            <div class="row">
                <div class="col-xs-2" >
                    <h4 class="Temas">Nombre de la Asignacion Procedencia</h4>
                </div>
                <div class="col-xs-1">
                    <h4 class="Temas">Clave </h4>
                </div>
                <div class="col-xs-3">
                    <h4 class="Temas">Nombre de la Asignacion Destino</h4>
                </div>
                <div class="col-xs-1">
                    <h4 class="Temas">Clave</h4> 
                </div>
                <div class="col-xs-2">
                    <h4 class="Temas">Horas Clase </h4>
                </div>
                <div class="col-xs-2">
                    <h4 class="Temas">Horas Practica</h4>
                </div>
                <div class="col-xs-1">
                    <h4 class="Temas">Creditos</h4>
                </div>
            <!--Segunda columna-->
            <div class="row">
                <div class="col-xs-2" >

                </div>
                <div class="col-xs-1">
                    
                </div>
                <div class="col-xs-1">
                    
                </div>
                <div class="col-xs-1">

                </div>
                <div class="col-xs-1">
                    <h4 class="Temas1 espacio_derecha">Procedencia</h4>
                </div>
                <div class="col-xs-1">
                    <h4 class="Temas1 espacio_derecha">Destino</h4>
                </div>
                <div class="col-xs-1">
                    <h4 class="Temas1 espacio_dercha">Procedencia</h4>
                </div>
                <div class="col-xs-1">
                    <h4 class="Temas1 espacio_derecha">Destino</h4>
                </div>
                <div class="col-xs-1">
                    <h4 class="Temas"></h4>
                </div>
            </div>
            </div>
        </div>
    </div>
<form action="resultado.php" method="post">
    <table class="table">
    <div class="container-fluid azulito">
        <div class="row">
            <div class="col-xs-2">
            <form action="resultado.php" method="post"></form>
                <h5>
                    <input required="true" name="proc" type="text" class="form-control" id="proc"> 
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="clap" type="text" class="form-control" id="clap" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-3">
                <h5>
                    <input required="true" name="des" type="text" class="form-control" id="des">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="clad" type="text" class="form-control" id="clad" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="hcp" type="text" class="form-control" id="hcp" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>    
                    <input required="true" name="hcd" type="text" class="form-control" id="hcd" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="hpp" type="text" class="form-control" id="hpp" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="hpd" type="text" class="form-control" id="practicad" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5 >
                    <input required="true" name="creditos" type="text" class="form-control" id="creditos" placeholder="12345">
                </h5>
            </div>
       </div> 
       <!--Termina columna1-->
        <div class="row">
             <div class="col-xs-2">
                <h5>
                    <input required="true" name="proc1" type="text" class="form-control" id="proc1"> 
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="clap1" type="text" class="form-control" id="clap1" placeholder="12345">
                </h5>
                </div>
            <div class="col-xs-3">
                <h5>
                    <input required="true" name="des1" type="text" class="form-control" id="des1">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="clad1" type="text" class="form-control" id="clad1" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="hcp1" type="text" class="form-control" id="hcp1" placeholder="12345">
                </h5>
            </div>
             <div class="col-xs-1">
                <h5>   
                    <input required="true" name="hcd1" type="text" class="form-control" id="hcd1" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="hpp1" type="text" class="form-control" id="hpp1" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="hpd1" type="text" class="form-control" id="hpd1" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5 >
                    <input required="true" name="creditos1" type="text" class="form-control" id="creditos1" placeholder="12345">
                </h5>
            </div>
        </div> 
       <!--Termina columna2-->
        <div class="row">
            <div class="col-xs-2">
                <h5>
                    <input required="true" name="proc2" type="text" class="form-control" id="proc2"> 
                </h5>
            </div> 
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="clap2" type="text" class="form-control" id="clap2" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-3">
                <h5>
                    <input required="true" name="des2" type="text" class="form-control" id="des2">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="clad2" type="text" class="form-control" id="clad2" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="hcp2" type="text" type="clasep3" class="form-control" id="hcp2" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>  
                    <input required="true" name="hcd2" type="text"  class="form-control" id="hcd2" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="hpp2" type="text" type="practicap3" class="form-control" id="hpp2" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5>
                    <input required="true" name="hpd2" type="text" type="practicad3" class="form-control" id="hpd2" placeholder="12345">
                </h5>
            </div>
            <div class="col-xs-1">
                <h5 >
                    <input required="true" name="creditos2" type="text" class="form-control"  id="creditos2" placeholder="12345">
                </h5>
            </div>
        </div>
       <!--Termina columna3-->
</table>
<div class="col-md-12 center-block text-center montserrat white"> 
    <div class="espacio_arriba1"> 
        Actividades Academicas
        <br>
        <input name="actividades" class="form-control" type="text" size="100px" required="true" id="actividades" placeholder="Actividades academicas">
    </div>
    <div class="espacio_arriba1"> 
        Institucion Receptora
        <br>
        <input name="institucion" class="form-control" size="100px" required="true" type="text" id="intitucion" placeholder="Institucion Receptora"> 
    </div>   
    <div class="espacio_arriba1">  
        Lugar y Fecha
        <br>
        <input name="lugar" class="form-control" size="100px" required="true" type="text" id="lugar" placeholder="Lugar y fecha "> 
    </div">
    <div class="espacio_arriba1"> 
        Nombre y Firma del Estudiante
        <br>
        <input name="firma" class="form-control" size="100px" required="true" type="text" id="firma" placeholder="Nombre y Firma "> 
    </div>
    <div class="espacio_arriba1 negro col-md-6 center-block espacio_abajo">
        <input type="submit" value="Enviar" onclick="validacion();"/>    
        <input type="reset" value="Borrar">  
    </div>
</form>
    <div class="col-md-6 center-block espacio_abajo">
        <button class="espacio_arriba1 negro col-md-6 center-block "><a href="index.html">Regresar</a></button>
    </div>  
</div>
</body>
</html>



    
    
    
    
    
    
    
    
    
