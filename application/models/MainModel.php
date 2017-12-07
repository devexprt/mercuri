<?php
	class MainModel extends CI_Model
	{
	    // login submit functionality

	    public function login_function($inputdata)
	    {
	    	$password = md5($inputdata['password']);
	    	$condition1 = array('email'=>$inputdata['email'],'password'=>$password);
	    	$qry1 = $this->db->get_where('users',$condition1);
	    	$qry1->num_rows();
	    	if($qry1->num_rows() > 0)
	    	{
	    		$result1 = $qry1->row();
	    		if($result1->status == 1)
	    		{
	    			$session_array = array('user_id'=>$result1->id,'user_email'=>$result1->email,'user_role'=>$result1->role);
		    		$this->session->set_userdata($session_array);
		    		// fetch role name
		    		$condition2 = array('roleid'=>$result1->role);
		    		$qry2 = $this->db->get_where('roles',$condition2);
		    		$result2 = $qry2->row();
		    	    $dash = $result2->rolename;
		    	    redirect('Main/index');
	    		}
	    		else
	    		{
	    			echo 'deactivated';
	    		}	    		
	    	}
	    	else
	    	{
	    		echo 'invalid';
	    		redirect('Main');
	    	}
	    }

	    // logout function

	    public function logout()
	    {
	    	$this->session->sess_destroy();
	    }

	}
?>