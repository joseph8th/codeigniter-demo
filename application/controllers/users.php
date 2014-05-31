<?php

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


  public function view($username)
  {
    $data['user'] = $this->users_model->get_users($username);

    if (empty($data['user'])) {
      show_404();
    }

    $data['title'] = $data['user']['name'];

    $this->load->view('templates/header', $data);
    $this->load->view('users/view', $data);
    $this->load->view('templates/footer');
  }


  public function create()
  {
    $data['title'] = 'Create User';

    $rules = array(
                   array(
                         'field' => 'name',
                         'label' => 'Name',
                         'rules' => 'trim|max_length[64]'
                         ),
                   array(
                         'field' => 'email',
                         'label' => 'Email',
                         'rules' => 'trim|max_length[64]'
                         ),
                   array(
                         'field' => 'dob',
                         'label' => 'Date of Birth',
                         'rules' => 'callback_dob_check'
                         ),
                   array(
                         'field' => 'fav_color',
                         'label' => 'Favorite Color',
                         'rules' => 'trim|min_length[3]|max_length[64]'
                         )
                   );

    $this->form_validation->set_rules($rules);
    $this->form_validation->set_error_delimiters('<div class="error">',
                                                 '</div>');

    if ($this->form_validation->run() === FALSE) 
      {
        $this->load->view('templates/header', $data);
        $this->load->view('users/create');
        $this->load->view('templates/footer');
      }
    else
      {
        $this->users_model->set_users();

        $this->load->view('templates/header', $data);
        $this->load->view('users/success');
        $this->load->view('templates/footer');
      }
  }


  public function dob_check($str)
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


}