<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('pelanggan');
    }

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Pelanggan';

      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/index');
      $this->load->view('templates/auth_footer');
    } else {
      $this->_login_pelanggan();
    }
  }

  private function _login_pelanggan()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $pelanggan = $this->db->get_where('pelanggan', ['email' => $email])->row_array();

    if ($pelanggan) {
      // cek password
      if (password_verify($password, $pelanggan['password'])) {
        $data = [
          'email' => $pelanggan['email'],
        ];
        $this->session->set_userdata($data);
        redirect('pelanggan');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password wrong</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email has not been registered</div>');
      redirect('auth');
    }
  }


  public function adminpanel()
  {
    if ($this->session->userdata('email')) {
      redirect('pelanggan');
    }

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Pegawai';

      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/adminpanel');
      $this->load->view('templates/auth_footer');
    } else {
      $this->_login_pegawai();
    }
  }

  private function _login_pegawai()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $pegawai = $this->db->get_where('pegawai', ['email' => $email])->row_array();

    if ($pegawai) {
      // check password
      if (password_verify($password, $pegawai['password'])) {
        $data = [
          'email' => $pegawai['email'],
        ];
        $this->session->set_userdata($data);
        redirect('pegawai');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password wrong</div>');
        redirect('auth/adminpanel');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email not registered</div>');
      redirect('auth/adminpanel');
    }
  }

  public function register()
  {
    if ($this->session->userdata('email')) {
      redirect('pelanggan');
    }

    $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|is_unique[pelanggan.email]', [
      "is_unique" => "This email has already registered"
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
      "matches" => "Password dont match",
      "min_length" => "Password min 6 character"
    ]);
    $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|trim|matches[password1]');
    $this->form_validation->set_rules('no_telepon', 'Nomer Telepon', 'required|trim|min_length[10]', [
      "min_length" => "No telepon minimal 10 angka"
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');


    if ($this->form_validation->run() == FALSE) {
      $data['title'] = 'Register Page';

      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/register');
      $this->load->view('templates/auth_footer');
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama')),
        'email' => htmlspecialchars($this->input->post("email")),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'no_telepon' => htmlspecialchars($this->input->post("no_telepon")),
        'alamat' => htmlspecialchars($this->input->post("alamat"))
      ];

      $this->db->insert('pelanggan', $data);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created</div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('email');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out</div>');
    redirect('auth');
  }
}
