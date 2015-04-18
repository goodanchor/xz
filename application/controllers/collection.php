<?php 
	class Collection extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('collection_model');
			$this->load->library('session');
		}

		function collect()
		{
			$post = $this->input->post();
			if($this->collection_model->add_collect($post))
			{
				$res['status'] = 1;
				$res['msg'] = 'success';
			}
			else
			{
				$res['status'] = 0;
				$res['msg'] = 'failed';
			}
			echo json_encode($res);
		}

		function del_col()
		{
			$post = $this->input->post();
			if($this->collection_model->del_collect($post))
			{
				$res['status'] = 1;
				$res['msg'] = 'success';
			}
			else
			{
				$res['status'] = 0;
				$res['msg'] = 'failed';
			}
			echo json_encode($res);
		}

		function is_col()
		{
			$post = $this->input->post();
			if($this->collection_model->is_collect($post))
			{
				$res['status'] = 1;
			}
			else
			{
				$res['status'] = 0;
			}
			echo json_encode($res);
		}
	}
