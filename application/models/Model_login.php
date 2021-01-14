<?php
class Model_login extends CI_Model {
	//............................................................................
	public function get_usuarios($form_usuario = null, $form_password = null)
	{
		$query = $this->db->query("SELECT * FROM usuarios
															 WHERE usuario = '$form_usuario'
															 AND password = '$form_password' ");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				//--Insert session data
				$session_info = array(
					'username' => $row->usuario,
					'id'       => $row->id,
					'acceso'   => TRUE
				);
				$this->session->set_userdata($session_info);
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
}
?>
