<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//
class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->load->model('My_model');
	}


	public function index()
	{
		$show = $this->My_model->showdata('id','active');
		$data['show']=$show;
		$this->load->view("index",$data);
	}

	public function ShowAll()
	{
		$book = $this->My_model->showallbook('id');
		$data['book'] = $book;
		$this->load->view("ShowAll",$data);

	}

	public function AddNew()
	{

		$this->load->view('AddNew');

		if(isset($_POST['submit']))
		{
			//(title,author,active)the coming of  the page >>AddNew.php
			$title = $_POST['title'];
			$author = $_POST['author'];
			$active = $_POST['active'];
			$errors = array();

				//If the user insert an empty data
			if(empty($title) || empty($author))
			{
				$errors[] = "All Fields Requierd" . ' ✘✘';
			}
			else
			{
				$add=$this->My_model->addtbooks($title,$author,$active);
				$add="The book successfully Added ✔️✔✍️";

			}
			if(isset($add))
			{
				$massage='<div class="alert alert-success" role="alert" style="font-size:large">' . $add . '</div>';

			echo $massage ;

				//how to make delete Session???
			//	$this->session->unset_userdata($add);

			}
			if(isset($errors)){
				foreach($errors as $error)
				{
					echo ' <div class="alert alert-danger" role="alert">'.$error.'</div>';
				}
			}

		}
	}

	public function test()
	{
		$this->load->library('form_validation');
		$result='';
		if($this->input->post('submit'))
		{
			$this->form_validation->set_rules('firstname','Username','required');

			if ($this->form_validation->run())
			{
				//echo $result='<div class="alert alert-danger" role="alert" style="font-size:large">'.'</div>';
				echo $result='true';
				//$this->load->view('myform');
			}
			else
			{
				//echo $result='<div class="alert alert-danger" role="alert" style="font-size:large">'.'</div>';
				echo$result='Flase';
			}
		}
		$data['result']=$result;
		$this->load->view('Test',$data);
	}


}









