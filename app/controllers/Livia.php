<?php

class Livia extends Controller {
        public function index(){
            $data['judul'] = 'Wishlist Livia';
            $data['livia'] = $this->model('Livia_model')->getAllLivia();
            $this->view('templates/header', $data);
            $this->view('livia/index', $data);
            $this->view('templates/footer');
        }

        public function detail($id){
            $data['judul'] = 'Detail Mahasiswa';
            $data['livia'] = $this->model('Livia_model')->getLiviaById($id);
            $this->view('templates/header', $data);
            $this->view('livia/detail', $data);
            $this->view('templates/footer', $data);
        }

        public function tambah() {
            if ($this->model('Livia_model')->tambahDataLivia($_POST) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: '.BASEURL.'/livia');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: '.BASEURL.'/livia');
                exit;
            }
        }

        public function hapus($id) {
            if ($this->model('Livia_model')->hapusDataLivia($id) > 0) {
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: '.BASEURL.'/livia');
                exit;
            } else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('Location: '.BASEURL.'/livia');
                exit;
            }
        }

}
?>