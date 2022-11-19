<?php

class Pegawai_model extends CI_Model
{
  public function get_pegawai_details()
  {
    return $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
  }

  public function edit_pegawai()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'no_telepon' => $this->input->post("no_telepon"),
      'alamat' => $this->input->post("alamat")
    ];

    $this->db->where('email', $this->session->userdata('email'));
    $this->db->update('pegawai', $data);
  }
}
