<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        //LOAD DATA MODEL USER
        $this->CI->load->model('user_model');
	}

	//fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username,$password);
		//Jika ada data user , maka create session login
		if($check){
			$id_user     = $check->id_user;
			$nama        = $check->nama;
			$akses_level = $check->akses_level;
			//Create session
			$this->CI->session->set_userdata('id_user',$id_user);
			$this->CI->session->set_userdata('nama',$nama);
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('akses_level',$akses_level);
			//redirect ke halaman admin yang diproteksi
			redirect(base_url('admin/dasbor'),'refresh');
		}else{
			//jika data tidak ada
			$this->CI->session->set_flashdata('pesan', '<div class="alert alert-warning">Username atau password salah</div>');
			redirect(base_url('login'),'refresh');
		}
	}
	//fungsi cek login
	public function cek_login()
	{
		//memeriksa session sudah ada atau blum, jika blum alihkan ke halaman login
		if ($this->CI->session->userdata('username') == "") {
			$this->CI->session->set_flashdata('pesan', '<div class="alert alert-warning">Anda blum login</div>');
			redirect(base_url('login'),'refresh');
		}
	}
	//fungsi logout
	public function logout()
	{
		//membuang semua session yang telah diset pada saat login
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		//setelah dibuang lalu di direct ke login
		$this->CI->session->set_flashdata('pesan', '<div class="alert alert-success">Anda berhasil logout</div>');
		redirect(base_url('login'),'refresh');
	}

	

}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
