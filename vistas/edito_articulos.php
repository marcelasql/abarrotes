<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edito Articulos</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php 
   //Esta linea prohibe mostrar el formulario con trampa en el link sin iniciar sesion
   include("../controladores/seguridad.php");?>
        
         <?php
        include '../modelo/crud.php';
        $conecto=new crud();
        $conecto->conectar();
    
    if(isset($_GET["codigo"]))
    {
        $id=$_GET["codigo"];
        $tabla="articulos";
        $query = $conecto->consultar_uno($tabla,$id);
        
        $person = null;

        if($query->num_rows>0)
        {   
            while ($r=$query->fetch_object())
            {
                $person=$r;
                break;
            }
        }
?>
        
<?php if($person!=null):?>

        <form role="form" method="POST" action="../controladores/editar.php">
        <center>
        <br><h1 style="color:blue">ABARROTES CHILE</h1>
        <br><h2>EDITO ARTICULOS</h2><br>
        </center>
            
        <div class="container">
        <div class="form-group">
            <label for=codigo>codigo</label>
            <input 
                value="<?php echo $person->codigo; ?>"
                hidden="true"
                name="codigo"
                id="codigo">
            
            <input 
                value="<?php echo $person->codigo; ?>"
                type="number"
                class="form-control" 
                required
                readonly="true"
            >
        </div>
    
        <div class="form-group">
            <label for=nombre>Nombre</label>
            <input 
                type="text"
                class="form-control" 
                value="<?php echo $person->nombre; ?>" 
                name="nombre" required
                id="nombre"
            >
        </div>
        
        <div class="form-group">
            <label for=cantidad>cantidad</label>
            <input 
                type="number"
                class="form-control" 
                value="<?php echo $person->cantidad; ?>" 
                name="cantidad" required
                id="cantidad"
            >
        </div>
        
        <div class="form-group">
            <label for=precio>precio</label>
            <input 
                type="number"
                class="form-control" 
                value="<?php echo $person->precio; ?>" 
                name="precio" required
                id="precio"
            >
        </div>
        
              
        <button 
            type="submit" 
            class="btn btn-sm btn-block btn-success">
            Actualizar
        </button>
        
        <a class="btn btn-sm btn-block btn-info"
           href='../vistas/consulto_articulos.php'>Atras</a>
        </div>
    </form>

    <?php else:?>
    <p class="alert alert-danger">404 No se encuentra</p>
    <?php endif;
    }
?>
        
    </body>
</html>
