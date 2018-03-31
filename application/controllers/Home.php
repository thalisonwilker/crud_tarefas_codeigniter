<?php

	class Home extends CI_Controller
		{
			public function index()
				{
					// lista todas as tarefas
					$data['view'] = 'home';
					$data['tarefas'] = $this->Tarefas->pega_todas();
					$this->load->view('layout/index', $data);
				}
			public function tarefa($id)
				{
					$data['tarefa'] = $this->Tarefas->pega_tarefa($id);
					$data['view'] = 'tarefa';
					$this->load->view('layout/index', $data);
				}
		}