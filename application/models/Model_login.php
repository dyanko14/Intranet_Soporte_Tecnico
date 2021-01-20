<?php
class Model_login extends CI_Model {
	//............................................................................
	public function get_usuarios($form_usuario = null, $form_password = null)
	{
		$query = $this->db->query("SELECT usuarios.id AS id_usuario,
													    	usuarios.usuario AS usuario,
														    usuarios.password AS password,
														    CONCAT(usuarios.nombre, ' ', usuarios.apellido_m, ' ', usuarios.apellido_p) AS nombre,
														    act_puesto.id AS id_act_puesto,
														    act_puesto.puesto AS puesto,
														    act_area.id AS id_act_area,
														    act_area.area AS area
															FROM usuarios
															INNER JOIN act_puesto ON act_puesto.id = usuarios.id_puesto
															INNER JOIN act_area ON act_area.id = act_puesto.id_area
														 	WHERE usuarios.usuario = '$form_usuario'
														 	AND usuarios.password = '$form_password' ");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				//--Insert session data
				$session_info = array(
					'username'   => $row->usuario,
					'nombre'     => $row->nombre,
					'id'         => $row->id_usuario,
					'act_area'   => $row->area,
					'act_puesto' => $row->puesto,
					'acceso'     => TRUE
				);
				$this->session->set_userdata($session_info);

				//--Insert data to Database Log Table
				$hora     = date("H").":".date("i").":".date("s");
				$fecha    = date("Y")."-".date("m")."-".date("d");
				$so       = $this->agent->platform();
				$interfaz = $this->agent->browser()." ".$this->agent->version();
				$ip       = $this->input->ip_address();
				$movil    = $this->agent->is_mobile();
				//--
				$query = $this->db->query("INSERT INTO log (id_log, id_usuario, tipo_accion, accion, fecha, hora, sistema_operativo, interfaz, direccion_ip, movil)
											 VALUES ('', '$row->id_usuario', 'Login', 'Inicio de sesión', '$fecha', '$hora', '$so', '$interfaz', '$ip' ,'$movil') ");
			} ;
			//--
			redirect('dashboard', 'refresh');
		}
    else
    {
			redirect(base_url(), 'refresh');
    }
	}
	//............................................................................
	public function update_usuario($form_id_usuario = null,
																 $form_password_old = null,
																 $form_password_new = null,
																 $form_password_re = null)
	{
		//--Actual password validate
		$query = $this->db->query("SELECT * FROM usuarios
															 WHERE id = '$form_id_usuario'
															 AND password = '$form_password_old' ");
		if ($query->num_rows() > 0)
		{
			//--Same new password validate
			if ($form_password_new === $form_password_re)
			{
				$query = $this->db->query("UPDATE usuarios
																	 SET password = '$form_password_new'
																	 WHERE id = '$form_id_usuario'");
				//--
				redirect(base_url()."cuenta/update_ok", 'refresh');
			}
			else
			{
				redirect(base_url()."cuenta/update_fail_compare", 'refresh');
			}
		}
    else
    {
			redirect(base_url()."cuenta/update_fail_actual", 'refresh');
    }
	}
	//............................................................................
	public function logout()
	{
		//--Insert data to Database Log Table
		$id_usuario = $this->session->userdata('id');
		$hora     = date("H").":".date("i").":".date("s");
		$fecha    = date("Y")."-".date("m")."-".date("d");
		$so       = $this->agent->platform();
		$interfaz = $this->agent->browser()." ".$this->agent->version();
		$ip       = $this->input->ip_address();
		$movil    = $this->agent->is_mobile();
		//--
		$query = $this->db->query("INSERT INTO log (id_log, id_usuario, tipo_accion, accion, fecha, hora, sistema_operativo, interfaz, direccion_ip, movil)
									 VALUES ('', '$id_usuario', 'Exit', 'Finalización de sesión', '$fecha', '$hora', '$so', '$interfaz', '$ip' ,'$movil') ");
	}
}
?>
