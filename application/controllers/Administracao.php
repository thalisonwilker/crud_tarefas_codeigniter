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
	}