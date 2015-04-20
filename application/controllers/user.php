<?php 
	class User extends CI_Controller
	{
		//构造函数、载入类库和模型
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('user_model');
			$this->load->library('session');
		}



		//login
		function do_login()
		{
			$post = $this->input->post();
			if($post['email']=='' OR $post['password']== '')
			{
				$res['mes']='请输入完整的登陆信息';
				$res['status']=0;
			}
			else if($this->user_model->login($post))
			{
				$res['mes']='登陆成功';
				$res['status']=1;
			}
			else
			{
				$res['mes']='登陆失败';
				$res['status'] = 0;
			}
			echo json_encode($res);
		}
		//register
		function do_register()
		{
			$post =$this->input->post();
			if($post['name']=='' OR $post['password']=='' OR $post['email']=='')
			{
				$res['mes']='请输入完整的注册信息';
				$res['status']=0;
			}
			else 
			{
				$result = $this->user_model->register($post);
				if($result==0) 
				{
					$res['mes']='has been exists';
					$res['status']=0;
				}
				else if($result==1)
				{
					$res['mes']='注册success';
					$res['status']=1;
				}
				else if($result==1)
				{
					$res['mes']='注册failed';
					$res['status']=0;
				}
			}
			echo json_encode($res);
		}

		//change user information
		function change_info()
		{
			$post = $this->input->post();
			foreach ($post as $key => $value) 
			{
				if($value=='')
				{
					$res['status'] = 0;
					$res['msg'] = "please fill in all info";
					echo json_encode($res); 
					return ;
				}
			}
			if( $this->user_model->update($post) )
			{
				$res['status'] = 1;
				$res['msg'] = "success";
			}
			else
			{
				$res['status'] = 0;
				$res['msg'] = "failed";
			}
			echo json_encode($res); 

		}

		function upload_avater()
		{
			$post = $this->input->post();
			$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/xz/public/upload/user';


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


				if ($this->user_model->upload($targetFile)){
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

		function logout()
		{
			$data = array('userid'=>'','name'=>'');
			$this->session->unset_userdata($data);
			echo 1;
		}
	}