<?php
class Products_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
        /*
         *
         * */
    function add($post,$targetFile)
    {
        $arr['proname'] = $post['proname'];
        $arr['userid'] = $this->session->userdata('userid');
        $arr['pid']= $post['pid'];
        $arr['time'] = time();
        $arr['pic'] = $targetFile;
        $arr['wants'] = $post['wants'];

        if($this->db->insert('products',$arr)){
            return $this->db->insert_id();
        }
        else
            return FALSE;
    }

  function del($proid = 0)
    {
        $this->db->where('proid',$proid);
        if($this->db->delete('products'))
        {
            return TRUE;
        }
        return FALSE;
    }
    
    function getall($pid=1,$limit=0)
    {
        $this->db->from('products');
        $this->db->where('pid',$pid);
        $this->db->limit(10,$limit);
        $this->db->order_by('time','desc');
        $query = $this->db->get();
        if($rows = $query->result_array())
            return $rows;
        return false;
    }

       function getmyall()
    {   
        $userid = $this->session->userdata('userid');
        $this->db->from('products');
        $this->db->where('userid',$userid);
        //$this->db->limit(10,$limit);
        $this->db->order_by('time','desc');
        $query = $this->db->get();
        if($rows = $query->result_array())
            return $rows;
        return false;
    }



    function getOne($proid)
    {
        $this->db->select('products.*,user.qq,user.phone,user.name');
        $this->db->from('products');
        $this->db->where('proid',$proid);
        $this->db->join('user','user.userid=products.userid');
        $query = $this->db->get();
        if($row = $query->row_array())
            return $row;
        return false;
    }

    function update_pro($post)
    {
        $arr['proid'] = (int)$post['proid'];
        $arr['proname'] = $post['proname'];
        $arr['userid'] = $this->session->userdata('userid');
        $arr['pid']= $post['pid'];
        $arr['time'] = time();
        $arr['wants'] = $post['wants'];
        if($this->db->update('products',$arr,array('proid'=>$arr['proid'])))
            return true;
        return false;
    }
}
