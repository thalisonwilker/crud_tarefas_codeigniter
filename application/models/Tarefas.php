<?php

	/**
	* 
	*/
	class Tarefas extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		public function pega_todas()
			{
				return $this->db->get('tarefas')->result();
			}
		public function pega_tarefa($id)
			{
				$this->db->where('id', $id);
				return $this->db->get('tarefas')->result();
			}
		public function deleta_tarefa($id)
			{
				$this->db->where('id', $id);
				return $this->db->delete('tarefas');
			}
		public function adicionar_nova($tarefa)
			{
				return $this->db->insert('tarefas', $tarefa);
			}
		public function atualiza_tarefa($id, $tarefa)
			{
				$this->db->where('id', $id);
				return $this->db->update('tarefas', $tarefa);
			}
		public function tarefas_do_usuario()
			{
				$id = $this->session->userdata('usuario')['usuario'][0]->id;
				$this->db->where('dono', $id);

				return $this->db->get('tarefas')->result();
			}
	}