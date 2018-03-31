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
					if ($this->input->post('username')) {
						$usuario = $this->input->post('username');
						$senha = $this->input->post('password');

						$this->load->model('Usuarios');

						$this->Usuarios->loga($usuario, $senha);


					}
					$this->load->helper('form');
					$data['view'] = 'login';
					$this->load->view('layout/index', $data);
				}

			public function logout()
				{
					$this->session->sess_destroy();
					redirect();
				}

			public function cadastro()
				{
					if ($this->input->post('password')) {
							$usuario = array(
								'nome' => $this->input->post('nome'),
								'username' => $this->input->post('username'),
								'password' => $this->input->post('nome'),
							);
							$this->load->model('Usuarios');

							if ($this->Usuarios->cadastra($usuario)) {
								redirect();
							}
						}
					$data['view'] = 'cadastro';
					$this->load->helper('form');
					$this->load->view('layout/index', $data);	
				}
		}