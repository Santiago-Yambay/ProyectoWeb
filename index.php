<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/codigo.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/holder.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/carousel-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/footer-sticky.css">

  <script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="https://use.fontawesome.com/ef241c16b6.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="js/funciones.js"></script>



  <title></title>
</head>
<body>
<div id="contenedor" >

    <?php
		include "api/navbar.php"
		 ?>
  
  <div id="myCarousel" class="carousel slide " data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      

    </ol>
      <div class="carousel-inner">

        <div class="active item"><img  src="img/2.png"/></div>
        <div class="item"><img  src="img/1.png"  /></div>
        <div class="item"><img   src="img/3.jpg" /></div>


      </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"  ></span><img src="img/fn.png" /></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>
<div id="nosotros">
  <div class="container">
  <div class="row-fluid">
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

  

      <img class="img-circle" src="img/compu.png" alt="Responsive imagen">
      <h2>COMPUTADORAS</h2>
      <p>DE CUALQUIER MARCA</p>
      

    </div><!-- /.col -->
  
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <img class="img-circle" src="img/servicios.jpg" alt="Generic placeholder image">
        <h2>TEXTO</h2>
        <p> TEXTO      </p>
        <p><a class="btn btn-default" href="index2.php" role="button">Ver productos &raquo;</a></p>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div>
</div> <!-- /.container -->








</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

</body>
</html>