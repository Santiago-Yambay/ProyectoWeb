<nav class="navbar navbar-default">
<div class="container-fluid">


<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>

<a class="navbar-brand" href="http://solucel.com.ar/app"><img src="img/logo.png"  style="width:45px; margin-top:-10px"></a>
</div>



<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
  <li><a href="index.php"><i class="fa fa-tv fa-fw" aria-hidden="true"></i> Inicio<span class="sr-only">(current)</span></a></li>
  <li><a href="buscar.php"><i class="fa fa-search fa-fw" aria-hidden="true"></i> Ordenes</a></li>
  <li><a href="formulario.php"><i class="fa fa-cart-plus fa-fw" aria-hidden="true"></i> Nueva Orden</a></li>
  <li><a href="recibos.php"><i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i> Recibos</a></li>
  <li><a href="panel.php"><i class="fa fa-th fa-fw" aria-hidden="true"></i> Panel de control</a></li>
  <li><a href="#" onclick="logout()"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Salir</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<script>
$(function () {
     $("#search a:contains('Ordenes')").parent().addClass('active');
     $("#formulario a:contains('Nueva Orden')").parent().addClass('active');
     $("#recibos a:contains('Recibos')").parent().addClass('active');
     $("#panel a:contains('Panel de control')").parent().addClass('active');

  });
</script>
