<?php foreach ($tarefas as $tarefa): ?>
	<a href="<?=base_url('index.php/tarefa/') . $tarefa->id?>"><?=$tarefa->titulo?></a>
	<p><?=$tarefa->descricao?></p>
<?php endforeach ?>