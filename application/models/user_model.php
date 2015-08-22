<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 function login($email,$password)
 {
  $this->db->where("email",$email);
  $this->db->where("password",$password);

  $query=$this->db->get("user");
  
  if($query->num_rows()>0)
  {

   foreach($query->result() as $rows)
   {
    //add all data to session
    $newdata = array(
      'user_email'  => $rows->email,
      'logged_in'  => TRUE,
    );
   }
   $this->session->set_userdata($newdata);
   return true;
  }
  return false;
 }
   public function add_user($email,$password)
   {
    $data=array(
      'email'=>$email,
      'password'=>$password
    );
    $this->db->insert('user',$data);
    $data = array(
      'email'=>$email
    );
    $this->db->insert('user_details',$data);
   }

   public function add_user_details($email,$data){
      $this->db->where("email",$email);
      $this->db->update('user_details',$data);
   }
}
?>