<?php
	include("session.php");
	include("config.php");
	$id = $_GET['id'];  
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CB | Actualizar cliente</title>

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
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>
<body>
	
		<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR CLIENTE
				</h3>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem odit amet asperiores quis minus, dolorem repellendus optio doloremque error a omnis soluta quae magnam dignissimos, ipsam, temporibus sequi, commodi accusantium!
				</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="#" onclick="fnAjax('client-new.php?v=89234982734');" ><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE</a>
					</li>
					<li>
						<a href="#" onclick="fnAjax('client-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES</a>
					</li>
					<li>
						<a href="#" onclick="fnAjax('client-search.php?v=89234982734');"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR CLIENTE</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form action="cliente-actualizar.php" method="POST" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
						<div class="container-fluid">
							<div class="row">

							<?php
								$busqueda="SELECT persona.IdPersona, cliente.Cedula, persona.nombreC, persona.Direccion, persona.Correoe, telefono.Telefono 
								FROM persona, cliente, telefono 
								WHERE persona.IdPersona = $id
								AND persona.IdPersona = cliente.IdPersona 
								AND persona.IdPersona = telefono.IdPersona;";
								$result = mysqli_query($mysqli, $busqueda);
								while($row = mysqli_fetch_array($result)){?>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_dni" class="bmd-label-floating">Cédula</label>
										<?php echo "<input type='text' pattern='[a-zA-Z0-9-]{1,27}' value='".$row['Cedula']."' class='form-control' name='cliente_cedula' id='cliente_cedula' maxlength='27'>";?>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group">
										<label for="cliente_nombre" class="bmd-label-floating">Nombre y Apellido</label>
										<?php echo "<input type='text' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,100}' value='".$row['nombreC']."' class='form-control' name='cliente_nombre' id='cliente_nombre' maxlength='40'>";?>
									</div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="cliente_direccion" class="bmd-label-floating">Dirección</label>
										<?php echo "<input type='text' pattern='[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ#- ]{1,150}' value='".$row['Direccion']."' class='form-control' name='cliente_direccion' id='cliente_direccion' maxlength='150'>";?>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_apellido" class="bmd-label-floating">Email</label>
										<?php echo "<input type='text' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'value='".$row['Correoe']."' class='form-control' name='cliente_email' id='cliente_email' maxlength='40'>";?>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_telefono" class="bmd-label-floating">Teléfono</label>
										<?php echo "<input type='text' pattern='[0-9()+]{1,20}' class='form-control' value='".$row['Telefono']."' name='cliente_telefono' id='cliente_telefono' maxlength='20'>";?>
									</div>
								</div>

								<?php } ?>

							

							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>
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