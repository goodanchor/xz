<?php
	class Home extends CI_Controller
	{
		//构造函数、载入类库和模型
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('user_model');
			$this->load->model('collection_model');
			$this->load->model('products_model');
			$this->load->library('session');
		}

		function index()
		{		
			$session = $this->session->all_userdata();
			if(!empty($session['userid']))
			{	
				$data['session'] = $session;
			}
			else
			{
				$arr = array('userid'=>'','name'=>'');
				$this->session->set_userdata($arr);
				$data['session'] = $this->session->all_userdata();
			}
			$this->load->view('index',$data);
		}

		function login()
		{
			$session = $this->session->all_userdata();
			if(!empty($session['userid']))
				header("LOCATON:index");
			else 
				$this->load->view('login');
		}

		function show_my_info()
		{
			$session = $this->session->all_userdata();
			if(empty($session['userid']))
				header("LOCATON:login");
			else 
			{
				$data['myinfo'] =$this->user_model->get_my_info();
				$data['session'] = $session;
				$this->load->view('myinfo',$data);
			}
				
		}

		function show_my_col()
		{
			$session = $this->session->all_userdata();
			if(empty($session['userid']))
				header("LOCATON:login");
			else 
			{
				$data['session'] = $session;
				$data['collection'] = $this->collection_model->get_my_col();
				$this->load->view('mycollection',$data);
			}		
		}

		function deliver_new()
		{
			$session = $this->session->all_userdata();
			if(empty($session['userid']))
				header("LOCATON:login");
			else 
			{
				$data['session'] = $session;
				$this->load->view('deliver_new',$data);
			}		
		}

		function show_detail($proid=1)
		{
			$proid = (int)$proid;
			$data = $this->products_model->getOne($proid);
			if($data)
				$this->load->view('detail',$data);
			else 
				$this->load->view("404NOFOUND");
		}
	}