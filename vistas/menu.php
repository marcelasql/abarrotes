<!--Lo que ve el usuario, campos, el formulario-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>menu</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    
   
   <?php 
   //Esta linea prohibe mostrar el formulario con trampa en el link sin iniciar sesion
   include("../controladores/seguridad.php");?>
    
    <body>
    
    <form action="../controladores/insertar.php" method="POST">
        
        <center>
        <br><br>
        
        <div class="col-md-6 col-lg-6">
            <h1 style="color:blue">ABARROTES CHILE</h1></div> 
        <div class="col-md-6 col-lg-6">
            <a class="btn btn-info" href="../vistas/creo_login.php">Salir</a></div>
        
        <br><h2>MENU</h2>
       
        <br>
        </center>
         
        <div class="container">  
            <div class="row"> 
           
            <!--inicio opciones del menu-->  
            <!-- 
            Mantenedores	Contabilidad	   Auditoria
            1000)Artículos	6000)Flujo Caja	   7000)Consulta Bitacora
            2000)Proveedor		
            3000)Cliente		
            4000)Bodeguero		
            5000)Usuarios
            --> 
            
            <!--inicio Roles
            R: registrar, M: modificar, E: Eliminar, C: Consultar
            
                Roles                   ve                      Acciones (R,M,E,C)
            10: Administrador           Todo (1000 al 7000)         Todo
            20: Contador                solo 6000                   C
            30: Secretarias             1000,2000,4000,7000         Todo-E
          --> 
       
<?php if(($_SESSION["idrol"]==10)||($_SESSION["idrol"]==30)){?>             
<div class="card col-lg-3 col-md-3">
    
    <div class="card-body">
        <h5 class="card-title" 
            style="text-align: center">
            Mantenedores</h5>
        <p class="card-text alert-primary" style="text-align: center">
            Permiten la gestión (crear, editar, consultar, eliminar)
        </p>
        
        <?php if(($_SESSION["idrol"]==10)||($_SESSION["idrol"]==30)){?> 
        <a href="creo_articulos.php" class="btn btn-block btn-primary">Articulos</a><br><br>
         <a href="creo_proveedor.php" class="btn btn-block btn-primary">Proveedores</a><br><br>
        <a href="creo_bodeguero.php" class="btn btn-block btn-primary">Bodegueros</a><br><br>
        <?php } ?> 
        
        <?php if($_SESSION["idrol"]==10){?>
        <a href="creo_cliente.php" class="btn btn-block btn-primary">Clientes</a><br><br>
        <a href="creo_usuarios.php" class="btn btn-block btn-primary">Usuarios</a><br><br>
        <?php } ?> 
    </div>
</div>
<?php } ?> 

<?php if(($_SESSION["idrol"]==10)||($_SESSION["idrol"]==20)){?>             
           <!--inicio menú contabilidad-->
           <div class="card col-lg-3 col-md-3">
            <div class="card-body">
                <h5 class="card-title" 
                    style="text-align: center">
                    Contabilidad</h5>
                <p class="card-text alert-warning" style="text-align: center">
                    Permite acceder a información contable
                </p>
                <a href="consulto_flujocaja2.php" 
                   class="btn btn-block btn-warning">
                    Flujo Caja</a><br><br>
            </div>
            </div>
            <!--Fin menú contalilidad-->
<?php } ?> 
            
<?php if(($_SESSION["idrol"]==10)||($_SESSION["idrol"]==30)){?>
            <!--inicio menú bitacora-->
            <div class="card col-lg-3 col-md-3">
            <div class="card-body">
                <h5 class="card-title" 
                    style="text-align: center">
                    Auditoria</h5>
                <p class="card-text alert-success" style="text-align: center">
                    Permite acceder a información de auditoria
                </p>
                <a href="consulto_bitacoras.php" class="btn btn-block btn-success">
                    Bitacora</a><br><br>
            </div>
            </div>
            <!--Fin menú bitacora-->
<?php } ?> 
<?php if($_SESSION["idrol"]==10){?>            
            <!--inicio ayuda-->
            <div class="card col-lg-3 col-md-3">
            <div class="card-body">
                <h5 class="card-title" 
                    style="text-align: center">
                    Ayuda</h5>
                <p class="card-text alert-danger">
                    Información respecto a procesos que tenga dudas. 
                </p>
                <a href="../vistas/ayuda_articulos.php" 
                   class="btn btn-block btn-danger">Articulo</a><br>
                   
                <a href="../vistas/ayuda_proveedor.php" 
                   class="btn btn-block btn-danger">Proveedor</a><br>
                   
                <a href="../vistas/ayuda_bodeguero.php" 
                   class="btn btn-block btn-danger">Bodeguero</a><br>
                
                <a href="../vistas/ayuda_cliente.php" 
                   class="btn btn-block btn-danger">Cliente</a><br>
                   
                <a href="../vistas/ayuda_usuarios.php" 
                   class="btn btn-block btn-danger">Usuarios</a><br>
                            
               <a href="../vistas/ayuda_flujocaja.php" 
                  class="btn btn-block btn-danger">Flujo Caja</a><br>
                            
                <a href="../vistas/ayuda_bitacora.php" 
                   class="btn btn-block btn-danger">Bitácora</a><br>
            </div>
            </div>
            
            
            <!--Fin ayuda-->
<?php } ?>            
          
 <!--Rol Administrador o contador(ayuda):--> 
    <?php if($_SESSION["idrol"]==20){?>      
            <!--inicio ayuda-->
            <div class="card col-lg-3 col-md-3">
            <div class="card-body">
                <h5 class="card-title" 
                    style="text-align: center">
                    Ayuda</h5>
                <p class="card-text alert-danger">
                    Información respecto a procesos que tenga dudas. 
                </p>
                
                <a href="../vistas/ayuda_flujocaja.php" 
                   class="btn btn-block btn-danger">Flujo Caja</a><br>
                          
            </div>
            </div>
     <?php } ?>        
            
    <!--Rol Administrador o Secretaria (AYUDA):--> 
    <?php if($_SESSION["idrol"]==30){?>      
            <!--inicio ayuda-->
            <div class="card col-lg-3 col-md-3">
            <div class="card-body">
                <h5 class="card-title" 
                    style="text-align: center">
                    Ayuda</h5>
                <p class="card-text alert-danger">
                    Información respecto a procesos que tenga dudas. 
                </p>
                                  
                 <a href="../vistas/ayuda_articulos.php" 
                   class="btn btn-block btn-danger">Articulo</a><br>
                   
                <a href="../vistas/ayuda_proveedor.php" 
                   class="btn btn-block btn-danger">Proveedor</a><br>
                   
                <a href="../vistas/ayuda_bodeguero.php" 
                   class="btn btn-block btn-danger">Bodeguero</a><br>
                   
                <a href="../vistas/ayuda_bitacora.php" 
                   class="btn btn-block btn-danger">Bitácora</a><br>
                          
            </div>
            </div>
<?php } ?>                   
           
         
        </div>            
            
       </div> 
            
                    
       </form> 
    </body>
</html>
