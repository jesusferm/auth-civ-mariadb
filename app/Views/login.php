<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?=base_url('assets/custom/images/favicon.png');?>">
		<!-- Bootstrap CSS -->
		<link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?=base_url('assets/vendor/bootstrap/css/animate.css');?>" rel="stylesheet">
		<link href="<?=base_url('assets/vendor/bootstrap/css/animation.css');?>" rel="stylesheet">
		<title><?=$title;?></title>
	</head>
	<body>
		<?php
		include('common/navbar.php');
		?>
		<div class="container mt-5">
			<div class="row justify-content-md-center">
				<div class="col-6 mt-5">
					<div class="card rounded p-2">
						<h1>Inicio de Sesión</h1>
						<?php if(session()->getFlashdata('msg')):?>
							<div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
						<?php endif;?>
						<form action="<?=base_url('auth');?>" method="post">
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" name="email" class="form-control" id="email" value="<?=set_value('email');?>">
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Contraseña</label>
								<input type="password" name="password" class="form-control" id="password">
							</div>
							<button type="submit" class="btn btn-primary float-end">
								Iniciar
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	 
		<!-- Popper.js first, then Bootstrap JS -->
		<script>
			window.jQuery || document.write('<script src="<?=base_url('assets/vendor/jquery/jquery-3.5.1.min.js');?>"><\/script>')
		</script>
		<script src="<?=base_url('assets/vendor/bootstrap/js/popper.min.js');?>"></script>
		<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
	</body>
</html>