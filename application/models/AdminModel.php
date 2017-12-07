<?php 

class AdminModel extends CI_Model
{

   public function add_agent($inputdata)
   { 
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
            	$inser = $this->db->insert('agents',$agents);

   }

   //fetch the list of agents
   public function fetch_agents()
   {
        $this->db->select();
        $this->db->from('agents');
        $qry1 = $this->db->get();
		$result = $qry1->result();
		return $result;
   }

    public function display($tablename,$cond='')
   {
      $qry7 = $this->db->get_where($tablename,$cond)->result();;
      return $qry7;
      
   }

   public function update($tablename,$data,$cond='')
   {
      $this->db->where($cond);
    $this->db->update($tablename, $data);
   }

   public function delete($tablename,$cond='')
   {
   	$this->db->delete($tablename,$cond);
   }
}

?>