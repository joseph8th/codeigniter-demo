<?php

class Users_model extends CI_Model {


  public function __construct() 
  {
    $this->load->database();
  }


  public function get_users($username = FALSE)
  {
    if ($username === FALSE) {
      $query = $this->db->get('users');
      return $query->result_array();
    }

    $query = $this->db->get_where('users', array('username' => $username));
    return $query->row_array();
  }


  public function set_users()
  {
    $this->load->helper('url');
    $username = url_title($this->input->post('name'), 'dash', TRUE);

    $data = array('name'      => $this->input->post('name'),
                  'username'  => $username,
                  'email'     => $this->input->post('email'),
                  'dob'       => $this->input->post('dob'),
                  'fav_color' => $this->input->post('fav_color')
                  );

    return $this->db->insert('users', $data);
  }

}