<?php

/**
 * CI_Controller class maps 'User' model to list and detail views, as well as * create, update, and delete views. 
 */
class Users extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->model('users_model');
  }


  public function index()
  {
    $data['users'] = $this->users_model->get_users();
    $data['title'] = 'User List';

    $this->load->view('templates/header', $data);
    $this->load->view('users/index', $data);
    $this->load->view('templates/footer');
  }


  /**
   * Controls which view (view detail, update or delete) will be loaded based
   * on POST data from 'user_action' form in 'users/view' page.
   *
   * @param string $username The 'username' slug of the User to view or edit.
   */
  public function view($username)
  {
    $data['user'] = $this->users_model->get_users($username);

    if (empty($data['user'])) {
      show_404();
    }

    if ($this->input->post('user_action') == 'edit') {
      $data['title'] = "Update " . $data['user']['name'];
      $this->load->view('templates/header', $data);
      $this->load->view('users/update', $data);
      $this->load->view('templates/footer');
    }

    elseif ($this->input->post('user_action') == 'delete') {
      $data['title'] = "Delete " . $data['user']['name'];
      $this->load->view('templates/header', $data);
      $this->load->view('users/delete-confirm', $data);
      $this->load->view('templates/footer');
    }

    else {
      $data['title'] = $data['user']['name'];
      $this->load->view('templates/header', $data);
      $this->load->view('users/view', $data);
      $this->load->view('templates/footer');
    }
  }


  public function create()
  {
    $data['title'] = 'Create User';

    $rules = $this->get_form_rules();
    $this->form_validation->set_rules($rules);
    $this->form_validation->set_error_delimiters('<div class="error">',
                                                 '</div>');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('users/create');
      $this->load->view('templates/footer');
    }
    else {
      $this->users_model->set_users();

      // load 'success' view only if not AJAX request
      if ( $this->input->post('is_ajax') != '1' ) {
        $this->load->view('templates/header', $data);
        $this->load->view('users/create-success');
        $this->load->view('templates/footer');
      }
    }

  }


  public function update($username)
  {
    $data['user'] = $this->users_model->get_users($username);
    $data['title'] = 'Update User';
    
    $rules = $this->get_form_rules();
    $this->form_validation->set_rules($rules);
    $this->form_validation->set_error_delimiters('<div class="error">',
                                                 '</div>');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('users/update', $data);
      $this->load->view('templates/footer');
    }
    else {
      $this->users_model->update_users($username);

      // load 'success' view only if not AJAX request
      if ( $this->input->post('is_ajax') != '1' ) {
        $this->load->view('templates/header', $data);
        $this->load->view('users/update-success');
        $this->load->view('templates/footer');
      }
    }

  }


  public function delete($username)
  {
    $data['user'] = $this->users_model->get_users($username);
    $postData = $this->input->post();

    if (array_key_exists('cancel', $postData)) {      
      $data['title'] = $data['user']['name'];
      $this->load->view('templates/header', $data);
      $this->load->view('users/view', $data);
      $this->load->view('templates/footer');
    }

    else {
      $this->users_model->delete_users($username);

      $data['title'] = "Delete " . $data['user']['name'];
      $this->load->view('templates/header', $data);
      $this->load->view('users/delete-success', $data);
      $this->load->view('templates/footer');
    }
  }

  /**
   * Function to validate 'Date of Birth' date field. Must be in ISO or US
   * date format.
   *
   * @param string $str The date string to be validated.
   *
   * @return bool Returns TRUE if $str is valid, otherwise FALSE.
   */
  private function dob_check($str)
  {
    $this->form_validation->set_message('dob_check',
                                        'Invalid Date format.');

    // Min date: YYYY-M-D, Max date: YYYY-MM-DD
    if ( strlen($str) < 8 || strlen($str) > 10 ) return FALSE;

    // Delimiter only '-' or '/' and want full date
    $str = str_replace('/', '-', $str);
    $dobAry = explode('-', $str);
    if ( count($dobAry) != 3 ) return FALSE; 

    // ISO Date (YYYY-MM-DD)
    if ( strlen($dobAry[0]) == 4 )
      return checkdate(intval($dobAry[1]),
                       intval($dobAry[2]),
                       intval($dobAry[0])
                       );

    // US Date (MM/DD/YYYY)
    if ( strlen($dobAry[2]) == 4 )
      return checkdate(intval($dobAry[0]),
                       intval($dobAry[1]),
                       intval($dobAry[2])
                       );

    return FALSE;
  }


  /**
   * Method to return CI validation rules for create and update forms. 
   *
   * @return mixed[][] Returns array of arrays of form rules for each field.
   */
  private function get_form_rules()
  {
    return array(
                 array(
                       'field' => 'name',
                       'label' => 'Name',
                       'rules' => 'trim|required|max_length[64]'
                       ),
                 array(
                       'field' => 'email',
                       'label' => 'Email',
                       'rules' => 'trim|required|max_length[64]'
                       ),
                 array(
                       'field' => 'dob',
                       'label' => 'Date of Birth',
                       'rules' => 'required|callback_dob_check'
                       ),
                 array(
                       'field' => 'fav_color',
                       'label' => 'Favorite Color',
                       'rules' => 'trim|min_length[3]|max_length[64]'
                       )
                 );
  }

}

/* End of users.php */