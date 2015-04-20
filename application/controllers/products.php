<?php 
	class Products extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('products_model');
			$this->load->library('session');
		}

		//add new
		function deliver_new_pro()
		{
			$post = $this->input->post();
			if($post['proname']=='' OR $post['pid']=='' OR $post['wants']=='')
			{
				echo 0;
				return ;
			}

			$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/xz/public/upload/products';


			$verifyToken = md5('smelltheflower'.$post['timestamp']);

			if ( ! empty($_FILES) && $post['token']==$verifyToken) {


				$tempFile = $_FILES['Filedata']['tmp_name'];
				$targetPath = $targetFolder;

				$fileTypes = array();
				$fileParts = pathinfo($_FILES['Filedata']['name']);

				$fileaddress = md5(time().$_FILES['Filedata']['name']).'.'.$fileParts['extension'];
				$targetFile = $targetPath.'/'.$fileaddress;

				if(!move_uploaded_file($tempFile,$targetFile))
					return 0;


				if ($this->products_model->add($post,$targetFile))
				{
					echo '1';
				}
				else  {
					echo '0';
				}        

			}
			else {
				echo '0';
			}
			return ;
		}

		function update()
		{
			$post = array('proid'=>16,'proname'=>'dhg','pid'=>2,'wants'=>2);//$this->input->post();

			if($post['proid']=='' OR $post['proname']=='' OR $post['pid']=='' OR $post['wants']=='')
			{
				$res['status'] = 0;
				$res['msg'] = 'please fill all';
			}
			else if($this->products_model->update_pro($post))
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

		function del_pro()
		{
			$proid = (int)$this->input->post('proid');
			if($this->products_model->del($proid))
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

		function getAll()
		{
			$post = $this->input->post();
			if($rows = $this->products_model->getall((int)$post['pid'],(int)$post['limit']))
			{
				$res['status'] = 1;
				$res['msg'] = 'success';
				$res['rows'] = $rows;
			}
			else
			{
				$res['status'] = 0;
				$res['msg'] = 'failed';
				$res['rows'] = '';
			}
			echo json_encode($res);
		}

		function getOne()
		{
			$proid= array('proid'=> 16);
			if($row= $this->products_model->getOne($proid))
			{
				$res['status'] = 1;
				$res['msg'] = 'success';
				$res['row'] = $row;
			}
			else
			{
				$res['status'] = 0;
				$res['msg'] = 'failed';
				$res['rows'] = '';
			}
			echo json_encode($res);
		}
		
	/*	function get_recommend()
		{
			$this->products_model->get
		}*/
		
	}