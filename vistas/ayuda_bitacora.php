<!--Lo que ve el usuario, campos, el formulario-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ayuda Bitacora</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    
    <body>
    <?php 
   //Esta linea prohibe mostrar el formulario con trampa en el link sin iniciar sesion
   include("../controladores/seguridad.php");?>
    <!--<form action="../controladores/insertar.php" method="POST">-->
        <br> 
        <center>
        <br><h1 style="color:blue">ABARROTES CHILE</h1>
        <br><h2>AYUDA AUDITORIA / BITACORA</h2><br>
        </center>

<div class="container">  
    <div class="row"> 
  <div class="panel">
      <div class="panel panel-heading">AUDITORIA / BITACORA</div>
            <div class="panel-body"><br>
                            
                <p class="card-text">
                    La Auditoria / Bitacora, consiste en mostrar los procesos críticos 
                    que han ocurrido en el sistema. 

                    Los datos desplegados son:<br>
                    Id : Correlativo único.<br><br>
                    Alias : Nombre corto que identifica al usuario.<br><br>
                    Fecha Acción : Fecha en que ocurrió la acción.<br><br>
                    Acción : Insertar, modificar o eliminar<br><br>
                    Registro Afectado : Descripción del registro que ha sido insertado,  
                                       modificado o eliminado. <br><br>
                    <!--Botones: <br>-->
                    <h6 style="color:green">Botones</h6>
                    Atrás: Permite volver al menú principal.<br>
                </p>
            </div>
        </div>

  </div> 
</div> 

    </body>
</html>
