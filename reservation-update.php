<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Actualizar retiro</title>

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
                    <i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR RETIRO
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quod harum vitae, fugit quo soluta. Molestias officiis voluptatum delectus doloribus at tempore, iste optio quam recusandae numquam non inventore dolor.
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="#" onclick="fnAjax('reservation-new.php?v=89234982734');"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO RETIRO</a>
                    </li>
                    <li>
                        <a href="#" onclick="fnAjax('reservation-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; PRODUCTOS LISTOS NO RETIRADOS</a>
                    </li>
                    <li>
                        <a href="#"onclick="fnAjax('reservation-search.php?v=89234982734');"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR RETIRO</a>
                    </li>
                    <li>
                        <a href="#" onclick="fnAjax('reservation-pending.php?v=89234982734');"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; PRODUCTOS NO RETIRADOS (30 d??as)</a>
                    </li>
                </ul>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
            	<div class="container-fluid form-neon">
                    <div class="container-fluid">
                        <div>
                            <span class="roboto-medium">CLIENTE:</span> 
                            &nbsp; Carlos Alfaro
                        </div>
                        <div class="table-responsive">
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr class="text-center roboto-medium">
                                        <th>ITEM</th>
                                        <th>CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" >
                                        <td>NOMBRE DEL ITEM</td>
                                        <td>7</td>
                                    </tr>
                                    <tr class="text-center" >
                                        <td>NOMBRE DEL ITEM</td>
                                        <td>9</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
					<form action="" autocomplete="off">
						<fieldset>
							<legend><i class="far fa-plus-square"></i> &nbsp; Informaci??n del prestamo</legend>
							<div class="container-fluid">
								<div class="row">
									<div class="col-12 col-md-4">
										<div class="form-group">
											<label for="prestamo_fecha_inicio">Fecha de reserva</label>
											<input type="date" class="form-control" readonly="" id="admin-dni">
										</div>
									</div>
									
									<div class="col-12 col-md-4">
										<div class="form-group">
											<label for="prestamo_fecha_final">Fecha de entrega</label>
											<input type="date" class="form-control" readonly="" id="prestamo_fecha_final">
										</div>
									</div>
									<div class="col-12 col-md-4">
	                                    <div class="form-group">
	                                        <label for="prestamo_estado" class="bmd-label-floating">** Estado **</label>
	                                        <select class="form-control" name="item_estado" id="item_estado">
	                                            <option value="" selected="" disabled="">Seleccione una opci??n</option>
	                                            <option value="Prestamo">Pr??stamo</option>
	                                            <option value="Reservacion">Reservaci??n</option>
	                                            <option value="Finalizado">Finalizado</option>
	                                        </select>
	                                    </div>
	                                </div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label for="prestamo_total" class="bmd-label-floating">Total a pagar</label>
											<input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" id="prestamo_total" maxlength="10">
										</div>
									</div>
	                                <div class="col-12 col-md-6">
	                                    <div class="form-group">
	                                        <label for="prestamo_pagado" class="bmd-label-floating">Total depositado</label>
	                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" id="prestamo_pagado" maxlength="10">
	                                    </div>
	                                </div>
	                                <div class="col-12">
	                                    <div class="form-group">
	                                        <label for="prestamo_observacion" class="bmd-label-floating">** Observaci??n **</label>
	                                        <input type="text" pattern="[a-zA-z0-9????????????????????????#() ]{1,400}" class="form-control" name="prestamo_observacion" id="prestamo_observacion" maxlength="400">
	                                    </div>
	                                </div>
								</div>
							</div>
						</fieldset>
						<br><br><br>
						<p class="text-center" style="margin-top: 40px;">
							<button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
						</p>
					</form>
            	</div>
			</div>

	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

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