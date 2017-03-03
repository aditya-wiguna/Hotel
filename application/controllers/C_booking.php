<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_booking extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login');
		$this->load->model('m_booking');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['room'] = $this->m_booking->room();
		$this->load->view('page/home', $data);
	}

	public function search_room()
	{

		$search = $this->input->post('search');
		$checkin = $this->input->post('checkin');
		$checkout = $this->input->post('checkout');

		$data['result'] = $this->m_booking->search_room($search, $checkin, $checkout);
		$this->load->view('page/index', $data);
	}

	public function empty_room()
	{
		$data['room'] = $this->m_booking->empty_room();
		$this->load->view('page/search_room', $data);
	}

	/*-----------------------------------------Bagian Admin---------------------------------------------------*/


	/*-----------------------------------------Login and Register---------------------------------------------------*/
	public function admin()
	{
		$data['jabatan'] = $this->m_login->get_jabatan();

		$this->load->view('admin/login', $data);
	}

	public function register()
	{
		$this->load->view('admin/register');
	}

	public function register_proses()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('jabatan', 'Position', 'required');

		if ($this->form_validation->run() === FALSE) {
			echo "<script>alert('Not Valid');</script>";
			$this->load->view('admin/register');
		}
		else{
			$this->m_login->register();
			redirect('c_booking/admin');
		}
	}

	public function login_proses()
	{
		$nama = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		$jabatan = $this->input->post('jabatan');
		$sess = $this->session->set_userdata('username', $nama);

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/login');
		}
		else{

			$this->m_login->login_proses($nama, $pass, $jabatan, $sess);
		}
	}

	public function logout()
	{
		$this->m_login->checklogin();
		$this->session->sess_destroy;
		redirect('c_booking/admin');
	}

	/*-----------------------------------------End Login and Register---------------------------------------------------*/


	/*-----------------------------------------Admin Room---------------------------------------------------*/

	public function admin_room()
	{
		$this->m_login->checklogin();
		$data['data'] = $this->m_booking->room();
		$data['room_type'] = $this->m_booking->room_type();
		$data['selector'] = $this->m_booking->room_type();

		$this->load->view('admin/header');
		$this->load->view('admin/room', $data);
		$this->load->view('admin/footer');
	}

	public function admin_room_type()
	{
		$this->m_login->checklogin();
		$data['data'] = $this->m_booking->room();
		$data['room_type'] = $this->m_booking->room_type();
		$data['selector'] = $this->m_booking->room_type();

		$this->load->view('admin/header');
		$this->load->view('admin/room_type', $data);
		$this->load->view('admin/footer');
	}

	public function create_room()
	{
		$this->m_login->checklogin();
		$data['data'] = $this->m_booking->room();
		$data['room_type'] = $this->m_booking->room_type();
		$data['selector'] = $this->m_booking->room_type();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('room', 'Room(Name)', 'trim|required');
		$this->form_validation->set_rules('type', 'Type', 'trim|required');

		if ($this->form_validation->run() === FALSE) {
			echo "<script>alert(\"This Form Is Empty\");</script>";
			$this->load->view('admin/header');
			$this->load->view('admin/room', $data);
			$this->load->view('admin/footer');
		}

		else{

			$this->load->library('upload');
			

			if (empty($_FILES['image']['room'])) {
				$this->form_validation->set_rules('image', 'Document', 'required');

				$config['upload_path']   = './files/';
		  		$config['allowed_types'] = 'gif|jpg|png';

		  		$this->upload->initialize($config);

		  		if ($this->upload->do_upload('image')) {
		  			$image = $this->upload->data();
		  			$file_name = $image['file_name'];

		  			$room = $this->input->post('room');
					$type = $this->input->post('type');

		  			$this->m_booking->create_room($file_name, $room, $type);
					redirect('c_booking/admin_room');
		  		}
			}

			else{
				 echo $this->upload->display_errors();
			}
		}

	}

	public function view_update_room($id_room)
	{
		$this->m_login->checklogin();
		$data['room'] = $this->m_booking->view_update_room($id_room);
		$data['selector'] = $this->m_booking->room_type();

		$this->load->view('admin/header');
		$this->load->view('admin/update_room', $data);
		$this->load->view('admin/footer');
	}

	public function update_room($id_room)
	{
		$this->m_login->checklogin();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('room', 'Room(Name)', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() === FALSE) {
			echo "<script>alert(\"This Form Is Empty\");</script>";
			$data['room'] = $this->m_booking->view_update_room($id_room);
			$data['selector'] = $this->m_booking->room_type();
			$this->load->view('admin/header');
			$this->load->view('admin/room', $data);
			$this->load->view('admin/footer');
		}

		else{
		  	$this->m_booking->update_room($id_room);
			redirect('c_booking/admin_room');
		}
	}

	public function create_room_type()
	{
		$this->m_login->checklogin();
		$data['data'] = $this->m_booking->room();
		$data['room_type'] = $this->m_booking->room_type();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('type', 'Type', 'required');

		if ($this->form_validation->run() === FALSE) {
			echo "<script>alert(\"This Form Is Empty\");</script>";
			$this->load->view('admin/header');
			$this->load->view('admin/room_type', $data, $data2);
			$this->load->view('admin/footer');
		}
		else{
			$this->m_booking->create_room_type();
			redirect('c_booking/admin_room_type');
		}
	}

	public function delete_room($room)
	{
		$this->m_login->checklogin();
		$this->m_booking->delete_room($room);
		redirect('c_booking/admin_room');
	}

	public function delete_room_type($id)
	{
		$this->m_login->checklogin();
		$this->m_booking->delete_room_type($id);
		redirect('c_booking/admin_room');
	}
	/*-----------------------------------------End Admin Room---------------------------------------------------*/


	/*-----------------------------------------Reservasi or Schedule---------------------------------------------------*/
	public function admin_shedule()
	{
		$this->m_login->checklogin();
		$data['room'] = $this->m_booking->room();
		$data['guest'] = $this->m_booking->guest();

		$this->load->view('admin/header');
		$this->load->view('admin/shedule', $data);
		$this->load->view('admin/footer');
	}

	public function create_shedule()
	{	
		$this->m_login->checklogin();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('checkin', 'Check In', 'required');
		$this->form_validation->set_rules('checkout', 'Check Out', 'required');
		$this->form_validation->set_rules('room', 'Room', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('biaya', 'Pay', 'required');
		$this->form_validation->set_rules('event', 'Event', 'required');
		$this->form_validation->set_rules('id_karyawan', 'Kode Karyawan', 'required');

		if ($this->form_validation->run() === FALSE) {
			echo "<script>alert(\"This Form Is Empty\");</script>";
			$this->load->view('admin/header');
			$this->load->view('admin/shedule');
			$this->load->view('admin/footer');
		}
		else{
			$room = $this->input->post('room');
			$this->m_booking->create_shedule($room);
			$this->m_booking->update_reserved($room);
			redirect('c_booking/admin_booking');
		}
	}
	/*-----------------------------------------End Reservasi or Schedule---------------------------------------------------*/

	/*-----------------------------------------List Booking or Reservasi---------------------------------------------------*/
	public function admin_booking()
	{
		$this->m_login->checklogin();
		$data['book'] = $this->m_booking->book();

		$this->load->view('admin/header');
		$this->load->view('admin/book', $data);
		$this->load->view('admin/footer');
	}

	public function view_update_book($reservasi)
	{
		$this->m_login->checklogin();
		$data['books'] = $this->m_booking->view_update_book($reservasi);
		$data['room'] = $this->m_booking->room();
		$data['guest'] = $this->m_booking->guest();

		$this->load->view('admin/header');
		$this->load->view('admin/re_shedule', $data);
		$this->load->view('admin/footer');
	}

	public function delete_book($id_reservasi)
	{
		$this->m_login->checklogin();
		$this->m_booking->delete_book($id_reservasi);
		redirect('c_booking/admin_booking');
	}

	public function update_book($id_reservasi)
	{
		$this->m_login->checklogin();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('checkin', 'Check In', 'required');
		$this->form_validation->set_rules('checkout', 'Check Out', 'required');
		$this->form_validation->set_rules('room', 'Room', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('biaya', 'Pay', 'required');
		$this->form_validation->set_rules('event', 'Event', 'required');
		$this->form_validation->set_rules('id_karyawan', 'Kode Karyawan', 'required');

		if ($this->form_validation->run() === FALSE) {
			echo "<script>alert(\"This Form Is Empty\");</script>";
			$data['books'] = $this->m_booking->view_update_book($id_reservasi);
			$data['room'] = $this->m_booking->room();
			$this->load->view('admin/header');
			$this->load->view('admin/re_shedule', $data);
			$this->load->view('admin/footer');
		}
		else{
			$this->m_booking->update_book($id_reservasi);
			redirect('c_booking/admin_booking');
		}
	}

	public function done_book($id_reservasi, $id_room)
	{
		$this->m_booking->done_book($id_reservasi);
		$this->m_booking->check_done($id_room);
		redirect('c_booking/admin_booking');
	}
	/*-----------------------------------------End List Booking or Reservasi----------------------------------------------*/

	/*-----------------------------------------Guest or Tamu---------------------------------------------------*/
	public function admin_guest()
	{
		$this->m_login->checklogin();
		$data['tamu'] = $this->m_booking->guest();

		$this->load->view('admin/header');
		$this->load->view('admin/tamu', $data);
		$this->load->view('admin/footer');
	}

	public function add_guest()
	{
		$this->m_login->checklogin();
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('noktp', 'KTP', 'required');
		$this->form_validation->set_rules('jeniskelamin', 'Gender', 'required');
		$this->form_validation->set_rules('alamat', 'Address', 'required');
		$this->form_validation->set_rules('kota', 'City', 'required');
		$this->form_validation->set_rules('telp', 'Telpon Number', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/tamu');
			$this->load->view('admin/footer');
		}

		else{
			$this->m_booking->add_guest();
			redirect('c_booking/admin_shedule');
		}

	}
	/*-----------------------------------------End Guest or Tamu---------------------------------------------------*/

	/*-----------------------------------------Employee or Karyawan---------------------------------------------------*/
	public function admin_employee()
	{
		$this->m_login->checklogin();
		$data['user'] = $this->m_login->get_user();

		$this->load->view('admin/header');
		$this->load->view('admin/karyawan', $data);
		$this->load->view('admin/footer');
	}

	public function update_employee($username)
	{
		$this->m_login->checklogin();
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('jabatan', 'Position', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/karyawan');
			$this->load->view('admin/footer');
		}
		
		else{
			$this->m_booking->update_employee();
			redirect('c_booking/admin_employee');
		}
	}
	/*-----------------------------------------End Employee or Karyawan---------------------------------------------------*/

	/*-----------------------------------------End Bagian Admin---------------------------------------------------*/
}
