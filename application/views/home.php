<?php foreach ($tarefas as $tarefa): ?>
	<a href="#"><?=$tarefa->titulo?></a>
	<p><?=$tarefa->descricao?></p>
<?php endforeach ?>