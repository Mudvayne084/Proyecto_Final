<?php
include ('../../libs/security.php');
include ('../../libs/adodb5/adodb-pager.inc.php');
include ('../../libs/adodb5/adodb.inc.php');
include ('../../models/Conexion.php');
include ('../../models/Modelo.php');
include ('../../models/Articulo_Autor.php');
include ('../../controllers/Articulo_AutorController.php');
include ('../../libs/Er.php');
include ('../layouts/header.php');


$articulo_autorC = new Articulo_AutorController();
if (isset($_POST['id_articulo'])) {

    
    $articulo_autorC->insertaArticulo_Autor($_POST);
}
?>

<div class="container"><!--inicio de container-->
    <div class="row" id="id_rev"><!--inicio de row 1-->

        <div class="col-md-4"><!--inicio de col 2-->
            
            <!--inicio de form integrante-->
            
                <form role="form" id="id_form_revista" action="" method="POST">

                    <div class="form-group">                                
                        <label for="id_articulo">Id_Articulo</label>
                        <?php echo $articulo_autorC->getDropDown('articulo', 'id_articulo', 'id_articulo'); ?>
                        </select>                          
                    </div>

                    <div class="form-group">                                
                        <label for="id_autor">Id_Autor</label>
                        <?php echo $articulo_autorC->getDropDown1('autor', 'id_autor', 'id_autor'); ?>
                        </select>                          
                    </div>
                   <input type="submit" class="btn btn-primary" id="aceptar3" value="aceptar"></button>
                </form><br><br>
				
				<div>
					<button  class="ejemplo" class="btn btn-primary" href="vista4.php"  type="button" >
						<span class="glyphicon glyphicon-eye-open"></span> Ver Tabla
					</button>	
				</div>

            
        </div>
    </div><!--Fin de row 1-->
</div><!--fin de container-->

<?php include ('../layouts/footer.php'); ?>