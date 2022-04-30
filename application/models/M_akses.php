<?php
class  M_akses extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function get_($table, $kolom, $where1='', $where2='', $where3=''){
        $q = "SELECT $kolom FROM $table $where1 $where2 $where3";
        $qx = $this->db->query($q);
        return $qx->result();
    }
}