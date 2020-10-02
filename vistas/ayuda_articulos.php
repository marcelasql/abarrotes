<!--Lo que ve el usuario, campos, el formulario-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ayuda Articulos</title>
        
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
        <br><h2>AYUDA ARTICULOS</h2><br>
        </center>

<div class="container">  
    <div class="row"> 
  <div class="panel">
      <div class="panel panel-heading">MANTENEDOR ARTICULO</div>
            <div class="panel-body"><br>
                            
                <p class="card-text">
                    El Mantenedor de Artículos tiene como objetivo, insertar,
                    consultar, modificar y eliminar artículos. 

                    Los datos requeridos son:<br>
                    Codigo : debe ser único.<br><br>
                    Nombre : Corresponde  a la descripción del artículo.<br><br>
                    Cantidad : corresponde a la cantidad de artículos que está ingresando.
                    mínimo 1 maximo 1.000.000(por espacio en bodega).<br><br>
                    Precio : corresponde al precio venta del artículo.
                    mínimo 1 máximo 1.000.000.<br><br>
                    Fecha Vencimiento :  La fecha ingresada debe ser mayor a la fecha actual.No
                    permite ingresar productos vencidos. <br><br>

                    <!--Botones: <br>-->
                    <h6 style="color:green">Botones</h6>
                    Guardar Artículos : Permite registrar las datos ingresados en pantalla.<br>
                    Consultar Artículos : Permite mostrar todos los artículos registrados.En está pantalla 
                    puede realizar las siguientes acciones:<br>     
                     <h7 style="color:blue">Editar:</h7><br>      
                            Podrá visualizar el producto y modificarlo si es necesario.<br>
                     <h8 style="color:red">Eliminar:</h8>         
                            Podrá eliminar el artículo seleccionado.<br>
                    Atrás: Permite volver al menú principal.<br>
                </p>
            </div>
        </div>

  </div> 
</div> 

    </body>
</html>
