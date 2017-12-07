<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/*function __construct() {
        $this->header = $this->load->view('includes/header');
        $this->footer = $this->load->view('includes/footer');
    }*/

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->udetails = json_decode(get_userdata());
        $this->load->helper(array('form', 'url'));
        $this->checksession = check_session();
        if(!$this->checksession){
          redirect('Main','refresh');
        }
    }


  public function Dashboard()
  {
    $this->load->view('admin/dashboard');
  }
  
  public function setting()
  {
  	$this->load->view('admin/settings');
  }

  public function add_contact()
  {
  	$this->load->view('admin/add-contact');
  }
  public function contacts()
  {
    $this->load->view('admin/contacts');
  }

  public function expiring_policy()
  {
  	$this->load->view('admin/expiring-policy');
  }

  public function policy()
  {
  	$this->load->view('admin/policy');
  }

  public function new_policy()
  {
  	$this->load->view('admin/new-policy');
  }

  public function messages()
  {
  	$this->load->view('admin/messages');
  }

  public function notifications()
  {
  	$this->load->view('admin/notifications');
  }

  public function agents()
  {
    $data['agents'] = $this->AdminModel->fetch_agents();
  	$this->load->view('admin/agents',$data);
  }

  //add new agents
  public function add_agents()
  {
    $inputdata = $this->input->post();
    $inputdata['image'] = $_FILES['profile_pic']['name'];
    $this->AdminModel->add_agent($inputdata);
    redirect('admin/agents');
  }

   public function EditData($id)
  {
    $data['lists'] = $this->AdminModel->display('agents',array('id'=>$id));
    $this->load->view('admin/editagent',$data);
  }
 
 public function edit()
  {
    $inputdata = $this->input->post();
    $inputdata['image'] = $_FILES['profile_pic']['name'];
    if($_FILES['profile_pic']['name'] != "")
    {
      $_FILES['profile_pic']['name'] = str_replace(array('!','@','#','$','%','^','&','*','(',')','+','=','-','_'),'',$_FILES['profile_pic']['name']);
      $config['upload_path']   = 'assets/uploads/agent/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|tiff|bmp';
      $config['file_name'] = date('Ymdhis').$_FILES['profile_pic']['name'];
      $config['overwrite'] = false;
      //load the upload library
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->set_allowed_types('*');
      $data['upload_data'] = '';
      $img = 'profile_pic'; 
      //error is here   
      if($this->upload->do_upload($img))
      { 

       $inputdata['image'] = $this->upload->data('file_name'); 
          chmod($config['upload_path'].$inputdata['image'],0666);
        }
      else 
      { 
        $error = array('error' => $this->upload->display_errors()); print_r($error); 
        $_POST['logo']=""; }  
        }  

              $agents = array(
                'name'=>$inputdata['name'],
                'joining_date'=>$inputdata['join_date'],
                'dob'=>$inputdata['dob'],
                'gender'=>$inputdata['gender'],
                'email'=>$inputdata['email'],
                'password'=>$inputdata['password'],
                'status'=>$inputdata['status'],
                'image' => $inputdata['image'],
                );
              $agents = array_filter($agents);
             $this->AdminModel->update('agents',$agents, array('id'=>$inputdata['id']));
             redirect('admin/agents');
  }

  public function deleteData()
  {
    $id = $this->input->post('id');    
    $this->AdminModel->delete('agents',array('id'=>$id));
   echo 'Agent deleted successfully!';
  }

  public function agent_permission()
  {
  	$this->load->view('admin/agent-permission');
  }

  public function customer()
  {
  	$this->load->view('admin/customer');
  }

  public function customer_permission()
  {
  	$this->load->view('admin/customer-permission');
  }

  public function email_template()
  {
  	$this->load->view('admin/email-template');
  }

  public function leads()
  {
  	$this->load->view('admin/leads');
  }

  public function tasks()
  {
  	$this->load->view('admin/tasks');
  }

  public function notes()
  {
  	$this->load->view('admin/notes');
  }

  public function calendar()
  {
  	$this->load->view('admin/calendar');
  }

  public function customer_detail()
  {
    $this->load->view('admin/customer_detail');
  }
}

