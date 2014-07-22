
<?php
	include ('../../libs/security.php');
	include('../../libs/adodb5/adodb-pager.inc.php');
	include('../../libs/adodb5/adodb.inc.php');
	include('../../models/Conexion.php');
	include('../../models/Modelo.php');
	include('../../models/Indice_articulo.php');
	include('../../controllers/Indice_articuloController.php');
	include('../../libs/Er.php');
	include ('../layouts/header.php');
	
	$indice_articuloC = new Indice_articuloController();

	if(isset($_POST['id_indice'])){//exclusivo para imprimir arreglos, verifica que nombre tenga algo
	$indice_articuloC->insertaIndice_articuloController($_POST,$_FILES);//manda llamar la accion
	}
	
?>

	<div class="container">
		<div class="row">
			
			<?php
				if($indice_articuloC->muestra_errores){			
			?>	
			
			<div class="alert alert-danger">
				<?php
					foreach($indice_articuloC->errores as $value)
					{
						echo "<p>error: $value</p>";
					}
				?>
			</div>
			
			<?php
				}			
			?>
		
		
			<div class="col-md-4">					 
				<form id="id_revista" method="post" action=""  role="form">
					
					<div class="form-group">                                
                        <label for="id_indice">id_Indice</label>
                        <?php echo $indice_articuloC->getDropDown('indice','id_indice','id_indice');  ?>
						</select>                          
                    </div>
					
					<div class="form-group">                                
                        <label for="id_articulo">id_articulo</label>
                        <?php echo $indice_articuloC->getDropDown1('articulo','id_articulo','id_articulo');  ?>
						</select>                          
                    </div>
					
					<div class="form-group">						
						<label for="numero">Numero:</label>
						<input type="text" class="form-control" id="numero" name="numero" placeholder="Numero de indice de articulo" required>
					</div>
					
					<div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div><br><br>	
					
				</form>
				
				<div>
					<button  class="ejemplo" class="btn btn-primary" href="vista2.php"  type="button" >
						<span class="glyphicon glyphicon-eye-open"></span> Ver Tabla
					</button>	
				</div>
				
			</div>
			
			
				
		</div>
		<div>
			<ul class="pager">
				<li><a href="#">Anterior</a></li>
				<li><a href="#">Siguiente</a></li>
			</ul>
		</div>		
	</div>


      
<?php include ('../layouts/footer.php'); ?>