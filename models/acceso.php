
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: application/json');
include 'conexion.php';
$op=$_POST['op'];
if($op===null)
{
    echo "Error";
}
else{
switch($op)
{
        case 'insertarAlumno':
            header('Content-Type: application/json');
            $cedula=$_POST['CED_EST'];
            $nombre=$_POST['NOM_EST'];
            $apellido=$_POST['APE_EST'];
            $direccion=$_POST['DIR_EST'];
            $telefono=$_POST['TEL_EST'];
            $sexo=$_POST['SEXO_EST'];
            $sqlInsert="INSERT INTO estudiantes(CED_EST,NOM_EST,APE_EST,DIR_EST,TEL_EST,SEXO_EST) VALUES ('$cedula','$nombre','$apellido','$direccion','$telefono','$sexo')";
            if($mysqli->query($sqlInsert)===TRUE)
            {
            echo json_encode("Se guardo correctamente");
            echo $sqlInsert;
            }
            else
            {
            echo "Error:".$sqlInsert."<br>".$mysqli->error;
            echo  $sqlInsert;
            }
            $mysqli->close();
        break;
        
            case 'updateMarca':
                header('Content-Type: application/json');
                $codigo=$_POST['MAR_CODIGO'];
                $nombre=$_POST['MAR_NOMBRE'];
                $sqlUpdate="UPDATE marca SET MAR_NOMBRE = '$nombre' WHERE MAR_CODIGO = $codigo";
                if($mysqli->query($sqlUpdate)===TRUE)
                {
                echo json_encode("Se actualizo correctamente");
                }
                else
                {
                echo "Error:".$sqlUpdate."<br>".$mysqli->error;
                }
                $mysqli->close();
            break;

            case 'deleteMarca':
                header('Content-Type: application/json');
                $codigo=$_POST['MAR_CODIGO'];
                if(isset($codigo)){
                $sqlDelete="DELETE FROM marca WHERE MAR_CODIGO = $codigo";
                 $resultado= $mysqli->query($sqlDelete);
                 echo json_encode(array("correcto" => $resultado));
            }
              
            break;
}
}

?>


