<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
        $this->load->model('MainModel');
        $this->checksession = check_session();
    }  

    // load index view

  public function index()
  {
    if($this->checksession)
    {
      $role = $this->session->userdata('user_role');
      if($role == '0')
      $redirect_url = 'Admin';
      if($role == '1')
      $redirect_url = 'Client';
          redirect($redirect_url.'/Dashboard'  ,'refresh');
    }
    $this->load->view('login');
  }

  // login function

  public function login()
  {
    $inputdata = $this->input->post();
    $res = $this->MainModel->login_function($inputdata);
  }

  // logout function

  public function logout()
  {
    $res = $this->MainModel->logout();
    redirect('Main','refresh');
  }
}
?>