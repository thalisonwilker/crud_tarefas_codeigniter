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
	}