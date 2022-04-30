<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends MY_Controller {

	public function __construct(){
        parent::__construct();
        error_reporting(0);
        $this->load->model('M_akses');
	}
	public function index(){
        $data['data'] = $this->M_akses->get_('tb_user','*');
		$this->render_page('nilai/list_nilai', $data);
    }
    
    function form_nilai($id_nilai=''){
        if(!empty($id_nilai)){
            $data['data'] = $this->M_akses->get_('tb_user','*','WHERE id_user="'.$id_user.'"');
        }
        $this->render_page('nilai/form_nilai', $data);
    }

    function action($id_nilai=''){
        $data['nama_user'] = $this->input->post('nama_user');
        
        if(empty($id_nilai)){
            $this->db->insert('tb_nilai', $data);
        } else {
            $this->db->where('id_nilai', $id_nilai);
            $this->db->update('tb_nilai', $data);
        }
        redirect(base_url().'nilai');
    }

    public function hapus($id_nilai){
        $this->db->where('id_nilai', $id_nilai);
        $this->db->delete('tb_nilai');
        redirect($_SERVER['HTTP_REFERER']);
    }

}
