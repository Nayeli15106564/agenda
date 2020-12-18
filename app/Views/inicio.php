<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>inicio</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fontawesome/css/all.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-dark " style="background-color: #800080;">
			<a class="navbar-brand" href="#"><i class = "far fa-user-circle fa-4x" ></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Categorias') ?>">Categoria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Contactos') ?>">Contactos</a>
					</li>
				</ul>
			</div>
		</nav>
		<hr>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-4" >
				<center>
					<img src="<?php echo base_url('naye.jpg') ?>" alt="" width="250" height="350">
				</center>
			</div>
			<div class="col-sm-6">
				<center>
					<h1>Datos Personales</h1>
				</center>
				<label for="concepto">Nombre</label>
				<label for="concepto" class="form-control">Nayeli Santiago Fuenleal</label>
				<label for="monto">Carrera</label>
				<label for="concepto" class="form-control">Ing. En Sistemas Computacionales</label>
				<label for="fecha">Especialidad</label>
				<label for="concepto" class="form-control">Adm. de Servicios Web</label>
			</div>
		</div>
	</div>
</body>
</html>