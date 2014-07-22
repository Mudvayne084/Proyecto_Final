<?php
  
  include ('../../libs/security.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php');
  include ('../../controllers/ArticuloController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
 

  $articuloC = new ArticuloController();

  if(isset($_POST['nombre'])){
    
    $articuloC->insertaArticulo($_POST,$_FILES);
  }

?>

   <div class="container"><!--inicio de container-->
  <div class="row"><!--inicio de row 1-->
        
		<?php
				if($articuloC->muestra_errores){			
			?>	
			
			<div class="alert alert-danger">
				<?php
					foreach($articuloC->errores as $value)
					{
						echo "<p>error: $value</p>";
					}
				?>
			</div>
			
			<?php
				}			
			?>
        <div class="col-md-4"><!--inicio de col 2-->
        
		
          <div id="" class="">
              <form role="form" id="id_form_articulo" action="" method="POST" ENCTYPE="multipart/form-data">
                 <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Enter nombre" value="<?php echo $articuloC->get_nombre(); ?>">
                </div>
                <div class="form-group">
                  <label for="resumen">Resumen:</label>
                  <textarea rows="8" cols="" class="form-control" name="resumen" placeholder="Enter resumen" value="<?php echo $articuloC->get_resumen(); ?>"></textarea>
                </div>
                <div class="form-group">
                  <label for="abstract">Abstract:</label>
                  <textarea rows="5" cols="" class="form-control" name="abstract" placeholder="Enter abstract" value="<?php echo $articuloC->get_abstract(); ?>"></textarea>
                </div>
                <div class="form-group">
                  <label for="introduccion">Introducci&oacute;n:</label>
                  <textarea rows cols="" class="form-control" name="introduccion" placeholder="Enter introduccion" value="<?php echo $articuloC->get_introduccion(); ?>"></textarea>
                </div>
                <div class="form-group">
                  <label for="metodologia">Metodolog&iacute;a:</label>
                  <textarea rows="6" cols="" class="form-control" name="metodologia" placeholder="Enter metodologia" value="<?php echo $articuloC->get_metodologia(); ?>"></textarea>
                </div>
                <div class="form-group">
                  <label for="contenido">Contenido:</label>
                  <textarea rows="6" cols="" class="form-control" name="contenido" placeholder="Enter contenido" value="<?php echo $articuloC->get_contenido(); ?>"></textarea>
                </div>
				
				<label for="fecha_creacion">Fecha:</label>
                    <div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" id="fecha_creacion" name="fecha_creacion" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
					</div> <br>
                
                <div class="form-group">
                      <label for="archivo_pdf">Archivo:</label>
                      <input type="file" id="archivo_pdf" name="archivo_pdf">
                      <p class="help-block">Seleccione un archivo PDF.</p>
                </div>
                <div class="form-group">                                
                        <label for="id_status">Id_status</label>
                        <?php echo $articuloC->getDropDown('status', 'id_status', 'id_status'); ?>
                        </select>                          
                    </div>
                <div class="form-group">
                  <label for="conclusiones">Conclusiones:</label>
                  <textarea rows="5" cols="" class="form-control" name="conclusiones" placeholder="Enter conclusiones" value="<?php echo $articuloC->get_conclusiones(); ?>"></textarea>
                </div>
                <div class="form-group">
                  <label for="agradecimientos">Agradecimientos:</label>
                  <input type="text-area" class="form-control" name="agradecimientos" placeholder="agradecimientos" value="<?php echo $articuloC->get_agradecimientos(); ?>">
                </div>
                <div class="form-group">
                  <label for="referencias">Referencias:</label>
                  <input type="text-area" class="form-control" name="referencias" placeholder="Enter referencias" value="<?php echo $articuloC->get_referencias(); ?>">
                </div>
                <left><input type="submit" class="btn btn-primary" id="aceptar3" value="aceptar"></button><left>
              </form><br><br>
				<div>
					<button  class="ejemplo" class="btn btn-primary" href="vista6.php"  type="button" >
						<span class="glyphicon glyphicon-eye-open"></span> Ver Tabla
					</button>	
				</div>
			  
          </div>

          <!--fin de form integrante-->
    </div>
  </div><!--Fin de row 1-->
  </div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>