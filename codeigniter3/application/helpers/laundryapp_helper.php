<?php

function is_logged_in()
{
  // untuk memanggil fungsi codeigniter
  $ci = get_instance();

  if (!$ci->session->userdata('email')) {
    redirect('auth');
  }
}
