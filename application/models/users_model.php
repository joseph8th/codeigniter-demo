<?php

/**
 * CI_Model class encapsulating 'Users' data get, set, update and delete.
 */
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

    // make sure we have an ISO Date for the DB
    $dobStr = $this->get_ISOdate($this->input->post('dob'));

    // Then setup 'data' array for insertion
    $data = array('name'      => $this->input->post('name'),
                  'username'  => $username,
                  'email'     => $this->input->post('email'),
                  'dob'       => $dobStr,
                  'fav_color' => $this->input->post('fav_color')
                  );

    return $this->db->insert('users', $data);
  }


  public function update_users($username)
  {
    // make sure we have an ISO Date for the DB
    $dobStr = $this->get_ISOdate($this->input->post('dob'));

    // Then setup 'data' array for insertion
    $data = array('name'      => $this->input->post('name'),
                  'email'     => $this->input->post('email'),
                  'dob'       => $dobStr,
                  'fav_color' => $this->input->post('fav_color')
                  );

    return $this->db->update('users', $data, array('username' => $username));
  }


  public function delete_users($username)
  {
    $this->db->delete('users', array('username' => $username));
  }


  /**
   * Method to reformat validated date string and return ISO date.
   *
   * @param string $dateStr The pre-validated date string to format.
   *
   * @return string Returns date string in ISO format.
   */
  private function get_ISOdate($dateStr)
  {
    // Format date of birth to ISODate from validated 'dob' field
    $dobStr = str_replace('/', '-', $dateStr);
    $dobAry = explode('-', $dobStr);

    if ( strlen($dobAry[2]) == 4 )
      $dobStr = implode('-', array($dobAry[2], $dobAry[0], $dobAry[1]));

    return $dobStr;
  }

}

/* End of users_model.php */