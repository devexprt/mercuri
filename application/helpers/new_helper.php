<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  if ( ! function_exists('get_userdata'))
  {
    function get_userdata()
    {
      //get main CodeIgniter object
      $ci =& get_instance();
      $id = $ci->session->userdata('user_id');
      //get data from database
      $query = $ci->db->get_where('users',array('id'=>$id));
      if($query->num_rows() > 0)
      {
        $result1 = $query->row();
        $result = json_encode($result1);
        return $result;
      }
      else
      {
        return false;
      }
    }
  }

  if ( ! function_exists('check_session'))
  {
    function check_session()
    {
      //get main CodeIgniter object
      $ci =& get_instance();
      $id = $ci->session->userdata('user_id');
      if(!isset($id))
      {
        return false;
      }
      else
      {
        return true;
      }
    }
  }


?>