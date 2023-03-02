<?php

    $cons_usuario="root";
    $cons_contra="";
    $cons_base_datos="blogselene";
    $cons_equipo="localhost";
    
    $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
    $acentos = $obj_conexion ->query("SET NAMES 'utf8'");
    
   
?>	