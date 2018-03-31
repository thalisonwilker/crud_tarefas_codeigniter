<?php
	
	echo form_open(base_url('index.php/') . 'cadastro');

	echo form_input(array(
		'name' => 'nome',
		'type' => 'text',
		'class' => 'form-control mb-2',
		'placeholder' => 'Seu nome'
	));
	echo form_input(array(
		'name' => 'username',
		'type' => 'text',
		'class' => 'form-control mb-2',
		'placeholder' => 'Username'
	));
	echo form_password(array(
		'name' => 'password',
		'class' => 'form-control mb-2',
		'placeholder' => 'Password'
	));

	echo form_submit(array(
		'class' => 'btn btn-primary btn-lg',
		'value' => 'Cadastrar'
	));

	echo form_close();