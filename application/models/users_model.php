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
    // Create a unique username from the validated 'name' field
    $username = url_title($this->input->post('name'), 'dash', TRUE);

    // if the username already exists then create a unique one
    $suffix = 0;
    $testname = $username;

    do {
      $query = $this->db->get_where('users', array('username' => $testname));

      if ( empty($query->row_array()) ) break;

      $testname = $username . "-{$suffix}";
      $suffix++;
    } while ( ! empty($query) );

    $username = $testname;

    // Format date of birth to ISODate from validated 'dob' field
    $dobStr = str_replace('/', '-', $this->input->post('dob'));
    $dobAry = explode('-', $dobStr);

    if ( strlen($dobAry[2]) == 4 )
      $dobStr = implode('-', array($dobAry[2], $dobAry[0], $dobAry[1]));

    // Then setup 'data' array for insertion
    $data = array('name'      => $this->input->post('name'),
                  'username'  => $username,
                  'email'     => $this->input->post('email'),
                  'dob'       => $dobStr,
                  'fav_color' => $this->input->post('fav_color')
                  );

    return $this->db->insert('users', $data);
  }

}

/* End of users_model.php */