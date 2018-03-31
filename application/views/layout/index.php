<!DOCTYPE html>
<html lang="pt-bt">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url('assets/css/')?>bootstrap.min.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-light bg-light">
		<div class="container">
			<?php if (!(current_url() == base_url('index.php'))): ?>
				<a href="<?=base_url()?>" class="navbar-brand">home</a>
			<?php endif ?>
			<button class="navbar-toggler">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav ml-auto ">
					<?php if ($this->session->userdata('usuario')){ ?>
						<li class="nav-item ">
							<a href="<?=base_url('index.php/logout')?>" class="nav-link btn btn-danger mr-2 text-white">Logout</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('index.php/administracao/adicionar_tarefa')?>" class="nav-link btn btn-primary text-white">Adicionar tarefa</a>
						</li>
					<?php } else { ?>
					<li class="nav-item">
						<a href="<?=base_url('index.php/login')?>" class="nav-link btn btn-primary text-white">Login</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php $this->load->view($view) ?>
			</div>
		</div>
	</div>
</body>
</html>