<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akses extends CI_Controller {

	public function login(){
		$this->load->view('akses/login');
	}

	public function eksekusi_login(){
		$this->load->model('M_akses');
		$select_tb_user = $this->M_akses->get_('tb_user', '*', 'WHERE username="'.$this->input->post('username').'" AND password="'.$this->input->post('password').'"');
		if(!empty($select_tb_user[0]->id_user)){
			$data['id_user'] = $select_tb_user[0]->id_user;
			$data['nama_user'] = $select_tb_user[0]->nama_user;
			$data['jabatan'] = $select_tb_user[0]->jabatan;
			$data['foto'] = $select_tb_user[0]->foto;
			$data['level'] = $select_tb_user[0]->level;
			$this->session->set_userdata($data);
			redirect(base_url().'dashboard');
		} else {
			redirect(base_url().'akses/login');
		}
	}

	public function lupa_password(){
		$this->load->view('akses/lupa_password');
	}

	public function eksekusi_lupa_password(){
		$this->load->model('M_akses');
		$select_tb_user = $this->M_akses->get_('tb_user', '*', 'WHERE username="'.$this->input->post('username').'" AND password="'.$this->input->post('password').'"');
		if(!empty($select_tb_user[0]->id_user)){
			$data['id_user'] = $select_tb_user[0]->id_user;
			$data['level'] = $select_tb_user[0]->level;
			$this->session->set_userdata($data);
			redirect(base_url().'dashboard');
		} else {
			redirect(base_url().'akses/lupa_password');
		}
	}
	public function logout(){
		$data = array(
			'id_user' => '',
			'nama_user' => '',
			'jabatan' => '',
			'foto' => '',
			'level' => '',
		);
		$this->session->set_userdata($data);
		redirect(base_url());
	}

}
