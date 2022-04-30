<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung extends MY_Controller {

	public function __construct(){
        parent::__construct();
        error_reporting(0);
        $this->load->model('M_akses');
	}
	public function index(){
        $data['data'] = $this->M_akses->get_('tb_kriteria','*');
		$this->render_page('hitung/list_hitung', $data);
    }
    
    function form_hitung($id_kriteria=''){
        if(!empty($id_kriteria)){
            $data['data'] = $this->M_akses->get_('tb_kriteria','*','WHERE id_kriteria="'.$id_kriteria.'"');
        }
        $this->render_page('hitung/form_hitung', $data);
    }

    function action($id_kriteria=''){
        $data['nama_kriteria'] = $this->input->post('nama_kriteria');
        $data['bobot_kriteria'] = $this->input->post('bobot_kriteria');
        
        if(empty($id_kriteria)){
            $this->db->insert('tb_kriteria', $data);
        } else {
            $this->db->where('id_kriteria', $id_kriteria);
            $this->db->update('tb_kriteria', $data);
        }
        redirect(base_url().'hitung');
    }

    public function hapus($id_kriteria){
        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->delete('tb_kriteria');
        redirect($_SERVER['HTTP_REFERER']);
    }

}
