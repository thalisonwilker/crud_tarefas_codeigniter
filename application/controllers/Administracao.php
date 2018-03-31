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
	}