<?php
class City extends CI_Model{

 	public function __construct()
    {
        $this->load->database();
    }

    public function get_city(){
    	//$this->db->cache_on();
    		$result=$this->db->get('city');
    		return $result->result();
    	//$this->db->cache_off();
    }



}