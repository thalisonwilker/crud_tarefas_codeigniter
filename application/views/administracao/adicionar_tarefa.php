<?php

	echo form_open('administracao/adicionar_tarefa');

	echo form_label('Título da tarefa');
	echo form_input(array(
		'name' => 'titulo',
		'class' => 'form-control mb-2',
		'type' => 'text'
	));

	echo form_label('Descrição da tarefa');
	echo form_textarea(array(
		'name' => 'descricao',
		'class' => 'form-control mb-2',
		'rows' => '3'
	));

	echo form_submit(array(
		'class' => 'btn btn-primary btn-lg',
		'value' => 'Adicionar'
	));

	echo form_close();