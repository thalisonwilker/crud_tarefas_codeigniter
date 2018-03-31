<?php if ($this->session->userdata('usuario')){ ?>
	<a href="<?=base_url('index.php/logout')?>">Logout</a>
	<br>
	<a href="<?=base_url('index.php/administracao/adicionar_tarefa')?>">Adicionar tarefa</a>
	<br>
<?php } else { ?>
<a href="<?=base_url('index.php/login')?>">Login</a>
<br>
<?php } ?>

<?php foreach ($tarefas as $tarefa): ?>
	<a href="<?=base_url('index.php/tarefa/') . $tarefa->id?>"><?=$tarefa->titulo?></a>
	<p><?=$tarefa->descricao?></p>
	<?php if ($this->session->userdata('usuario')): ?>
		
	<a href="<?=base_url('index.php/administracao/deleta_tarefa/') . $tarefa->id?>">Deletar</a>

	<a href="<?=base_url('index.php/administracao/atualizar_tarefa/') . $tarefa->id?>">Atualizar tarefa</a>
	<br>
	<?php endif ?>
	<br>
<?php endforeach ?>