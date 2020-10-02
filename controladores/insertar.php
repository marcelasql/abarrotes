<!--Esto sirve para capturar los datos del formulario-->
<?php
include '../modelo/crud.php';

if(!empty($_POST['codigo'])&&
   !empty($_POST['nombre'])&&
   !empty($_POST['cantidad'])&&
   !empty($_POST['precio'])&&
   !empty($_POST['fecha']))
 {
    
    $conecto=new crud();
    $conecto->conectar();
    date_default_timezone_set("America/Santiago");
     
    if(!$conecto){
        print "<script>alert('Error, no se conectó con BD'); "
    . "window.location.href=\"../vistas/creo_articulos.php\"</script>";    
    }
     else{

        $codigo=$_POST['codigo'];
        $nombre=$_POST['nombre'];
        $cantidad=$_POST['cantidad'];
        $precio=$_POST['precio']; 
        $fecha=$_POST['fecha']; 
       
    //Inicio valida fecha
    $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
    $ingreso=$fecha;
    $fecha_entrada = strtotime($ingreso);

  
     if($fecha_actual > $fecha_entrada)
     {
        
        print "<script>alert(\"la fecha ingresada debe ser superior a la fecha actual.\");"
                 ."window.location='../vistas/creo_articulos.php';"
                 ."</script>";
        
     }else
     { 
        $primary="codigo";
        $infopk=$codigo;
        $tabla="articulos";
        $fecha_actual=date('Y-m-d H:i:s');
        //$values=$codigo.",'".$nombre."', ".$cantidad.", ".$precio.", '".$fecha."'"; //Comento Marcela
        $values=$codigo.",'".$nombre."', ".$cantidad.", ".$precio.", '".$fecha."','".$fecha_actual."'";
        $rta=$conecto->insertar($primary,$infopk,$tabla,$values);
        
        //INICIO BITACORA ////////////////////////////////////////////////////////////////////////
        //que puede recibir: guardo, error, existe
        
        if($rta=="guardo"){
            $rta="Exito, Registró el Articulo";
            
            //id, usuario,fechahora, accion,registroafectado
             $id="null";
             @session_start();
             $usuario=$_SESSION["alias"];
             echo "<script>alert(".$usuario.")</script>";
             $fechahora=$fecha_actual;
             $accion="Insertado";
             $registroafectado=$nombre;
             $values=$id.", '".$usuario."', '".$fechahora."', '".$accion."', '".$registroafectado."'";
             
             $rtx=$conecto->registro_bitacora($values);
        }
        else if($rta=="error"){
            $rta="Error, Problema en la instrucción";
        }
        else{
            $rta="Error, Articulo ya Existe";
        }
        
        //FIN BITACORA ////////////////////////////////////////////////////////////////////////////
        
        print "<script>alert('".$rta."');"
                 ."window.location='../vistas/creo_articulos.php';"
                 ."</script>";
        
     }
 
      
 }
//fin conecto a base de datos
}
else
{
    print "<script>alert('Error, campos vacios'); "
    . "window.location.href=\"../vistas/creo_articulos.php\"</script>";
}

?>