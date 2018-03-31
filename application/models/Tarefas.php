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
	}