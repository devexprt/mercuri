<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

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

    /*public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->udetails = json_decode(get_userdata());
        //print_r($this->udetails); die;
        $this->checksession = check_session();
        if(!$this->checksession){
        	redirect('Main','refresh');
        }
    }
*/
    public function Dashboard()
  {
    $this->load->view('client/dashboard');
  }

  public function settings()
  {
  	$this->load->view('client/settings');
  }
  
  public function policy()
  {
    $this->load->view('client/policy');
  }

  public function id_card()
  {
    $this->load->view('client/id-cards');
  }

  public function declaration()
  {
    $this->load->view('client/declaration');
  }

  public function vehicles()
  {
    $this->load->view('client/vehicles');
  }

  public function signature()
  {
    $this->load->view('client/signature');
  }

  public function messages()
  {
    $this->load->view('client/messages');
  }

  public function notifications()
  {
    $this->load->view('client/notifications');
  }

}

