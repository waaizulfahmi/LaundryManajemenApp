<?php

class Pelanggan_model extends CI_Model
{
  public function get_pelanggan_details()
  {
    return $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
  }

  public function edit_pelanggan()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'no_telepon' => $this->input->post("no_telepon"),
      'alamat' => $this->input->post("alamat")
    ];

    $this->db->where('email', $this->session->userdata('email'));
    $this->db->update('pelanggan', $data);
  }
}
