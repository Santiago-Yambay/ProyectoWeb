<?php

		include "views/modules/conexion.php"
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
	

	<body id="neworderm" class="bg-blue" >
	<?php

		include "api/navbar.php"
		 ?>

	<?php

			
	

	$query="SELECT MAX(NUM_FOR) FROM FORMULARIOS ";


	$buscarEstudiante=$conn->query($query);
	$result = mysqli_query($conn,$query);

	if($row = mysqli_num_rows($result) > 0){
	 while($row = mysqli_fetch_array($result)){

 	$numero= $row[0];
	
	}

}else{

  $result="No se encontraron marcas";
  
}


?>


		<div  class="body">
			<form id="formOrden" method="POST" action="http://localhost/PROYECTO ACS/ProyectoWeb/views/modules/acceso.php" id="sky-form" class="sky-form">
				<header>Orden de Servicio Técnico Nro:
					<label class="input">

					<input type="text" id="NUM_FOR" placeholder="<?php echo $numero + 1 ?>"></label></header>

				<fieldset>
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa-user"></i>
								<label for="NOM_CLI" style="display:none" class="text">Nombre</label>
								<input type="text" id="NOM_CLI" name="NOM_CLI" placeholder="Nombre" />
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa-user-o"></i>
								<label for="APE_CLI" style="display:none" class="text">Apellido</label>
								<input type="text" id="APE_CLI" name="APE_CLI" placeholder="Apellido" />
							</label>
						</section>
					</div>

					<div class="row">
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa-phone"></i>
								<label for="TEL_CLI" style="display:none" class="text">Telefono</label>
								<input type="tel" id="TEL_CLI" name="TEL_CLI" placeholder="Telefono" />
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa-envelope"></i>
								<label for="COR_CLI" style="display:none" class="text">Email</label>
								<input type="email" id="COR_CLI" name="COR_CLI" placeholder="Email" />
							</label>
						</section>
					</div>
				</fieldset>
				<fieldset>
					<div class="row">
						<section class="col col-6">
                 <label class="select">
								<label for="MAR_CLI" style="display:none" class="text">Marca</label>
								<select name="MAR_CLI" id="MAR_CLI">
									<option value="0" selected="" disabled="" />Marca
									<option value="apple" />Apple
									<option value="samsung" />Samsung
									<option value="toshiba" />Toshiba
									<option value="sony" />Sony
                  					<option value="huawei" />Huawei
                 					 <option value="hp" />Hp
								</select>
  						</label>
                        </section>
                        <section class="col col-6">
							<label class="input">
								<i class="icon-append fa-mobile"></i>
								<label for="MOD_CLI" style="display:none" class="text">Modelo</label>
								<input type="text" name="MOD_CLI" id="MOD_CLI" placeholder="Modelo" />
							</label>
                        </section>
            </div>
          <div class="row">
            <section class="col col-6">
							<label class="input">
								<i class="icon-append fa-lock"></i>
								<label for="CLA_BLO_CLI" style="display:none" class="text">Clave de bloqueo</label>
								<input type="text" name="CLA_BLO_CLI" id="CLA_BLO_CLI" placeholder="Clave de bloqueo" />
							</label>
						</section>
             </div>
          
             <div class="row">
					<section>
						<label class="textarea">
							<i class="icon-append icon-comment"></i>
							<label for="DES_CLI" style="display:none" class="text">Descripción</label>
							<textarea name="DES_CLI" id="DES_CLI" placeholder="Ingrese una descripcion" rows="3" cols="40"></textarea>
						</label>
					</section>

				</fieldset>
				<footer>
        			<input type="submit" value="Enviar">

				</footer>
			</div>
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
