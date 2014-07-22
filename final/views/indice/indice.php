

<?php
	include ('../../libs/security.php');
	include('../../libs/adodb5/adodb-pager.inc.php');
	include('../../libs/adodb5/adodb.inc.php');
	include('../../models/Conexion.php');
	include('../../models/Modelo.php');
	include('../../models/Indice.php');
	include('../../controllers/IndiceController.php');
	include('../../libs/Er.php');
	include ('../layouts/header.php');	
	
	$indiceC = new IndiceController();
	if(isset($_POST['titulo'])){//exclusivo para imprimir arreglos, verifica que nombre tenga algo
	$indiceC->insertaIndiceController($_POST,$_FILES);//manda llamar la accion
	}
	
?>

	<div class="container">
		<div class="row">
			
			<?php
				if($indiceC->muestra_errores){			
			?>	
			
			<div class="alert alert-danger">
				<?php
					foreach($indiceC->errores as $value)
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
						<label for="titulo">Titulo:</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" required>
					</div>
					
					<div class="form-group">						
						<label for="numero">Numero:</label>
						<input type="text" class="form-control" id="numero" name="numero" placeholder="Numero de indice de articulo" required>
					</div>
					
					
					<div class="form-group">                                
                        <label for="id_revista">id_revista</label>
                        <?php echo $indiceC->getDropDown('revista','id_revista','id_revista');  ?>
						</select>                          
                    </div>
									
					
					
					<div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div><br><br>	
					
				</form>
				
				<div>
					<button  class="ejemplo" class="btn btn-primary" href="vista1.php"  type="button" >
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