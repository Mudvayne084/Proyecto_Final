<?php 
  define('BASEURL','http://localhost/final');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase programación web verano</title>

    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../source/jquery.fancybox.css" type="text/css" media="screen"/>
    <link rel="icon" href="../favicon.ico">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/mycss.css" rel="stylesheet">
  </head>

  <body role="document" style="background-image:url(../img/fondo.png); background-attachment:fixed; background-repeat:no-repeat; background-position:center center;">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">REVISTA ITC <span class="glyphicon glyphicon-list-alt"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Inicio</a></li>
            
            <!--Lista de forms de barra-->
            <?php if(isset($_SESSION['user'])){ ?><!--Si el usuario no esta logeado no podra visualizar este menu-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formularios <b class="caret"></b></a>
              <ul class="dropdown-menu">
								<li><a href="../site/inicio.php"><img src="../img/logo.png"></a></li>
								<li><a href="../autor/autor.php">Autor</a></li>
								<li><a href="../status/status.php">Status</a></li>
								<li><a href="../indice/indice.php">Indice</a></li>
								<li><a href="../indice_articulo/indice_articulo.php">Indice Articulo</a></li>
								<li><a href="../articuloautor/articuloautor.php">Articulo Autor</a></li>					
								<li><a href="../revista/revista.php">Revista</a></li>
								<li><a href="../articulo/articulo.php">Articulo</a></li>
                
              </ul>
            </li>
             <!--fin de Lista de forms de barra-->
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
          </ul>      
          <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-print"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-comment"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-globe"></span></a></li>
        
        <?php } ?>
      </ul>
      
		<ul class="nav navbar-nav navbar-right">
          <?php if(!isset($_SESSION['user'])){ ?>
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
            <?php }else{ ?>
          <li><a href="<?php echo BASEURL; ?>/views/site/logout.php">
              <span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </li>
          </ul>
          <?php } ?>

		  
		  
		 <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vistas <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../site/inicio.php"><img src="../img/logo.png"></a></li>
			<li class="divider"></li>
			<li><a  class="ejemplo" href="../autor/vista.php">Autor</a></li>
			<li><a class="ejemplo" href="../status/vista3.php">Status</a></li>
			<li><a class="ejemplo" href="../indice/vista1.php">Indice</a></li>
			<li><a class="ejemplo" href="../indice_articulo/vista2.php">Indice Articulo</a></li>
			<li><a class="ejemplo" href="../articuloautor/vista4.php">Articulo Autor</a></li>					
			<li><a class="ejemplo" href="../revista/vista5.php">Revista</a></li>
			<li><a class="ejemplo" href="../articulo/vista6.php">Articulo</a></li>
            <li class="divider"></li>
            <li><a href="#">Otras secciones</a></li>
          </ul>
        </li>       
      </ul> 
		  
		 		  
		  
		  
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container theme-showcase" role="main"><br><br>
