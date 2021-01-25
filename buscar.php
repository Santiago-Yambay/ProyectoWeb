<?php

include "views/modules/conexion.php";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Nueva orden</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

		<link rel="stylesheet" href="css/demo.css" />
		<link rel="stylesheet" href="css/sky-forms.css" />
		<link rel="stylesheet" href="css/sky-forms-blue.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/imprimir.css" media="print" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->

		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="https://use.fontawesome.com/ef241c16b6.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="js/funciones.js"></script>

		<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    </head>

	
	<body id="neworderm" class="bg-blue">




		<?php
		include "api/navbar.php"
		 ?>



		<?php

			$numero="";
			$nombre="";
			$apellido="";
			$telefono="";
			$correo="";
			$marca= "";
			$modelo="";
			$des="";
			
			$NUM_FOR = $_POST['NUM_FOR'];


			$query="SELECT * FROM FORMULARIOS WHERE NUM_FOR='$NUM_FOR'";


			$buscarEstudiante=$conn->query($query);
			$result = mysqli_query($conn,$query);

			if($row = mysqli_num_rows($result) > 0){
 			while($row = mysqli_fetch_array($result)){

			 $numero= $row[0];
			 $nombre= $row[1];
			 $apellido= $row[2];
			 $telefono= $row[3];
			 $correo= $row[4];
			 $marca= $row[5];
			 $modelo= $row[6];
			 $des= $row[9];
			 
				}

			}else{

			  $result="No se encontraron marcas";
			  
			}


		?>

		<div class="body">

		<form id="formBuscar" method="post" novalidate  action="" class="sky-form">
				<header>Buscar Orden de Servicio Técnico
					<label class="input">
					<input id="NUM_FOR" name="NUM_FOR"  required="true" placeholder="Ingrese el Nro. de la orden generada" style="width:100%" >
					

					</label>

					
					
					
					</header>
				

				<footer>
					
					<input type="submit" name="buscar" class="button" value="buscar" style="width:90px">	



            		<div><input name="text" label="APELLIDO: " class="sky-form" value="<?php echo $numero ?>" ></div>
           			<div><input name="text" class="sky-form" value="<?php echo $nombre ?>"></div>
            		<div><input name="text" class="sky-form" value="<?php echo $apellido ?>"></div>
            		<div> <input name="text" class="sky-form" value="<?php echo $telefono ?>"></div>
           			<div><input name="text" class="sky-form" value="<?php echo $correo ?>"></div>
           			<div> <input name="text" class="sky-form" value="<?php echo $marca ?>"></div>
					<div> <input name="text" class="sky-form" value="<?php echo $modelo ?>"></div>
					<div> <input name="text" class="sky-form" value="<?php echo $des ?>"></div>
            
				</footer>

				

			</form>
		</div>

	



		<script type="text/javascript">
			$(function()
			{
				// Datepickers
				$('#start').datepicker({
					dateFormat: 'dd.mm.yy',
					prevText: '<i class="icon-chevron-left"></i>',
					nextText: '<i class="icon-chevron-right"></i>',
					onSelect: function( selectedDate )
					{
						$('#finish').datepicker('option', 'minDate', selectedDate);
					}
				});
				$('#finish').datepicker({
					dateFormat: 'dd.mm.yy',
					prevText: '<i class="icon-chevron-left"></i>',
					nextText: '<i class="icon-chevron-right"></i>',
					onSelect: function( selectedDate )
					{
						$('#start').datepicker('option', 'maxDate', selectedDate);
					}
				});

				// Validation
				$("#sky-form").validate(
				{
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						phone:
						{
							required: true
						},
						interested:
						{
							required: true
						},
						budget:
						{
							required: true
						}
					},

					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name'
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						phone:
						{
							required: 'Please enter your phone number'
						},
						interested:
						{
							required: 'Please select interested service'
						},
						budget:
						{
							required: 'Please select your budget'
						}
					},

					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});
		</script>
	</body>
</html>
