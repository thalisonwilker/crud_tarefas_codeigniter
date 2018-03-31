<a href="<?=base_url('index.php/administracao/adicionar_tarefa')?>">Adicionar tarefa</a>
<br>
<?php foreach ($tarefas as $tarefa): ?>
	<a href="<?=base_url('index.php/tarefa/') . $tarefa->id?>"><?=$tarefa->titulo?></a>
	<p><?=$tarefa->descricao?></p>
	<a href="<?=base_url('index.php/administracao/deleta_tarefa/') . $tarefa->id?>">Deletar</a>

	<a href="<?=base_url('index.php/administracao/atualizar_tarefa/') . $tarefa->id?>">Atualizar tarefa</a>
	<br>
	<br>
<?php endforeach ?>