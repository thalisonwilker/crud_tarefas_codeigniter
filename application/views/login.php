<?php

	echo form_open('login');

	echo form_input(array(
		'name' => 'username',
		'type' => 'text',
		'placeholder' => 'Username',
		'class' => 'form-control mb-2'
	));


	echo form_password(array(
		'class' => 'form-control mb-2 ',
		'name' => 'password',
	));

	echo form_submit(array(
		'value' => 'Entrar',
		'class' => 'btn btn-primary btn-lg'
	));

	echo form_close();