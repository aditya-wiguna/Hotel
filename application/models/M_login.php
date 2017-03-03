<?php
class M_login extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	//Untuk Bagian Login Get jabatan
	public function get_jabatan()
	{
		$query = $this->db->group_by('jabatan');
		$query = $this->db->get('karyawan');
		return $query->result_array();
	}
	//Get All data user
	public function get_user()
	{
		$sess = $this->session->userdata('username');
		$query = $this->db->get_where('karyawan',array('username' => $sess));
		return $query->result();
	}

	public function checklogin()
	{
		if ($this->session->has_userdata('username')) {

		}
		else{
			redirect('c_booking/admin');
		}
	}

	public function login_proses($nama, $pass, $jabatan, $sess)
	{
		$query = $this->db->get_where('karyawan', array('username'=>$nama,
														'password'=>$pass,
														'jabatan' =>$jabatan));

		if ($query->num_rows()>0) {
			$sess;
			redirect('c_booking/admin_room');
		}
		else{
			redirect('c_booking/admin');
		}

	}


	//Register
	public function register()
	{
		$data = array(
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'password' => md5($this->input->post('password')),
				'status' => $this->input->post('status'),
				'jabatan' => $this->input->post('jabatan')
				);

		return $this->db->insert('karyawan', $data);
	}

}
