<?php

	echo form_open('administracao/atualizar_tarefa');

	echo form_label('Título da tarefa');
	echo form_input(array(
		'class' => 'form-control mb-2',
		'name' => 'titulo',
		'value' => $tarefa[0]->titulo,
		'type' => 'text'
	));
	echo form_input(array(
		'name' => 'id',
		'value' => $tarefa[0]->id,
		'type' => 'hidden'
	));

	echo form_label('Descrição da tarefa');
	echo form_textarea(array(
		'class' => 'form-control mb-2',
		'name' => 'descricao',
		'value' => $tarefa[0]->descricao,
		'rows' => '3'
	)); ?>

	<div class="input-group my-3">
		<input <?php if ($tarefa[0]->privada == 'on'): ?>
			checked="checked"
		<?php endif ?> name="privada" type="checkbox"> Privado
	</div>


	<?php echo form_submit(array(
		'class' => 'btn btn-primary btn-lg',
		'value' => 'Atualizar'
	));

	echo form_close();