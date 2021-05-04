<?php

    $conexion = mysqli_connect("localhost","root","","medico");

    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];
    $v4 = $_POST['v4'];
    $v5 = $_POST['v5'];
    $v6 = $_POST['v6'];
    $v7 = $_POST['v7'];
    $v8 = $_POST['v8'];

    $sql = "INSERT into t_personas(nombre,apellido_paterno,apellido_materno,telefono,email,
    fecha_nacimiento,sexo,nacionalidad) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8')";
    $ejecutado = mysqli_query($conexion,$sql);

    if($ejecutado == 1){
        header('location:mostrar.php');
        echo "Exito";
    }else{
        echo "error";
    }


?>