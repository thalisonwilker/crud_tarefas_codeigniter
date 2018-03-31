<?php

	echo form_open('administracao/adicionar_tarefa');

	echo form_label('Título da tarefa');
	echo form_input(array(
		'name' => 'titulo',
		'type' => 'text'
	));

	echo form_label('Descrição da tarefa');
	echo form_textarea(array(
		'name' => 'descricao',
		'rows' => '3'
	));

	echo form_submit(array(
		'value' => 'Adicionar'
	));

	echo form_close();