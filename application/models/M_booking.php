<?php
class M_booking extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	/*-----------------------------------------Search Room---------------------------------------------------*/
	public function search_room($search, $checkin, $checkout)
	{

		if (empty($search && $checkin && $checkout)) {
			return array();
		}

		$result = $this->db->like('room', $search);
		$result = $this->db->like('checkin' , $checkin);
		$result = $this->db->like('checkout' , $checkout);
		$result = $this->db->get('master');

		return $result->result();
	}

	public function empty_room()
	{
		$query = $this->db->get_where('room',array('status =' => 'Available'));
		return $query->result();
	}
	/*-----------------------------------------End Search Room---------------------------------------------------*/


	/*-----------------------------------------Admin Room---------------------------------------------------*/
	public function room()
	{
		$query = $this->db->get('room');
		return $query->result_array();
	}

	public function create_room($file_name, $room, $type)
	{
		$data = array(
			'image' => $file_name,
			'room' => $room,
			'type' => $type,
			'status' => "Available"
			);

		return $this->db->insert('room', $data);
	}

	public function delete_room($room)
	{
		return $this->db->delete('room', array('room' => $room));
	}

	public function view_update_room($id_room)
	{
		$query = $this->db->get_where('room', array('id_room' => $id_room));
		return $query->row_array();
	}

	public function update_room($id_room)
	{
		$data = array(
			'room' => $this->input->post('room'),
			'type' => $this->input->post('type'),
			'status' => $this->input->post('status')
			);

		$this->db->where('id_room', $id_room);
		return $this->db->update('room', $data);
	}

	public function update_reserved($room)
	{
		$data = array(
			'status' => 'Reserved'
			);

		$this->db->where('id_room', $room);
		return $this->db->update('room', $data);
	}
	/*-----------------------------------------End Admin Room---------------------------------------------------*/

	/*-----------------------------------------Admin Room Type---------------------------------------------------*/
	public function room_type()
	{
		$query = $this->db->get('room_type');
		return $query->result_array();
	}

	public function create_room_type()
	{
		$data = array(
			'type' => $this->input->post('type')
			);

		return $this->db->insert('room_type', $data);
	}

	public function delete_room_type($id)
	{
		return $this->db->delete('room_type', array('id' => $id));
	}
	/*-----------------------------------------End Admin Room Type---------------------------------------------------*/

	/*-----------------------------------------Schedule or Reservasi---------------------------------------------------*/
	public function create_shedule($room)
	{
		$date = date("Y-m-d");

		$data = array(
			'checkin' => $this->input->post('checkin'),
			'checkout' => $this->input->post('checkout'),
			'tgl_reservasi' => $date,
			'id_room' => $room,
			'id_tamu' => $this->input->post('name'),
			'biaya' => $this->input->post('biaya'),
			'keperluan' => $this->input->post('event'),
			'id_karyawan' => $this->input->post('id_karyawan'),
			'status_res' => '0'
			);

		return $this->db->insert('reservasi', $data);
	}
	/*-----------------------------------------End Schedule or Reservasi---------------------------------------------------*/

	/*-----------------------------------------List Book or Reservasi---------------------------------------------------*/
	public function book()
	{
		$query = $this->db->get_where('master', array('status =' => '0'));
		return $query->result_array();
	}

	public function delete_book($id_reservasi)
	{
		return $this->db->delete('reservasi', array('id_reservasi' => $id_reservasi));
	}

	public function view_update_book($reservasi)
	{
		$query = $this->db->get_where('master', array('reservasi' => $reservasi));
		return $query->row_array();
	}

	public function update_book($id_reservasi)
	{
		$date = date("Y-m-d");

		$data = array(
			'checkin' => $this->input->post('checkin'),
			'checkout' => $this->input->post('checkout'),
			'tgl_reservasi' => $date,
			'id_room' => $this->input->post('room'),
			'id_tamu' => $this->input->post('name'),
			'biaya' => $this->input->post('biaya'),
			'keperluan' => $this->input->post('event'),
			'id_karyawan' => $this->input->post('id_karyawan'),
			'status_res' => '0'
			);

		$this->db->where('id_reservasi', $id_reservasi);
		return $this->db->update('reservasi', $data);
	}

	public function done_book($id_reservasi)
	{
		$data2 = array(
			'status_res' => '1'
			);

		$this->db->where('id_reservasi', $id_reservasi);
		return $this->db->update('reservasi', $data2);
	}

	public function check_done($id_room)
	{
		$sql = $this->db->query("SELECT * FROM master WHERE status = '0' AND id_room = '$id_room'");
		$query = $sql->num_rows();

		if ($query > 0) {
			$data = array(
				'status' => 'Reserved'
				);

			$this->db->where('id_room', $id_room);
			return $this->db->update('room', $data);
		}
		elseif ($query <= 0){
			$data = array(
				'status' => 'Available'
				);

			$this->db->where('id_room', $id_room);
			return $this->db->update('room', $data);
		}

	}
	/*-----------------------------------------End List Book or Reservasi--------------------------------------------------*/

	/*-----------------------------------------Guest or Tamu---------------------------------------------------*/
	public function guest()
	{
		$query = $this->db->get('tamu');
		return $query->result_array();
	}

	public function add_guest()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'noktp' => $this->input->post('noktp'),
			'jeniskelamin' => $this->input->post('jeniskelamin'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'telp' => $this->input->post('telp')
			);

		return $this->db->insert('tamu', $data);
	}
	/*-----------------------------------------End Guest or Tamu---------------------------------------------------*/

	/*-----------------------------------------Employee or Karyawan---------------------------------------------------*/
	public function update_employee()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('password')),
			'status' => $this->input->post('status'),
			'jabatan' => $this->input->post('jabatan')
			);

		$this->db->where('username', $this->session->userdata('username'));
		return $this->db->update('karyawan', $data);
	}
	/*-----------------------------------------End Employee or Karyawan---------------------------------------------------*/

}
