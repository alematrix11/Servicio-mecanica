<?php
    
    $direccion = "ale.iorlano@gmail.com";
    
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $consulta = $_POST["consulta"];
        
    $contenido = "Correo: ".$email."\nCelular: ".$celular."\nConsulta: ".$consulta;

    mail($direccion,"Consulta",$contenido);

    header("Location:gracias.php");
    
?>