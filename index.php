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
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
      <div class="carousel-inner">
        <div class="active item"><img  src="img/bg-blue.jpg"/></div>
        <div class="item"><img  src="img/bg-blue.jpg" /></div>
        <div class="item"><img  src="img/bg-blue.jpg"  /></div>
        <div class="item"><img  src="img/bg-blue.jpg"  /></div>
        <div class="item"><img   src="img/bg-blue.jpg" /></div>
      </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>
<div id="nosotros">
  <div class="container">
  <div class="row-fluid">
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <img class="img-circle" src="img/nosotros.jpg" alt="Responsive imagen">
      <h2>TEXTO</h2>
      <p>TEXTO</p>
      <p><a class="btn btn-default" href="#" role="button">Ver mas &raquo;</a></p>
    </div><!-- /.col -->
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <img class="img-circle" src="img/experiencia.jpg" alt="Generic placeholder image">
        <h2>TEXTO</h2>
        <p>TEXTO</p>
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

<div id="marketing" class="container">
  <div class="col-md-7">

    <h2 class="featurette-heading">Visita nuestra tienda online <span class="text-muted">Ingresa.</span></h2>
    <p class="lead">       </p>
  </div> <!-- col -->
  <div class="col-md-5">
    <img class="featurette-image img-responsive img-circle" src="img/laptop.jpg" alt="Generic placeholder image">
  </div> <!-- col -->
</div> <!-- container marketing -->

<hr class="featurette-divider">

<div id="marketing" class="container">
  <div class="col-md-7">
     <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div> <!-- col -->
  <div class="col-md-5">
    <h2 class="featurette-heading"> Te enviamos tus productos <br> <span class="text-muted">Servicio de entrega.</span></h2>
    <p class="lead">En nuestra tienda online tenemos nuestro propio servicio de entrega de productos, !Aprovecha! </p>
  </div> <!-- col -->
</div> <!-- container marketing2 -->

<div id="contacto" class="container">
  <div class="col-md-4 visible=col-xs visible=col-sm">
   
  </div>
  <div class="col-md-4 col-xs-12 col-sm-12">
  <div class="panel-body">
    <form action="" method="post" class="form-horizontal" role="form">
    <div class="form-group">
      <label  class="col-sm-4 control-label">Nombre</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="nombre" placeholder="Introduce tu nombre" required="required">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Apellidos</label>
      <div class="col-sm-8">
      <input type="text" class="form-control"  name="apellidos" placeholder="Introduce tus Apellidos">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Empresa</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="empresa" >
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Cargo</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="cargo">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Telefono</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  name="telefono" placeholder="Telefono de contacto">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">E-mail</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="e-mail"  placeholder="E-mail">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Comentarios</label>
      <div class="col-sm-8">
         <textarea class="form-control" placeholder="Escribeme tu comentario aquí" name="comment"></textarea><br />
      </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4"></label>
      <div class="col-sm-8">
        <input type="submit" class="btn btn-default" value="Contactenos">
      </div>
    </div>
    </form> 
  </div>
  </div>
  <div class="col-md-4"></div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

</body>
</html>