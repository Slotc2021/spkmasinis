<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('id_user'))){
            redirect(base_url().'akses/login');
        }
	}
	public function index(){
        error_reporting(0);
		$this->render_page('dashboard_view');
	}

}
