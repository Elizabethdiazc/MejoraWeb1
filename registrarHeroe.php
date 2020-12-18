<?php

    include("BaseDatos.php");

    if (isset($_POST["botonRegistrar"])) {

        $Nombre = $_POST["Nombre"]; 
        $superPoder = $_POST["superPoder"]; 
        $fotoURL = $_POST["fotoURL"];
        $Descripcion = $_POST["Descripcion"]; 

        $transaccion=new BaseDatos();
        
        $consultaSQL="INSERT INTO heroes(nombre,poder,foto,descripcion) VALUES ('$Nombre',' $superPoder','$fotoURL','$Descripcion')";  
        
        $transaccion->agregarHeroes($consultaSQL); 

    }

?> 