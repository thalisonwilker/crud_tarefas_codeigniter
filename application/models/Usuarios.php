<?php

	class Usuarios extends CI_Model
		{
			public function cadastra($usuario)
				{
					return $this->db->insert('usuarios', $usuario);
				}
			public function loga($username, $password)
				{
					$this->db->where('username', $username);

					$usuario = $this->db->get('usuarios')->result();

					if ($usuario) {
						echo $password;

						if ($usuario[0]->username == $username and $usuario[0]->password == $password) {
							$usuario = array(
								'usuario' => $usuario
							);
							$this->session->set_userdata('usuario', $usuario);
							redirect();
						}

					}else{
						return false;
					}
				}
			
		}