<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pelanggan_model');

    is_logged_in();
  }

  public function index()
  {
    $data['title'] = 'Home';
    $data['pelanggan'] = $this->Pelanggan_model->get_pelanggan_details();

    $this->load->view('templates/pelanggan_header', $data);
    $this->load->view('templates/pelanggan_navbar', $data);
    $this->load->view('pelanggan/index', $data);
    $this->load->view('templates/pelanggan_footer');
  }

  public function profile()
  {
    $data['title'] = 'My Profile';
    $data['pelanggan'] = $this->Pelanggan_model->get_pelanggan_details();

    $this->load->view('templates/pelanggan_header', $data);
    $this->load->view('templates/pelanggan_navbar', $data);
    $this->load->view('pelanggan/profile', $data);
    $this->load->view('templates/pelanggan_footer');
  }

  public function edit()
  {
    $data['title'] = 'Edit Profile';
    $data['pelanggan'] = $this->Pelanggan_model->get_pelanggan_details();

    $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');
    $this->form_validation->set_rules('no_telepon', 'Nomer Telepon', 'required|trim|min_length[10]', [
      "min_length" => "No telepon minimal 10 angka"
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/pelanggan_header', $data);
      $this->load->view('templates/pelanggan_navbar', $data);
      $this->load->view('pelanggan/edit', $data);
      $this->load->view('templates/pelanggan_footer');
    } else {
      $this->Pelanggan_model->edit_pelanggan();

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been changed</div>');
      redirect('pelanggan');
    }
  }

  public function changepassword()
  {
    $data['title'] = 'Change Password';
    $data['pelanggan'] = $this->Pelanggan_model->get_pelanggan_details();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'New Password', 'required|trim|min_length[6]|matches[new_password1]');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/pelanggan_header', $data);
      $this->load->view('templates/pelanggan_navbar', $data);
      $this->load->view('pelanggan/changepassword', $data);
      $this->load->view('templates/pelanggan_footer');
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');

      if (!password_verify($current_password, $data['pelanggan']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password</div>');
        redirect('pelanggan/changepassword');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password</div>');
          redirect('pelanggan/changepassword');
        } else {
          //  if password correct
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          // change password
          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('pelanggan');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed</div>');
          redirect('user/changepassword');
        }
      }
    }
  }
}
