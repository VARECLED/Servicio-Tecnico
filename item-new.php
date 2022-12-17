<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CB | Nuevo Servicio</title>
	
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
                    <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR SERVICIO
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque laudantium necessitatibus eius iure adipisci modi distinctio. Earum repellat iste et aut, ullam, animi similique sed soluta tempore cum quis corporis!
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="#" onclick="fnAjax('item-new.php?v=89234982734');"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR SERVICIO</a>
                    </li>
                    <li>
                        <a href="#" onclick="fnAjax('item-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE SERVICIO</a>
                    </li>
                    <li>
                        <a href="#" onclick="fnAjax('item-search.php?v=89234982734');"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR SERVICIO</a>
                    </li>
                </ul>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información del Servicio</legend>
						<div class="container-fluid">
							<div class="row">
														
								<div class="col-12 col-md-7">
									<div class="form-group">
										<label for="serv_nombre" class="bmd-label-floating">Nombre Completo</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,100}" class="form-control" name="serv_nombre" id="serv_nombre" maxlength="100" required>
									</div>
								</div>
								<div class="col-12 col-md-5">
									<label for="serv_producto" class="bmd-label-floating">Producto</label>
										<select class="form-control" name="serv_producto" id="serv_producto">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option selected="" value="Habilitado">PC</option>
											<option value="Deshabilitado">Celular</option>
											<option value="Deshabilitado">Laptop</option>
											<option value="Deshabilitado">Otro</option>
										</select>
								</div>
								<div class="col-12 col-md-4">
									<label for="serv_marca" class="bmd-label-floating">Marca</label>
										<select class="form-control" name="serv_marca" id="serv_marca">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option selected="" value="Habilitado">Xiaomi</option>
											<option value="Deshabilitado">Samsung</option>
											<option value="Deshabilitado">Asus</option>
											<option value="Deshabilitado">Otro</option>
										</select>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="serv_modelo" class="bmd-label-floating">Modelo</label>
										<input type="text" pattern="[a-zA-Z0-9-]{1,100}" class="form-control" name="serv_modelo" id="serv_modelo" maxlength="100" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<label for="serv_color" class="bmd-label-floating">Color</label>
										<select class="form-control" name="serv_color" id="serv_color">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option selected="" value="Habilitado">Blanco</option>
											<option value="Deshabilitado">Azul</option>
											<option value="Deshabilitado">Rosa</option>
											<option value="Deshabilitado">Otro</option>
										</select>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="serv_imei" class="bmd-label-floating">IMEI</label>
										<input type="text" pattern="[0-9()+]{1,15}" class="form-control" name="serv_imei" id="serv_imei" maxlength="15" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="serv_nserie" class="bmd-label-floating">N° Serie</label>
										<input type="text" pattern="[a-zA-Z0-9-]{1,17}" class="form-control" name="serv_nserie" id="serv_nserie" maxlength="17" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<label for="serv_estado" class="bmd-label-floating">Estado</label>
										<select class="form-control" name="serv_estado" id="serv_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option selected="" value="Habilitado">Excelente</option>
											<option value="Deshabilitado">Regular</option>
											<option value="Deshabilitado">Malo</option>
										</select>
								</div>
								
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="serv_sedejo" class="bmd-label-floating">Con el ---- se deja lo siguiente</label>
										<input type="text" pattern="a-zA-záéíóúÁÉÍÓÚñÑ0-9()- ]{1,190}" class="form-control" name="serv_sedejo" id="serv_sedejo" maxlength="190">
									</div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="serv_detalle" class="bmd-label-floating">Trabajo a realizar</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9()- ]{1,190}" class="form-control" name="serv_detalle" id="serv_detalle" maxlength="190">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="serv_cuenta" class="bmd-label-floating">Cuenta del Equipo</label>
										<input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" name="serv_cuenta" id="serv_cuenta" maxlength="40" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="serv_contrasena" class="bmd-label-floating">Contraseña</label>
										<input type="text" pattern="[a-zA-Z0-9-]{1,30}" class="form-control" name="serv_contrasena" id="serv_contrasea" maxlength="27" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="serv_telefono" class="bmd-label-floating">Otro Teléfono</label>
										<input type="text" pattern="[0-9()+]{1,10}" class="form-control" name="serv_telefono" id="serv_telefono" maxlength="10" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="serv_fecha" class="bmd-label-floating">Fecha de Entrega</label>
										<input type="date" class="form-control" name="serv_fecha" id="serv_fecha" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="serv_total" class="bmd-label-floating">Total</label>
										<input type="number" class="form-control" name="serv_total" id="serv_total" maxlength="10" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="serv_abono" class="bmd-label-floating">Abono</label>
										<input type="number" class="form-control" name="serv_abono" id="serv_abono" maxlength="10" required>
									</div>
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
	<script src="./js/jquery.validate.min.js" ></script>

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