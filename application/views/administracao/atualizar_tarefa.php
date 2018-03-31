<?php

	echo form_open('administracao/atualizar_tarefa');

	echo form_label('Título da tarefa');
	echo form_input(array(
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
		'name' => 'descricao',
		'value' => $tarefa[0]->descricao,
		'rows' => '3'
	));

	echo form_submit(array(
		'value' => 'Adicionar'
	));

	echo form_close();