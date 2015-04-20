<?php
class Collection_Model extends CI_Model
{
    function __construct()
    {
        	parent::__construct();
        	$this->load->database();
    }

    function add_collect($post)
    {	
    	$arr['proid'] = (int)$post['proid'];
    	$arr['userid'] = $this->session->userdata('userid');
    	$this->db->where($arr);
    	$query = $this->db->get('collect');
    	if($row = $query->row_array())
    		return FALSE;
    	if($this->db->insert('collect',$arr))
           		return $this->db->insert_id();
           	return FALSE;
    }


   function delete($post)
    {
    	$arr['proid'] = (int)$post['proid'];
    	$arr['userid'] = 2;//$this->session->userdata('userid');
             $this->db->where($arr);
             if($this->db->delete('collect'))
                 return TRUE;
             return FALSE;
    }

    function is_collect($post)
    {
    	$arr['proid'] = (int)$post['proid'];
    	$arr['userid'] = $this->session->userdata('userid');
    	$this->db->where($arr);
    	$query = $this->db->get('collect');
    	if($row = $query->row_array())
    		return true;
    	return false;
    }

}