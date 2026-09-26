<?php
class About extends Controller{
  public function index($nama = 'Livia', $pekerjaan = 'makan,tidur,bangun')
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['judul'] = 'About Me';
     $this->view ('templates/header', $data);
     $this->view ('about/index', $data);
     $this->view ('templates/footer');
  }
  public function page()
  {
     $this->view ('templates/header');
     $this->view ('about/page');
     $this->view ('templates/footer');
  }
}