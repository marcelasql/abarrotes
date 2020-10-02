<!--Lo que ve el usuario, campos, el formulario-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>creo bodeguero</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    
    <body>
    <?php 
   //Esta linea prohibe mostrar el formulario con trampa en el link sin iniciar sesion
   include("../controladores/seguridad.php");?>
   <!-- <form action="../controladores/insertar.php" method="POST">   -->
        <center>
        <br><h1 style="color:blue">ABARROTES CHILE</h1>
        <br><h2>CREAR BODEGUERO</h2><br>
        </center>
         
        <div class="container">  
            <div class="row"> 
                
            <div class="col-lg-6 col-sm-6 col-md-6"> 
                <label>Ingrese Rut:</label> 
                
                <input 
                    id="rut" 
                    name="rut" 
                    class="form-control" 
                    type="text" 
                    required="true"><br>
            </div> 
            
            <div class="col-lg-6 col-sm-6 col-md-6"> 
                <label>Ingrese Nombre</label>
                <input  id="nombre" name="nombre" class="form-control" type="text" required="true"><br>
            </div> 
            
            <div class="col-lg-6 col-sm-6 col-md-6"> 
                <label>Ingrese Celular:</label> 
                
                <input 
                    id="celular" 
                    name ="celular" 
                    class="form-control" 
                    type="number" 
                    required="true" ><br>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6">
                <label>Ingrese Turno:</label>
                
                <input 
                    id="turno" 
                    name="turno" 
                    class="form-control" 
                    type="text" 
                    required="true" ><br>
            </div>
            
            <div class="col-lg-6 col-sm-6 col-md-6">   
                <label>Ingrese sucursal:</label> 
                <input id="sucursal" name="sucursal" class="form-control" type="text"><br>
            </div>
                
                           
             <div class="col-lg-6 col-sm-6 col-md-6">
                 <br> 
                 <input 
                     style="text-align: center" 
                     class="btn btn-success btn-block" 
                     type="submit" 
                     value="Guardar Bodeguero">  
             </div>
           
                
                
           <div class="col-lg-6 col-sm-6 col-md-6">
                <center>
                    <a class="btn btn-block btn-info" href="menu.php">Atras</a>
                </center>
            </div>
            
        </div> 
      </div> 
    <!--   </form>    -->
        
    <center>
       <!-- <a class="btn btn-info" href="consulto_articulos.php">Consultar los articulos</a> -->
    </center>
    </body>
</html>
