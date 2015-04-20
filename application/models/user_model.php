<?php
class User_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
        /*
         *
         * */
    function login($post)
    {   
        $arr['email'] = $post['email'];
        $arr['password'] = md5($post['password']);
        $query = $this->db->get_where('user',$arr);

        if ($row = $query->row_array()) {
            $data['name'] = $row['name'];
            $data['userid'] = $row['userid'];
            $this->session->set_userdata($data);
            return TRUE;
        }
        else
            return FALSE;
    }

    function upload($targetFile)
    {
        $userid = $this->session->userdata('userid');
        if ( !  $userid)
            return FALSE;
        $arr['pic'] = $targetFile;
        if( $this->db->update('user',$arr,array('userid'=>$userid)) ) 
        {
            return True;
        }
        else
            return FALSE;
    }

    function update($post)
    {
        if(isset($post['password']) && !empty($post['password']))
            $post['password'] = md5($post['password']);
        $userid = $this->session->userdata('userid');
        if ( !  $userid)
            return FALSE;
        if( $this->db->update('user',$post,array('userid'=>$userid)) ) 
        {
            return True;
        }
        else
            return FALSE;
    }

    function register($post)
    {
        $post['password'] = md5($post['password']);
        $query = $this->db->get_where('user',array('email'=>$post['email']));
        if($row = $query->row_array())
            return 0;
        if($this->db->insert('user',$post))
        {
            $data['userid'] = $this->db->insert_id();
            $data['name'] = $post['name'];
            $this->session->set_userdata($data);
            return 1;
        }
        return 2;
    }

}