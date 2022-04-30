<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends MY_Controller {

	public function __construct(){
        parent::__construct();
        error_reporting(0);
        if(empty($this->session->userdata('id_user'))){
            redirect(base_url().'akses/login');
        }
        $this->load->model('M_akses');
	}
	public function index(){
        $data['data'] = $this->M_akses->get_('tb_user','*');
		$this->render_page('karyawan/list', $data);
    }
    
    function form($id_user=''){
        $data['instruktur'] = $this->M_akses->get_('tb_user', '*');
        if(!empty($id_user)){
            $data['data'] = $this->M_akses->get_('tb_user','*','WHERE id_user="'.$id_user.'"');
        }
        $this->render_page('karyawan/form', $data);
    }

    function action($id_user=''){
        $data['nama_user'] = $this->input->post('nama_user');
        $data['nipp_user'] = $this->input->post('nipp_user');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['jabatan'] = $this->input->post('jabatan');
        $data['induk_user'] = $this->input->post('instruktur');
        $data['username'] = $this->input->post('nipp_user');
        $arr_nama = explode(' ', $this->input->post('nama_user'));
        $data['password'] = $arr_nama[0].$this->input->post('nipp_user');
        if (!empty($_FILES['foto']['name'])) {
            $target_dir = $_SERVER['DOCUMENT_ROOT']."/spkmasinis/assets/img/foto/";
            $target_file = $target_dir . basename($_FILES["foto"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                $name = basename( $_FILES["foto"]["name"]);
                $data['foto'] = $name;
            } 
        }
        if(empty($id_user)){
            $this->db->insert('tb_user', $data);
        } else {
            $this->db->where('id_user', $id_user);
            $this->db->update('tb_user', $data);
        }
        redirect(base_url().'karyawan');
    }

}
