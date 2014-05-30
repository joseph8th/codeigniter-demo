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
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create User';

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('dob', 'Date of Birth', 'required');

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

}