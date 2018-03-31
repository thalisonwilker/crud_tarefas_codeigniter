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
			public function login()
				{
					if ($this->input->post('usuario')) {
						$usuario = $this->input->post('usuario');
						$senha = $this->input->post('senha');

						if ($usuario == 'thalison' and $senha == '123') {
							
							$usuario = array('logado' => TRUE);
							$this->session->set_userdata('usuario', $usuario);

							redirect();

						}


					}
					$this->load->helper('form');
					$data['view'] = 'login';
					$this->load->view('layout/index', $data);
				}
		}