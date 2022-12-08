<?php
	include("session.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!--Metadatos-->
    <meta charset="UTF-8">
    <meta name="author" content="Clemente y Belen">
    <meta name="description" content="Página de Servicio Técnico">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titulo de la pagina-->
    <title>CB | Servicio Técnico</title>
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
	<!--Funcion AJAX-->
	<script src="js/funciones.js"></script>


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<!--Imagen del Usuario-->
					<img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Administrador <br><small class="roboto-condensed-light">Encargado</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Home</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="#" onclick="fnAjax('client-new.php?v=89234982734');"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('client-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('client-search.php?v=89234982734');"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
								</li>
								<li>
									<a href="xml-cliente.php"><i class="fas fa-file-download fa-fw"></i> &nbsp; Descargar XML</a>
								</li>
								<li>
									<a href="json-cliente.php"><i class="fas fa-file-download fa-fw"></i> &nbsp; Descargar JSON</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-tools fa-fw"></i> &nbsp; Servicio <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="#" onclick="fnAjax('item-new.php?v=89234982734');"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Servicio</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('item-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Servicio</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('item-search.php?v=89234982734');"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Servicio</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-exclamation-triangle fa-fw"></i> &nbsp; Atencion a Equipos<i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="#" onclick="fnAjax('atencion-new.php?v=89234982734');"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Servicio</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('atencion-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Servicio</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('atencion-search.php?v=89234982734');"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar servicio</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="far fa-check-circle fa-fw"></i> &nbsp; Retiros <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="#" onclick="fnAjax('reservation-new.php?v=89234982734');"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Retiro</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('reservation-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Productos listos no retirados</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('reservation-search.php?v=89234982734');"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Retiro</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('reservation-pending.php?v=89234982734');"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Producto no retirados (30 dias)</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="#" onclick="fnAjax('user-new.php?v=89234982734');"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('user-list.php?v=89234982734');"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="#" onclick="fnAjax('user-search.php?v=89234982734');"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</section>
		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="#" onclick="fnAjax('user-update.php?v=89234982734');">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="logout.php" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>

			<!-- Page header -->
			<div class="full box"  id="imprimir">
				<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; Bienvenido
				</h3>
				<p class="text-justify">
					ACTUALMENTE SOLO FUNCIONA LAS FUNCIONES DE CLIENTES, LAS DEMAS FUNCIONES ESTAN EN PROCESO. GRACIAS POR LA COMPRENSIÓN.
				</p>
				</div>
			
				<!-- Content -->
				<div class="full-box tile-container">

				<a href="#" onclick="fnAjax('client-list.php?v=89234982734');" class="tile">
					<div class="tile-tittle">Clientes</div>
					<div class="tile-icon">
						<i class="fas fa-users fa-fw"></i>
						<p>5 registros</p>
					</div>
				</a>

				<a href="#" onclick="fnAjax('item-list.php?v=89234982734');" class="tile">
					<div class="tile-tittle">Servicio</div>
					<div class="tile-icon">
						<i class="fas fa-tools fa-fw"></i>
						<p>9 Registrados</p>
					</div>
				</a>

				<a href="#" onclick="fnAjax('atencion-list.php?v=89234982734');" class="tile">
					<div class="tile-tittle">Atención</div>
					<div class="tile-icon">
						<i class="fas fa-exclamation-triangle fa-fw"></i>
						<p>9 Registrados</p>
					</div>
				</a>

				<a href="#" onclick="fnAjax('reservation-list.php?v=89234982734');" class="tile">
					<div class="tile-tittle">Retiros</div>
					<div class="tile-icon">
						<i class="fas fa-check-circle fa-fw"></i>
						<p>10 Registrados</p>
					</div>
				</a>

				<a href="#" onclick="fnAjax('user-list.php?v=89234982734');" class="tile">
					<div class="tile-tittle">Usuarios</div>
					<div class="tile-icon">
						<i class="fas fa-user-secret fa-fw"></i>
						<p>50 Registrados</p>
					</div>
				</a>
				
				</div>
			</div>
		</section>
	</main>
	
	
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
</body>
</html>