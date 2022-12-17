<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CB | Nuevo Retiro</title>
	
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">

    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="./css/normalize.css">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="./css/sweetalert2.min.css">

    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="./js/sweetalert2.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">

    <!-- General Styles -->
    <link rel="stylesheet" href="./css/style.css">


</head>


<body>
 
        <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO RETIRO
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quod harum vitae, fugit quo soluta. Molestias officiis voluptatum delectus doloribus at tempore, iste optio quam recusandae numquam non inventore dolor.
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="#" onclick="fnAjax('reservation-new.php?v=89234982734');"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO RETIRO</a>
                    </li>
                    <li>
                        <a href="#" onclick="fnAjax('reservation-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; PRODUCTOS LISTOS NO RETIRADOS</a>
                    </li>
                    <li>
                        <a href="#"onclick="fnAjax('reservation-search.php?v=89234982734');"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR RETIRO</a>
                    </li>
                    <li>
                        <a href="#" onclick="fnAjax('reservation-pending.php?v=89234982734');"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; PRODUCTOS NO RETIRADOS (30 días)</a>
                    </li>
                </ul>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
            	<div class="container-fluid form-neon">
                    <div class="container-fluid">
                        <form action="" autocomplete="off">
						<fieldset>
							<legend><i class="far fa-plus-square"></i> &nbsp; Información del retiro</legend>
							<div class="container-fluid">
								<div class="row">
                                    <div class="col-12 col-md-4">
									    <div class="form-group">
										    <label for="retiro_orden" class="bmd-label-floating">No. Orden</label>
										    <input type="text" class="form-control" name="retiro_orden" id="retiro_orden">
									    </div>
								    </div>
                                    <div class="col-12 col-md-8">
									    <div class="form-group">
										    <label for="retiro_nombre" class="bmd-label-floating">Cliente</label>
										    <input type="text" class="form-control" name="retiro_nombre" id="retiro_nombre" required>
									    </div>
								    </div>
                                    <div class="col-12 col-md-12">
									    <div class="form-group">
										    <label for="retiro_detalle" class="bmd-label-floating">Detalle de lo que se realizó</label>
										    <input type="text" class="form-control" name="retiro_detalle" id="retiro_detalle">
									    </div>
								    </div>
                                    <div class="col-12 col-md-4">
									    <div class="form-group">
										    <label for="retiro_total" class="bmd-label-floating">Total</label>
										    <input type="number" class="form-control" name="retiro_total" id="serv_total" required>
									    </div>
								    </div>
								    <div class="col-12 col-md-4">
									    <div class="form-group">
										    <label for="retiro_abono" class="bmd-label-floating">Abono</label>
										    <input type="number" class="form-control" name="retiro_abono" id="retiro_abono" required>
									    </div>
								    </div>
                                    <div class="col-12 col-md-4">
									    <div class="form-group">
										    <label for="retiro_debe" class="bmd-label-floating">Debe</label>
										    <input type="number" class="form-control" name="retiro_debe" id="retiro_debe" required>
									    </div>
								    </div>
                                    <div class="col-12 col-md-4">
									    <div class="form-group">
										    <label for="retiro_paga" class="bmd-label-floating">Paga</label>
										    <input type="number" class="form-control" name="retiro_paga" id="retiro_paga" required>
									    </div>
								    </div> 
								</div>
							</div>
						</fieldset>
						<br><br><br>
						<p class="text-center" style="margin-top: 40px;">
							<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
							&nbsp; &nbsp;
							<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; REGISTRAR</button>
						</p>
					    </form>
            	</div>
			</div>

	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>
    <script src="./js/jquery.validate.min.js"></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
    <!--Funcion AJAX-->
	<script src="js/funciones.js"></script>
</body>
</html>