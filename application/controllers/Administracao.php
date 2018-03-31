<?php
	/**
	* 
	*/
	class Administracao extends CI_Controller
	{
		

		public function deleta_tarefa($id)
			{
				if ($this->Tarefas->deleta_tarefa($id)) {
					redirect();
				}
			}
		public function adicionar_tarefa()
			{
				if ($this->input->post('titulo')) {
					$tarefa = array(
						'titulo' => $this->input->post('titulo'),
						'descricao' => $this->input->post('descricao')
					);

					if ($this->Tarefas->adicionar_nova($tarefa)) {
						redirect();
					}
				}
				$this->load->helper('form');
				$data['view'] = "administracao/adicionar_tarefa";
				$this->load->view('layout/index', $data);
			}

		public function atualizar_tarefa($id=1)
			{
				if ($this->input->post('titulo')) {
					$id = $this->input->post('id');

					$tarefa = array(
						'titulo' => $this->input->post('titulo'),
						'descricao' => $this->input->post('descricao')
					);

					if ($this->Tarefas->atualiza_tarefa($id,$tarefa )) {
						redirect();					}
				}
				$this->load->helper('form');
				$data['tarefa'] = $this->Tarefas->pega_tarefa($id);
				$data['view'] = 'administracao/atualizar_tarefa';
				$this->load->view('layout/index', $data);

			}
	}