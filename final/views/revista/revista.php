
<?php
include ('../../libs/security.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

      $revistaC = new RevistaController();
   
  if(isset($_POST['nombre'])){
    
    $revistaC->insertaRevista($_POST,$_FILES);
  }

?>

   <div class="container"><!--inicio de container-->
  <div class="row" id="id_rev"><!--inicio de row 1-->
        
		<?php
			if($revistaC->muestra_errores){			
		?>	
			
			<div class="alert alert-danger">
				<?php
					foreach($revistaC->errores as $value)
					{
						echo "<p>error: $value</p>";
					}
				?>
			</div>
			
		<?php
			}			
		?>
		
        <div class="col-md-4"><!--inicio de col 2-->
        <div class="d1"><!--div 1-->
			
        </div><!--div 1-->
          <!--inicio de form integrante-->
          <div id="" class="">
              <form role="form" id="id_form_revista" action="" method="POST" ENCTYPE="multipart/form-data">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Enter nombre" value="<?php echo $revistaC->get_nombre(); ?>">
                </div>
                <div class="form-group">
                      <label for="portada">Portada:</label>
                      <input type="file" id="portada" name="portada">
                      <p class="help-block">Seleccione un archivo.</p>
                </div>
				
				
					<label for="fecha">Fecha:</label>
                    <div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" id="fecha" name="fecha" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
					</div> <br>
                
                <div class="form-group">
                  <label for="volumen">Volumen:</label>
                  <input type="text" class="form-control" name="volumen" placeholder="Enter volumen" value="<?php echo $revistaC->get_volumen(); ?>">
                </div>
                <div class="form-group">
                  <label for="titulo">Titulo:</label>
                  <input type="text" class="form-control" name="titulo" placeholder="Enter titulo" value="<?php echo $revistaC->get_titulo(); ?>">
                </div>
                <div class="form-group">
                  <label for="subtitulo">Subtitulo:</label>
                  <input type="text" class="form-control" name="subtitulo" placeholder="Enter subtitulo" value="<?php echo $revistaC->get_subtitulo(); ?>">
                </div>
                <div class="form-group">
                  <label for="numero">Numero:</label>
                  <input type="text" class="form-control" name="numero" placeholder="Enter numero" value="<?php echo $revistaC->get_numero(); ?>">
                </div>
                <div class="form-group">
                  <label for="clave">Clave:</label>
                  <input type="text" class="form-control" name="clave" placeholder="Enter clave" value="<?php echo $revistaC->get_clave(); ?>">
                </div>
                <div class="form-group">
                  <label for="directorio">Directorio:</label>
                  <textarea rows="5" cols="" class="form-control" name="directorio" placeholder="Enter directorio" value="<?php echo $revistaC->get_directorio(); ?>"></textarea>
                </div>
                <div class="form-group">
                  <label for="editorial">Editorial:</label>
                  <textarea rows="5" cols="" class="form-control" name="editorial" placeholder="Enter editorial" value="<?php echo $revistaC->get_editorial(); ?>"></textarea>
                </div>
				
                <div class="form-group">                                
                        <label for="status">Status</label>
                        <?php echo $revistaC->getDropDown('status','id_status','id_status');  ?>
						</select>                          
                 </div>
				  
                <input type="submit" class="btn btn-primary" name="aceptar10" value="aceptar"></button>
              </form><br><br>
			  
				<div>
					<button  class="ejemplo" class="btn btn-primary" href="vista5.php"  type="button" >
						<span class="glyphicon glyphicon-eye-open"></span> Ver Tabla
					</button>	
				</div>
			  
          </div>
         
          <!--fin de form integrante-->
    </div>
  </div><!--Fin de row 1-->
  </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>