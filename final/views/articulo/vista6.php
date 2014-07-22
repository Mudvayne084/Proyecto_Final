<html lang="en">
  <head>
    <meta charset="utf-8">
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <link rel="stylesheet" href="../source/jquery.fancybox.css" type="text/css" media="screen"/>
        <link rel="icon" href="../favicon.ico">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />
        
  </head>

  <body role="document" style="background-image:url(../img/fondo.png); background-attachment:fixed; background-repeat:no-repeat; background-position:center center;">

	<?php
	include ('../../libs/adodb5/adodb-pager.inc.php');
	include ('../../libs/adodb5/adodb.inc.php');
	include ('../../models/Conexion.php');
	include ('../../models/Modelo.php');	  
	include ('../../models/Articulo.php');
	include ('../../controllers/ArticuloController.php');
	include ('../../libs/Er.php');
	
 

  $articuloC = new ArticuloController();

  if(isset($_POST['nombre'])){
    
    $articuloC->insertaArticulo($_POST,$_FILES);
  }

?>
	
		<h2 class="text-center">Articulos</h2>
		<?php $articuloC->show_grid(); ?>       

<?php include ('../layouts/footer.php'); ?>