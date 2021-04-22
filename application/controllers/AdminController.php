<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	private $encryptKey = 'MySecretKey12345';
    private $iv = '1234567890123456';
	private $blocksize = 16;
	
	public function __construct(){
		parent::__construct();
		$this->load->model('AdminModel'); //Load the Model here 
		$this->load->library('session');
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->session->userdata('userdata')){
			$data = [];
			$data['currentUser'] = $this->session->userdata('userdata');
			$data['totalCustomers'] = count($this->AdminModel->getAllCustomers());
			$data['totalAgents'] = count($this->AdminModel->getAllAgents());
			return $this->load->view('dashboard', $data);
		}else{
			return $this->load->view('login/login-form');
		}
	}
	public function allCustomers()
	{
		$data['currentUser'] = $this->session->userdata('userdata');
		$data['customersList'] = $this->AdminModel->getAllCustomers();
		return $this->load->view('users/all-customers', $data);
	}
	public function allAgents()
	{
		$data['currentUser'] = $this->session->userdata('userdata');
		$data['agentsList'] = $this->AdminModel->getAllAgents();
		return $this->load->view('users/all-agents', $data);
	}
	
	public function login()
	{
		if(isset($_POST['login-form'])){
			$errors = [];
			if(!isset($_POST['email']) || empty($_POST['email'])){
				$errors['error'] = true;
				$errors['field']['email'] = ['Email address should not be empty!'];
			}
			if(!isset($_POST['password']) || empty($_POST['password'])){
				$errors['error'] = true;
				$errors['field']['password'] = ['Password should not be empty!'];
			}
			
			if(empty($errors)){			

				//check for user by email and password if exists then login
				$user = $this->AdminModel->getAdmin($_POST['email'], md5($_POST['password']));
				if($user){
					$this->session->set_userdata('userdata',$user);
					redirect(base_url());
				}else{
					$data['error'] = 'The information you entered doesn\'t match our records. Please try again.';
					return $this->load->view('login/login-form', $data);
				}
			}
		}else{
			return $this->load->view('login/login-form');
		}
		
	}

	public function profile(){
	
		$data['currentUser'] = $this->session->userdata('userdata');
		if(isset($_POST['submit'])){

			$update = $this->AdminModel->update($_POST['id'], $_POST['firstname']." ".['lastname'], $_POST['phone']);
			$user = $this->AdminModel->getUser($data['currentUser'][0]->email);

			if($user){
				$this->session->set_userdata('userdata',$user);


				redirect(base_url('profile?success=true'));
				
			 }

		}else{			
			$this->load->view('profile', $data);
		}
		
	}

	function delete_customer($_id) {
		if ($_id) {
            $this->AdminModel->delete_customer($_id);
        }
		redirect(base_url('customers'));
	}

	function delete_agent($_id) {
		// echo $_id;die;
		if ($_id) {
            $this->AdminModel->delete_agent($_id);
        }
		redirect(base_url('agents'));
	}
}
