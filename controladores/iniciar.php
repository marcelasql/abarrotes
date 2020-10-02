<?php
/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */ 
 $host="mysql.webcindario.com";
$user= "abarroteschile";// 
$password="Chely111";// 
$db="abarroteschile";
$conexion = new mysqli($host,$user,$password,$db);

    $sql1= "select alias from tb_usuarios where alias = '".(htmlentities($_POST["alias"]))."'";
    $query = $conexion->query($sql1);
    $nmyusuario=$query->num_rows;
    
    //Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario... 
    if($nmyusuario != 0){    
      
        $sql = "select alias, idrol from tb_usuarios where alias= '".(htmlentities($_POST["alias"]))."' "
        ."and clave = '".(htmlentities($_POST["clave"]))."' ";
    
        $myclave = $conexion->query($sql);
        $nmyclave = $myclave->num_rows;
    
        //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
        if($nmyclave != 0){
    
            @session_start(); 
            //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
            $r=$myclave->fetch_array();
            $_SESSION["autentica"] = "sip"; 
            $_SESSION["alias"]=$r["alias"];
            $_SESSION["idrol"]=$r["idrol"];
            //nombre del usuario logueado. 
            //Direccionamos a nuestra página principal del sistema. 
            
            header ("Location:../vistas/menu.php");
        }
    
        else{ 
            print "<script>alert('La clave o el tipo de usuario no es correcto.'); "
            . "window.location.href=\"../vistas/creo_login.php\"</script>";}      
    }
    else{ 
        print "<script>alert('El usuario no existe.'); window.location.href=\"../vistas/creo_login.php\"</script>";}
        
    $conexion->close();
?>