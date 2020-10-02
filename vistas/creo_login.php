<!--Lo que ve el usuario, campos, el formulario-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingresando a Sistema</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    
    <body>
    
   <!-- <form action="../controladores/insertar.php" method="POST">   -->
        <center>
        <br><h1 style="color:blue">ABARROTES CHILE</h1>
        <br><h2>INICIO DE SESION</h2><br>
        </center>
         
        <div class="container">  
            <div class="row"> 
             
            <div class="col-lg-4 col-sm-4 col-md-4"></div>
            
            <div class="col-lg-4 col-sm-4 col-md-4"> 
            <form action="../controladores/iniciar.php" method="POST">
                <label>Ingrese Alias Usuario:</label> 
                
                <input 
                    id="alias" 
                    name="alias" 
                    class="form-control" 
                    type="text" 
                    required="true">
                <br><br>
            
                <label>Ingrese Clave </label>
                <input  id="clave" name="clave" class="form-control" 
                        type="password" required="true"
                        maxlength="10"><br>
            
                <center>
                    <input 
                        type="submit" 
                        value="Ingresar" 
                        class="btn btn-success btn-block"> 
                </center>
                </form> 
            </div> 
            <div class="col-lg-4 col-sm-4 col-md-4"></div>
        </div> 
      </div> 
    <!--   </form>    -->
    
    </body>
</html>
