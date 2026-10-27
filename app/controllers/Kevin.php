<?php

class Kevin extends Controller {
        public function index(){
            $data['judul'] = 'Wishlist Livia';
            $data['kevin'] = $this->model('Kevin_model')->getAllKevin();
            $this->view('templates/header', $data);
            $this->view('kevin/index', $data);
            $this->view('templates/footer');
        }

        public function detail($id){
            $data['judul'] = 'Kevin';
            $data['kevin'] = $this->model('Kevin_model')->getKevinById($id);
            $this->view('templates/header', $data);
            $this->view('kevin/detail', $data);
            $this->view('templates/footer', $data);
        }
        public function tambah() {
            if ($this->model('Kevin_model')->tambahDataLivia($_POST) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: '.BASEURL.'/kevin');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: '.BASEURL.'/kevin');
                exit;
            }
        }
        public function hapus($id) {
            if ($this->model('Kevin_model')->hapusDataKevin($id) > 0) {
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: '.BASEURL.'/kevin');
                exit;
            } else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('Location: '.BASEURL.'/kevin');
                exit;
            }
        }
}

?>