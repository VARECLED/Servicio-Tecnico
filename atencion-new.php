<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CB | Nueva Atención de Equipo</title>
	
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
                    <i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA ATENCIÓN DE EQUIPOS
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque laudantium necessitatibus eius iure adipisci modi distinctio. Earum repellat iste et aut, ullam, animi similique sed soluta tempore cum quis corporis!
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="#" onclick="fnAjax('atencion-new.php?v=89234982734');"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA ATENCIÓN A EQUIPO</a>
                    </li>
                    <li>
                        <a href="#" onclick="fnAjax('atencion-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ATENCIONES</a>
                    </li>
                    <li>
                        <a href="#" onclick="fnAjax('atencion-search.php?v=89234982734');"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR ATENCIÓN DE EQUIPO</a>
                    </li>
                </ul>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Atención de Equipo</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="atencion_fecha" class="bmd-label-floating">Fecha de Entrega</label>
										<input type="date" class="form-control" name="atencion_fecha" id="atencion_fecha" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="atencion_orden" class="bmd-label-floating">No. Orden</label>
										<input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="atencion_orden" id="atencion_orden" maxlength="45">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="atencion_producto" class="bmd-label-floating">Producto</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" name="atencion_producto" id="atencion_producto" maxlength="30">
									</div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="serv_nombre" class="bmd-label-floating">Nombre Completo</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,100}" class="form-control" name="serv_nombre" id="serv_nombre" maxlength="100" required>
									</div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="atencion_trabajo" class="bmd-label-floating">Trabajo a realizar</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9()- ]{1,190}" class="form-control" name="atencion_trabajo" id="atencion_trabajo" maxlength="190">
									</div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="serv_detalle" class="bmd-label-floating">Detalle de lo que se realizó</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9()- ]{1,190}" class="form-control" name="serv_detalle" id="serv_detalle" maxlength="190">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<label for="serv_estado" class="bmd-label-floating">Se resolvio el problema</label>
										<select class="form-control" name="serv_estado" id="serv_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option selected="" value="Habilitado">Si</option>
											<option value="Deshabilitado">No</option>
										</select>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; Registrar</button>
					</p>
				</form>
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