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


	public function active($book_id)
	{
		$this->My_model->active($book_id);
		return redirect('Welcome/index');
	}
	public function unactive($book_id){
		$this->My_model->unActive($book_id);
		return redirect('Welcome/index');
	}
	
	public function updatebook()
	{
		$data['id']=$this->uri->segment(3);
		$edit=$this->input->post('edit');
		if(!empty($edit))
		{
			
			$update= array(
				'title'=>$this->input->post('title'),
				'author'=>$this->input->post('author')
				);
			$this->My_model->update($this->uri->segment(3),$update);
			return redirect('Welcome/index');
		}
		
		$data['result'] =$this->My_model->getid($this->uri->segment(3));
		$this->load->view('edit',$data);
	}
	public function delete()
	{
		$id = $this->uri->segment(3);
		if($this->My_model->delete($id))
		{
			return redirect('Welcome/index');
		}
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
			echo '<div class="alert alert-success" role="alert" style="font-size:large">' . $add . '</div>';
			}
			if(isset($errors)){
				foreach($errors as $error)
				{
					echo ' <div class="alert alert-danger" role="alert">'.$error.'</div>';
				}
			}

		}
	}


	public function ShowAll()
	{
		$book = $this->My_model->showallbook('id');
		$data['book'] = $book;
		$this->load->view("ShowAll",$data);

	}





}









