<?php
include 'conexion.php';
            $numero=$_POST['NUM_FOR'];
            $nombre=$_POST['NOM_CLI'];
            $apellido=$_POST['APE_CLI'];
            $telefono=$_POST['TEL_CLI'];
            $correo=$_POST['COR_CLI'];
            $marca=$_POST['MAR_CLI'];
            $modelo=$_POST['MOD_CLI'];
            $clave=$_POST['CLA_BLO_CLI'];
            $descripcion=$_POST['DES_CLI'];
            $sqlInsert="INSERT INTO formularios(NUM_FOR, NOM_CLI, APE_CLI, TEL_CLI,
            COR_CLI, MAR_CLI, MOD_CLI, CLA_BLO_CLI, DES_CLI) VALUES ('$numero','$nombre','$apellido',
            '$telefono','$correo','$marca','$modelo','$clave', '$descripcion')";
            if($mysqli->query($sqlInsert)===TRUE)
            {
            echo "Datos Guardados Correctamente<br><a href='../../Formulario.php'>Volver</a>";
            }
            else
            {
            echo "Error:".$sqlInsert."<br>".$mysqli->error;
            echo  $sqlInsert;
            }
            $mysqli->close();
?>



