<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Master_model extends CI_Model
{
    function getdatakunjungan(){
        $this->db->select('*, DATE(tgl_kunjungan) as date, TIME(tgl_kunjungan) as time');
        $this->db->from('tbl_kunjungan_industri');
        $query = $this->db->get();

        return $query->result();
	}
}