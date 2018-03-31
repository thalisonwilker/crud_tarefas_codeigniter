<?php

	echo form_open('login');

	echo form_input(array(
		'name' => 'usuario',
		'type' => 'text'
	));


	echo form_password(array(
		'name' => 'senha',
	));

	echo form_submit(array(
		'value' => 'Entrar'
	));

	echo form_close();